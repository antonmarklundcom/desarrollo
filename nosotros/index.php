<?php
/** /nosotros/ — stub until its content phase sets 'stub' => false and switches to templates/page.php. */

require __DIR__ . '/../lib/bootstrap.php';

$__m  = page_meta('/nosotros/');
$page = ['title' => $__m['title'], 'description' => $__m['description'], 'path' => '/nosotros/', 'noindex' => true];
require ROOT_DIR . '/templates/page-stub.php';
