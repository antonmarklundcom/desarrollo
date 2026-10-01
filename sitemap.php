<?php
/**
 * sitemap.xml, generated from the content arrays. Served at /sitemap.xml by the
 * rewrite in .htaccess (and by router.php locally).
 *
 * <lastmod> is only written when the content says when it really changed (a
 * blog article's "updated", a guide's "lastReviewed"). A page with no recorded
 * date gets no <lastmod> at all: stamping every URL with today's date teaches
 * search engines to ignore the field. <changefreq> and <priority> are omitted
 * on purpose — Google ignores both and Bing treats them as hints at best.
 *
 * Pages still marked 'stub' or 'noindex' in content/pages.php are excluded.
 * Pages with a photograph (content/images.php) carry an <image:image> entry so
 * the photos can appear in image search.
 */

declare(strict_types=1);

require __DIR__ . '/lib/bootstrap.php';

$urls = [];

/** One sitemap entry: ['loc' => ..., 'lastmod' => ?string, 'image' => ?array]. */
$add = static function (string $path, ?string $lastmod = null, ?array $image = null) use (&$urls): void {
    $urls[] = ['loc' => url($path), 'lastmod' => $lastmod, 'image' => $image];
};

/** The image record's largest file, absolute, with its alt text. */
$imageEntry = static function (?array $img): ?array {
    if ($img === null) {
        return null;
    }

    return [
        'loc'   => url($img['base'] . '-' . max($img['widths']) . '.webp'),
        'title' => (string) $img['alt'],
    ];
};

foreach (content('pages') as $path => $meta) {
    /* Stubs are noindex until the phase that owns them writes the content, and
       '/404' is not a URL of its own — neither belongs in a sitemap. */
    if (!empty($meta['stub']) || !empty($meta['noindex'])) {
        continue;
    }
    $add($path, null, $path === '/' ? $imageEntry(image_for('home')) : null);
}

foreach (services() as $slug => $service) {
    $img = image_for('service', $slug)
        ?? (!empty($service['parent']) ? image_for('service', $service['parent']) : null);
    $add($service['path'], null, $imageEntry($img));
}

foreach (content('tools') as $tool) {
    $add($tool['path'], $tool['lastReviewed'] ?? null);
}

foreach (content('guias') as $guide) {
    $add($guide['path'], $guide['lastReviewed'] ?? null);
}

foreach (content('blog') as $article) {
    $add('/blog/' . $article['slug'] . '/', $article['updated'] ?? $article['date'] ?? null);
}

foreach (content('segmentos') as $slug => $segmento) {
    $add($segmento['path'], null, $imageEntry(image_for('segment', (string) $slug)));
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?= e($url['loc']) ?></loc>
<?php if (!empty($url['lastmod'])): ?>
    <lastmod><?= e($url['lastmod']) ?></lastmod>
<?php endif; ?>
<?php if (!empty($url['image'])): ?>
    <image:image>
      <image:loc><?= e($url['image']['loc']) ?></image:loc>
      <image:title><?= e($url['image']['title']) ?></image:title>
    </image:image>
<?php endif; ?>
  </url>
<?php endforeach; ?>
</urlset>
