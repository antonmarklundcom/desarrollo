<?php
/**
 * Default configuration. Copy to config.php on the server and fill in.
 *
 *   cp config.example.php config.php
 *
 * config.php is gitignored and never committed. Put it EITHER next to index.php
 * OR one folder above public_html (lib/bootstrap.php reads both; the one next to
 * index.php wins). The folder above is the safest: a Git redeploy, a zip upload
 * or a "delete everything in public_html" can never remove it, and no URL can
 * reach it. Every value here is optional:
 * the site renders and the lead form still accepts submissions when they are
 * empty — see "degraded mode" in enviar.php.
 */

declare(strict_types=1);

return [
    // Absolute origin, no trailing slash. Used for canonical URLs, OG tags and
    // the sitemap. Falls back to the request host when empty.
    'SITE_URL' => '',

    // VenderCRM (Sitios → this site). Without both values the lead form runs in
    // degraded mode: submissions are appended to logs/leads.log and the visitor
    // still gets a success state pointing at WhatsApp.
    'VENDERCRM_URL'     => '',
    'VENDERCRM_API_KEY' => '',

    // Lead notification email through Resend (https://resend.com). Optional and
    // independent of VenderCRM: when both values are set, every accepted lead is
    // also emailed to LEAD_NOTIFY_TO. LEAD_FROM must be an address on a domain
    // verified in the Resend dashboard (SPF + DKIM records in Hostinger DNS).
    'RESEND_API_KEY' => '',
    'LEAD_NOTIFY_TO' => '',                       // e.g. 'contacto@example.com'
    'LEAD_FROM'      => '',                       // e.g. 'Example S.A. <no-reply@example.com>'

    // Analytics — none of it is Google. Leave both empty for no analytics.
    //   PLAUSIBLE_DOMAIN  the site as registered in Plausible, e.g. 'desarrollo.com.py'
    //                     (cookieless; page views plus the whatsapp_click, phone_click,
    //                     lead_submit and tool_used events). PLAUSIBLE_SRC overrides the
    //                     script URL for a self-hosted Plausible.
    //   CF_BEACON_TOKEN   Cloudflare Web Analytics token (free, cookieless, page views only).
    'PLAUSIBLE_DOMAIN' => '',
    'PLAUSIBLE_SRC'    => '',
    'CF_BEACON_TOKEN'  => '',
];
