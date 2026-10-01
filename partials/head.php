<?php
/**
 * Opens the document: <head> metadata, JSON-LD, font preloads and the skip
 * link. Every page requires this after setting $page (see lib/seo.php for the
 * keys it understands), then partials/header.php.
 *
 * Shared chrome: a page parameterises it through $page, it does not edit it.
 * Two optional keys exist for a second-language section: $page['lang']
 * (default: the market module's locale) and $page['hreflang'] => [locale =>
 * path, ...], which emits one <link rel="alternate" hreflang="..."> per entry.
 * A page that sets neither renders exactly as before they existed.
 */

declare(strict_types=1);

/** @var array $page */
$page        = $page ?? [];
$currentPath = $page['path'] ?? '/';
/* Analytics: none of it is Google. Plausible (cookieless, EU-hosted or
   self-hosted) and Cloudflare Web Analytics (free, cookieless) are supported;
   both stay off until config.php names them. */
$plausibleDomain = cfg('PLAUSIBLE_DOMAIN', '');
$plausibleSrc    = cfg('PLAUSIBLE_SRC', 'https://plausible.io/js/script.js');
$cfBeaconToken   = cfg('CF_BEACON_TOKEN', '');
$analyticsKind   = $plausibleDomain !== '' ? 'plausible' : ($cfBeaconToken !== '' ? 'cloudflare' : '');
$htmlLang    = $page['lang'] ?? market_locale();
?>
<!doctype html>
<html lang="<?= e($htmlLang) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e(seo_title($page)) ?></title>
<?php if (!empty($page['description'])): ?>
<meta name="description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<link rel="canonical" href="<?= e(seo_canonical($page)) ?>">
<?php foreach ($page['hreflang'] ?? [] as $hrefLocale => $hrefPath): ?>
<link rel="alternate" hreflang="<?= e($hrefLocale) ?>" href="<?= e(url($hrefPath)) ?>">
<?php endforeach; ?>
<?php if (!empty($page['noindex'])): ?>
<meta name="robots" content="noindex, follow">
<?php endif; ?>

<meta property="og:type" content="<?= e($page['ogType'] ?? 'website') ?>">
<meta property="og:site_name" content="<?= e(site('name')) ?>">
<meta property="og:locale" content="<?= e(str_replace('-', '_', $htmlLang)) ?>">
<meta property="og:title" content="<?= e(seo_title($page)) ?>">
<?php if (!empty($page['description'])): ?>
<meta property="og:description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<meta property="og:url" content="<?= e(seo_canonical($page)) ?>">
<meta property="og:image" content="<?= e(seo_og_image($page)) ?>">
<meta name="twitter:card" content="summary_large_image">

<!-- Keep in step with --ink in assets/css/site.css. -->
<meta name="theme-color" content="#0F1B2D">
<link rel="icon" href="<?= e(asset('/assets/img/favicon.svg')) ?>" type="image/svg+xml">

<link rel="preload" href="<?= e(asset('/assets/fonts/onest-latin.woff2')) ?>" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= e(asset('/assets/fonts/bricolage-grotesque-latin.woff2')) ?>" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= e(asset('/assets/css/site.css')) ?>">

<?php foreach (seo_jsonld($page) as $block): ?>
<script type="application/ld+json"><?= json_ld($block) ?></script>
<?php endforeach; ?>

<?php if ($plausibleDomain !== ''): ?>
<script defer data-domain="<?= e($plausibleDomain) ?>" src="<?= e($plausibleSrc) ?>"></script>
<script>window.plausible=window.plausible||function(){(window.plausible.q=window.plausible.q||[]).push(arguments)}</script>
<?php elseif ($cfBeaconToken !== ''): ?>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"token": "<?= e($cfBeaconToken) ?>"}'></script>
<?php endif; ?>
</head>
<body data-analytics="<?= e($analyticsKind) ?>">
<a class="skip-link" href="#main"><?= e(ui('nav.skip')) ?></a>
