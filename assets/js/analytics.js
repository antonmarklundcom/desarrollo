/**
 * Analytics helper. No Google products.
 *
 * track(event, params) sends a custom event to Plausible when the page loaded
 * it (config.php PLAUSIBLE_DOMAIN → <body data-analytics="plausible">). With no
 * provider, or with Cloudflare Web Analytics (page views only, no custom
 * events), it is a silent no-op, so every phase can call it freely and nothing
 * breaks or leaks before analytics is configured.
 *
 * Wires whatsapp_click on every wa.me link and phone_click on every tel: link.
 * Tool pages add tool_used; the lead form adds lead_submit. In Plausible,
 * create a custom-event goal with each of those names to see them.
 *
 * whatsapp_click carries the `service` the link is for,
 * read from the link's own data-service. Every wa.me link on the site renders
 * one — the header pill, the floating button, each WhatsApp-menu option, the
 * CTA band — so a click is attributable to the service the visitor was
 * reading about, not just to a page path.
 */
(function (window, document) {
  "use strict";

  var provider = (document.body && document.body.dataset.analytics) || "";
  var enabled = provider === "plausible";

  function track(event, params) {
    if (!enabled || !event || typeof window.plausible !== "function") {
      return;
    }
    window.plausible(event, { props: params || {} });
  }

  /** Where the click happened, so events are attributable per page. */
  function context(el) {
    var owner = el.closest("[data-service]");

    return {
      page_path: window.location.pathname,
      link_text: (el.textContent || "").trim().slice(0, 80),
      /* "" is a real answer: the neutral default, a page with no service of
         its own. It is not the same as the attribute being missing. */
      service: owner ? owner.getAttribute("data-service") : ""
    };
  }

  document.addEventListener(
    "click",
    function (e) {
      var link = e.target.closest && e.target.closest("a[href]");
      if (!link) {
        return;
      }
      var href = link.getAttribute("href") || "";

      if (href.indexOf("wa.me") !== -1 || href.indexOf("api.whatsapp.com") !== -1) {
        track("whatsapp_click", context(link));
      } else if (href.indexOf("tel:") === 0) {
        track("phone_click", context(link));
      }
    },
    true
  );

  window.siteAnalytics = { track: track, enabled: enabled };
})(window, document);
