/**
 * Ahorro por automatización: horas/semana × personas × % automatizable,
 * pasado a mes (4,33 semanas) y año (52 semanas), valorizado con el costo
 * por hora y formateado con window.Market.fmtMoney.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("roi-form");
  if (!form || !window.Market) {
    return;
  }

  var WEEKS_PER_MONTH = 52 / 12;

  var horasIn    = document.getElementById("roi-horas");
  var personasIn = document.getElementById("roi-personas");
  var costoIn    = document.getElementById("roi-costo");
  var pctIn      = document.getElementById("roi-pct");
  var resultBox  = document.getElementById("roi-result");
  var useResult  = document.getElementById("roi-use-result");
  var lastResult = null;

  function fmtHours(n) {
    return Math.round(n).toLocaleString("es-PY") + " h";
  }

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var horas = parseFloat(horasIn.value) || 0;
    var personas = parseInt(personasIn.value, 10) || 0;
    var costo = parseFloat(costoIn.value) || 0;
    var pct = (parseFloat(pctIn.value) || 0) / 100;

    if (horas <= 0) { horasIn.focus(); return; }
    if (personas <= 0) { personasIn.focus(); return; }
    if (costo <= 0) { costoIn.focus(); return; }

    var semana = horas * personas * pct;
    var mes = semana * WEEKS_PER_MONTH;
    var anio = semana * 52;

    document.getElementById("roi-horas-mes").textContent = fmtHours(mes);
    document.getElementById("roi-horas-anio").textContent = fmtHours(anio);
    document.getElementById("roi-costo-mes").textContent = window.Market.fmtMoney(mes * costo);
    document.getElementById("roi-costo-anio").textContent = window.Market.fmtMoney(anio * costo);
    resultBox.hidden = false;

    lastResult = "Ahorro estimado: " + fmtHours(mes) + " y " + window.Market.fmtMoney(mes * costo) +
      " por mes; " + fmtHours(anio) + " y " + window.Market.fmtMoney(anio * costo) + " por año (" +
      personas + " persona(s), " + horas + " h/semana, " + Math.round(pct * 100) + " % automatizable).";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("roi_automatizacion", { pct: Math.round(pct * 100) });
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
