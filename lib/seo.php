<?php
/**
 * Head metadata and JSON-LD. partials/head.php renders whatever these return;
 * pages only ever populate the $page array.
 *
 * $page keys (all optional except title and path):
 *   title        string  page title without the site suffix, <= 42 chars
 *   description  string  meta description, 120-155 chars
 *   path         string  '/servicios/x/' — canonical path, always trailing slash
 *   ogImage      string  path or absolute URL; defaults to the site OG image
 *   ogType       string  'website' (default) or 'article'
 *   noindex      bool    emit robots noindex
 *   breadcrumbs  array   [['label' => 'Services', 'path' => '/servicios/'], ...]
 *                        without the home crumb — jsonld_breadcrumbs() prepends it
 *   faq          array   [['q' => ..., 'a' => ...], ...] → FAQPage
 *   article      array   ['headline','datePublished','dateModified','image']
 *   service      array   a content/services.php record → Service, provided by the
 *                        organisation. No offers/price: prices stay null until
 *                        the owner confirms them (content/precios.php)
 *   jsonld       array   extra raw JSON-LD blocks
 */

declare(strict_types=1);

/**
 * The title suffix every page carries: ' | <site name>', from content/site.php.
 * Nothing in this repository hardcodes a business name.
 */
function seo_title_suffix(): string
{
    $name = trim((string) (site('name') ?? ''));

    return $name === '' ? '' : ' | ' . $name;
}

/**
 * The full <title>: the page's own title plus the site suffix, unless the page
 * already carries the site name.
 */
function seo_title(array $page): string
{
    $title  = trim((string) ($page['title'] ?? ''));
    $name   = trim((string) (site('name') ?? ''));
    $suffix = seo_title_suffix();

    if ($title === '') {
        return $name;
    }

    return ($name !== '' && str_contains($title, $name)) ? $title : $title . $suffix;
}

/**
 * Canonical URL for the page.
 */
function seo_canonical(array $page): string
{
    return url($page['path'] ?? '/');
}

/**
 * Absolute URL of the social preview image.
 */
function seo_og_image(array $page): string
{
    $image = $page['ogImage'] ?? '/assets/img/og-default.jpg';

    return str_starts_with($image, 'http') ? $image : url($image);
}

/**
 * Encode a JSON-LD block for a <script> tag. Slashes and unicode stay readable;
 * `<` is escaped so the payload can never close the script element early.
 */
function json_ld(array $data): string
{
    return (string) json_encode(
        $data,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT
    );
}

/**
 * The business itself, from content/site.php. Fields the site has not supplied are
 * omitted rather than guessed, so the block stays truthful as it fills in.
 */
function jsonld_organization(): array
{
    /* The schema.org type is a site fact, not a code fact: a law firm is a
       LegalService, a plumber a Plumber. content/site.php names it. */
    $types = array_values(array_filter((array) site('schemaType')));

    $data = [
        '@context'   => 'https://schema.org',
        '@type'      => $types !== [] ? $types : ['LocalBusiness'],
        '@id'        => url('/') . '#organization',
        'name'       => (string) site('name'),
        'url'        => url('/'),
        'image'      => url('/assets/img/og-default.jpg'),
        'areaServed' => ['@type' => 'Country', 'name' => site('country') ?? market_country()],
    ];

    if (site('description')) {
        $data['description'] = site('description');
    }
    if (site('phone')) {
        $data['telephone'] = site('phone');
        $data['contactPoint'] = [
            '@type'             => 'ContactPoint',
            'contactType'       => 'sales',
            'telephone'         => site('whatsapp') ?: site('phone'),
            'availableLanguage' => ['es'],
            'areaServed'        => site('country') ?? market_country(),
        ];
    }
    if (site('email')) {
        $data['email'] = site('email');
    }
    if (site('foundedYear')) {
        $data['foundingDate'] = (string) site('foundedYear');
    }

    $address = array_filter([
        'streetAddress'   => site('street'),
        'addressLocality' => site('city'),
        'addressCountry'  => site('country'),
    ]);
    if ($address !== []) {
        $data['address'] = ['@type' => 'PostalAddress'] + $address;
    }

    $socials = array_values(array_filter((array) site('socials')));
    if ($socials !== []) {
        $data['sameAs'] = $socials;
    }

    $hours = site('openingHours');
    if (is_array($hours) && $hours !== []) {
        $data['openingHoursSpecification'] = $hours;
    }

    return $data;
}

/**
 * BreadcrumbList, always rooted at the home page. Returns null when there are no crumbs.
 */
