/**
 * Cotizador orientativo de apps: suma puntos por plataforma, funciones,
 * integraciones y pantallas, y devuelve un nivel de complejidad con un rango
 * orientativo del mercado (texto, no un presupuesto).
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("capp-form");
  if (!form) {
    return;
  }

  var PLATFORM_POINTS = { web: 0, android: 2, ios: 2, ambas: 4 };
  var SCREEN_POINTS = { 5: 0, 10: 2, 20: 4, 30: 7 };
  var TIERS = [
    { max: 4,  name: "Básica", range: "aprox. Gs 15 a 40 millones" },
    { max: 9,  name: "Intermedia", range: "aprox. Gs 40 a 90 millones" },
    { max: 15, name: "Avanzada", range: "aprox. Gs 90 a 180 millones" },
    { max: Infinity, name: "Compleja", range: "más de Gs 180 millones" }
  ];

  var resultBox = document.getElementById("capp-result");
  var nivelLine = document.getElementById("capp-nivel");
  var rangoLine = document.getElementById("capp-rango");
  var detalle   = document.getElementById("capp-detalle");
  var useResult = document.getElementById("capp-use-result");
  var lastResult = null;

  function checked(name) {
    var el = form.querySelector('input[name="' + name + '"]');
    return !!(el && el.checked);
  }

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var plataforma = (form.querySelector('input[name="plataforma"]:checked') || {}).value || "android";
    var integraciones = parseInt(document.getElementById("capp-integraciones").value, 10) || 0;
    var pantallas = document.getElementById("capp-pantallas").value;

    var points = (PLATFORM_POINTS[plataforma] || 0) + (SCREEN_POINTS[pantallas] || 0) + integraciones * 1.5;
    var parts = [];
    if (checked("login")) { points += 1; parts.push("login"); }
    if (checked("pagos")) { points += 3; parts.push("pagos"); }
    if (checked("panel")) { points += 2; parts.push("panel de administración"); }

    var tier = TIERS[0];
    for (var i = 0; i < TIERS.length; i++) {
      if (points <= TIERS[i].max) { tier = TIERS[i]; break; }
    }

    nivelLine.textContent = tier.name;
    rangoLine.textContent = tier.range;
    detalle.textContent = "Puntaje " + points + ". Plataforma: " + plataforma +
      (parts.length ? "; funciones: " + parts.join(", ") : "") +
      "; integraciones: " + integraciones + "; pantallas: hasta " + pantallas + ".";
    resultBox.hidden = false;

    lastResult = "App nivel " + tier.name + " (" + tier.range + "). " + detalle.textContent;

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("cotizador_app", { tier: tier.name });
    }
  });

  if (useResult) {
    useResult.addEventListener("click", function () {
      var leadForm = document.querySelector("form[data-lead-form]");
      if (!window.ToolsShared || !leadForm || !lastResult) {
        return;
      }
      window.ToolsShared.prefillLeadForm(leadForm, { message: lastResult, result: lastResult });
      window.ToolsShared.focusLeadForm(leadForm);
    });
  }
})(window, document);
