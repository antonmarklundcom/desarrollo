<?php
/**
 * /llms.txt — a plain-text map of the site for AI answer engines (ChatGPT
 * search, Perplexity, Claude and others that read the web). Generated from the
 * content arrays, so a new service, guide or tool is listed the moment it
 * exists. Everything stated here is already public on the pages it points to.
 */

declare(strict_types=1);

require __DIR__ . '/lib/bootstrap.php';

header('Content-Type: text/plain; charset=utf-8');

/** "- [Label](url): description" */
$line = static fn (string $label, string $path, string $desc = ''): string =>
    '- [' . $label . '](' . url($path) . ')' . ($desc !== '' ? ': ' . $desc : '');

echo '# ', site('name'), "\n\n";
echo '> ', site('description'), "\n\n";
echo "Idioma: español de Paraguay (es-PY). Presupuestos en guaraníes, siempre por escrito; el sitio no publica precios.\n";
echo 'Contacto: ', url('/contacto/'), "\n\n";

echo "## Servicios\n";
foreach (services() as $service) {
    echo $line($service['navLabel'], $service['path'], $service['metaDescription']), "\n";
}

echo "\n## Guías\n";
foreach (content('guias') as $guide) {
    echo $line($guide['navLabel'], $guide['path'], $guide['metaDescription']), "\n";
}

echo "\n## Herramientas\n";
foreach (content('tools') as $tool) {
    echo $line($tool['navLabel'], $tool['path'], $tool['metaDescription']), "\n";
}

echo "\n## Soluciones por rubro y ciudad\n";
foreach (content('segmentos') as $segmento) {
    echo $line($segmento['seoTitle'], $segmento['path'], $segmento['metaDescription']), "\n";
}

echo "\n## Blog\n";
foreach (content('blog') as $article) {
    echo $line($article['title'], '/blog/' . $article['slug'] . '/', $article['description']), "\n";
}
