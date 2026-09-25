<?php
/**
 * Article index. The body of each article lives in its own
 * /blog/<slug>/index.php, rendered through templates/article.php; this file is
 * the index that the blog listing, the sitemap and the route contract read.
 *
 *   slug         string   directory name under /blog/
 *   title        string   H1 and card title — may run longer than the <title>
 *   seoTitle     string   <title>, <= 41 chars so it fits the 60-char budget
 *                         with the ' | <site name>' suffix; '' falls back to title
 *   description  string   meta description, 120–155 chars, unique site-wide
 *   date         string   YYYY-MM-DD, publication date
 *   updated      ?string  YYYY-MM-DD, when meaningfully revised
 *   tags         string[] free-form
 *   service      ?string  slug of the service this article links to — it also
 *                         decides the article's WhatsApp prefill and tier
 *   example      bool     seed record only — see content/services.php
 */

declare(strict_types=1);


/* Parallel build: each content phase owns one file in content/blog/ (returning
   an array of the same shape as below), so phases never edit the same file.
   Files load in name order. */
$__parts = [];
foreach (glob(__DIR__ . '/blog/*.php') ?: [] as $__f) {
    $__parts[] = require $__f;
}

$__base = [
];
foreach ($__parts as $__p) { $__base = array_merge($__base, $__p); }
unset($__parts, $__p, $__f);
return $__base;