function jsonld_breadcrumbs(array $crumbs): ?array
{
    if ($crumbs === []) {
        return null;
    }

    $items = [];
    $all   = array_merge([['label' => ui('nav.home', 'Inicio'), 'path' => '/']], $crumbs);

    foreach ($all as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['label'],
            'item'     => url($crumb['path']),
        ];
    }

    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}

/**
 * FAQPage from [['q' => ..., 'a' => ...], ...].
 */
function jsonld_faq(array $faq): ?array
{
    if ($faq === []) {
        return null;
    }

    $items = [];
    foreach ($faq as $entry) {
        if (empty($entry['q']) || empty($entry['a'])) {
            continue;
        }
        $items[] = [
            '@type'          => 'Question',
            'name'           => $entry['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $entry['a']],
        ];
    }

    if ($items === []) {
        return null;
    }

    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];
}

/**
 * Article, for blog posts.
 */
function jsonld_article(array $article, array $page): ?array
{
    if ($article === []) {
        return null;
    }

    $data = [
        '@context'         => 'https://schema.org',
        '@type'            => 'Article',
        'headline'         => $article['headline'] ?? ($page['title'] ?? ''),
        'mainEntityOfPage' => seo_canonical($page),
        'author'           => ['@type' => 'Organization', 'name' => (string) site('name')],
        'publisher'        => ['@id' => url('/') . '#organization'],
        'image'            => seo_og_image($page),
    ];

    foreach (['datePublished', 'dateModified', 'description'] as $key) {
        if (!empty($article[$key])) {
            $data[$key] = $article[$key];
        }
    }

    return $data;
}

/**
 * Service, for a page built from a content/services.php record. It points at
 * the organisation block by @id instead of repeating it, and names the parent
 * service for sub-pages (Bancard under Integración de pagos, …) so the catalogue
 * reads as a hierarchy.
 */
function jsonld_service(array $service, array $page): ?array
{
    if ($service === []) {
        return null;
    }

    $data = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => seo_canonical($page) . '#service',
        'name'        => $service['title'],
        'serviceType' => $service['navLabel'] ?? $service['title'],
        'description' => $service['metaDescription'],
        'url'         => seo_canonical($page),
        'provider'    => ['@id' => url('/') . '#organization'],
        'areaServed'  => ['@type' => 'Country', 'name' => site('country') ?? market_country()],
        'availableLanguage' => market_locale(),
    ];

    if (!empty($page['ogImage'])) {
        $data['image'] = seo_og_image($page);
    }

    if (!empty($service['parent']) && ($parent = services($service['parent'])) !== null) {
        $data['isRelatedTo'] = ['@type' => 'Service', 'name' => $parent['title'], 'url' => url($parent['path'])];
    }

    return $data;
}

/**
 * WebSite, for the homepage only: names the site so search engines can show it
 * as the result's site name.
 */
function jsonld_website(): array
{
    return [
        '@context'  => 'https://schema.org',
        '@type'     => 'WebSite',
        '@id'       => url('/') . '#website',
        'name'      => (string) site('name'),
        'url'       => url('/'),
        'inLanguage' => market_locale(),
        'publisher' => ['@id' => url('/') . '#organization'],
    ];
}

/**
 * Every JSON-LD block this page should emit, in order.
 */
function seo_jsonld(array $page): array
{
    $blocks = [jsonld_organization()];

    /* The homepage carries the whole catalogue on the organisation and names
       the site; every other page only references the organisation by @id. */
    if (($page['path'] ?? '') === '/') {
        $catalog = [];
        foreach (services() as $catService) {
            if (!empty($catService['parent'])) {
                continue;
            }
            $catalog[] = [
                '@type'       => 'Offer',
                'itemOffered' => ['@type' => 'Service', 'name' => $catService['title'], 'url' => url($catService['path'])],
            ];
        }
        $blocks[0]['hasOfferCatalog'] = [
            '@type'           => 'OfferCatalog',
            'name'            => ui('nav.services'),
            'itemListElement' => $catalog,
        ];
        $blocks[] = jsonld_website();
    }

    foreach ([
        jsonld_breadcrumbs($page['breadcrumbs'] ?? []),
        jsonld_faq($page['faq'] ?? []),
        jsonld_article($page['article'] ?? [], $page),
        jsonld_service($page['service'] ?? [], $page),
    ] as $block) {
        if ($block !== null) {
            $blocks[] = $block;
        }
    }

    foreach ($page['jsonld'] ?? [] as $extra) {
        $blocks[] = $extra;
    }

    return $blocks;
}
