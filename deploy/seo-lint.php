<?php
/**
 * On-page SEO lint, run by verify.sh against the booted site.
 *
 *     php deploy/seo-lint.php <base-url> <site-root> < routes.tsv
 *
 * stdin is the route contract from deploy/routes.php ("<path>\t<status>").
 * For every indexable page it checks what a content edit most often breaks:
 *
 *   - exactly one <h1>, and a <title> and meta description
 *   - a canonical URL whose path is the page's own path
 *   - no noindex on a page that is in the sitemap
 *   - every JSON-LD block parses; service pages carry a Service block
 *   - every <img> has alt, width and height; every file a <picture>/<img>
 *     points at exists on disk
 *   - every internal link resolves (a 200, or a file that exists) — no broken
 *     links, no link to a redirect, which would leak crawl budget
 *
 * Prints "FAIL <message>" per problem and "OK <message>" once, and exits 1 on
 * any failure. Plain PHP and curl: no Node, no external service.
 */

declare(strict_types=1);

[$self, $base, $root] = $argv + [null, 'http://127.0.0.1:8730', dirname(__DIR__)];
$root  = rtrim((string) $root, '/');
$base  = rtrim((string) $base, '/');
$fails = [];
$fail  = static function (string $msg) use (&$fails): void {
    $fails[] = $msg;
    echo 'FAIL ', $msg, "\n";
};

/** GET a path, return [status, body]. */
$get = static function (string $path) use ($base): array {
    $ch = curl_init($base . $path);
    curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 15, CURLOPT_FOLLOWLOCATION => false]);
    $body   = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [$status, is_string($body) ? $body : ''];
};

$routes = [];
while (($line = fgets(STDIN)) !== false) {
    [$p, $s] = array_pad(explode("\t", rtrim($line, "\n")), 2, '');
    if ($p !== '' && $s === '200' && !preg_match('#\.(txt|xml)$#', $p)) {
        $routes[] = $p;
    }
}

$known   = array_flip($routes);   // paths already proven to answer 200
$checked = [];                    // internal link → bool
$pages   = 0;
$links   = 0;
$images  = 0;

$resolves = static function (string $href) use (&$checked, &$known, $get, $root): bool {
    if (isset($checked[$href])) {
        return $checked[$href];
    }
    if (isset($known[$href])) {
        return $checked[$href] = true;
    }
    /* A real file (an image, the css, /favicon) passes by existing on disk. */
    $file = $root . parse_url($href, PHP_URL_PATH);
    if (is_file($file)) {
        return $checked[$href] = true;
    }
    [$status] = $get($href);

    return $checked[$href] = ($status === 200);
};

foreach ($routes as $path) {
    $pages++;
    [, $html] = $get($path);

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);
    libxml_clear_errors();
    $xp = new DOMXPath($dom);

    // --- h1, title, description, canonical, noindex ---------------------
    $h1 = $xp->query('//h1')->length;
    if ($h1 !== 1) {
        $fail("$path — $h1 <h1> elements (want exactly 1)");
    }
    if (trim((string) $xp->evaluate('string(//title)')) === '') {
        $fail("$path — empty <title>");
    }
    if (trim((string) $xp->evaluate('string(//meta[@name="description"]/@content)')) === '') {
        $fail("$path — empty meta description");
    }
    $canonical = (string) $xp->evaluate('string(//link[@rel="canonical"]/@href)');
    if ($canonical === '' || parse_url($canonical, PHP_URL_PATH) !== $path) {
        $fail("$path — canonical is \"$canonical\", not this page's own path");
    }
    if ($xp->query('//meta[@name="robots"][contains(@content,"noindex")]')->length > 0) {
        $fail("$path — noindex on a page that is in the sitemap");
    }

    // --- JSON-LD -----------------------------------------------------------
    $types = [];
    foreach ($xp->query('//script[@type="application/ld+json"]') as $node) {
        $data = json_decode($node->textContent, true);
        if (!is_array($data)) {
            $fail("$path — a JSON-LD block does not parse");
            continue;
        }
        $t = $data['@type'] ?? [];
        foreach ((array) $t as $one) {
            $types[] = $one;
        }
    }
    if (!array_intersect($types, ['Organization', 'ProfessionalService', 'LocalBusiness'])) {
        $fail("$path — no Organization block in JSON-LD");
    }
    if (str_starts_with($path, '/servicios/') && substr_count($path, '/') === 3 && !in_array('Service', $types, true)) {
        $fail("$path — a service page without Service JSON-LD");
    }

    // --- images ------------------------------------------------------------
    foreach ($xp->query('//img') as $img) {
        $images++;
        /** @var DOMElement $img */
        if (!$img->hasAttribute('alt')) {
            $fail("$path — <img src=\"" . $img->getAttribute('src') . '"> has no alt attribute');
        }
        if (!$img->getAttribute('width') || !$img->getAttribute('height')) {
            $fail("$path — <img src=\"" . $img->getAttribute('src') . '"> has no width/height (layout shift)');
        }
    }
    $files = [];
    foreach ($xp->query('//img/@src | //source/@srcset') as $attr) {
        foreach (preg_split('/\s*,\s*/', trim($attr->nodeValue)) as $candidate) {
            $url = preg_split('/\s+/', trim($candidate))[0] ?? '';
            if ($url !== '' && $url[0] === '/') {
                $files[parse_url($url, PHP_URL_PATH)] = true;
            }
        }
    }
    foreach (array_keys($files) as $file) {
        if (!is_file($root . $file)) {
            $fail("$path — image file missing on disk: $file");
        }
    }

    // --- internal links ----------------------------------------------------
    foreach ($xp->query('//a/@href') as $attr) {
        $href = trim($attr->nodeValue);
        if ($href === '' || $href[0] !== '/' || str_starts_with($href, '//')) {
            continue;                       // external, mailto:, tel:, #fragment
        }
        $clean = (string) preg_replace('/[?#].*$/', '', $href);
        if ($clean === '') {
            continue;
        }
        $links++;
        if (!$resolves($clean)) {
            $fail("$path — broken internal link: $href");
        }
    }
}

$fails = array_values(array_unique($fails));
if ($fails === []) {
    echo "OK $pages pages: one h1, canonical, JSON-LD, $images images with alt+size, ", count($checked), " internal link targets all resolve\n";
    exit(0);
}
exit(1);
