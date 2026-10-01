/**
 * Cotizador orientativo de apps: suma puntos por plataforma, funciones,
 * integraciones y pantallas, y devuelve un nivel de complejidad. No muestra
 * montos: el presupuesto se pasa por escrito.
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
    { max: 4,  name: "Básica", note: "Una app acotada. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos." },
    { max: 9,  name: "Intermedia", note: "Las funciones y las integraciones son lo que más pesa. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos." },
    { max: 15, name: "Avanzada", note: "Pagos, panel e integraciones empujan el alcance hacia arriba. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos." },
    { max: Infinity, name: "Compleja", note: "Conviene definir el alcance por etapas. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos." }
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
    rangoLine.textContent = tier.note;
    detalle.textContent = "Puntaje " + points + ". Plataforma: " + plataforma +
      (parts.length ? "; funciones: " + parts.join(", ") : "") +
      "; integraciones: " + integraciones + "; pantallas: hasta " + pantallas + ".";
    resultBox.hidden = false;

    lastResult = "App nivel " + tier.name + ". " + detalle.textContent;

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
