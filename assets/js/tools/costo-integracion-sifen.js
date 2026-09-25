/**
 * Cotizador de integración SIFEN: scores the answers into an orientative
 * complexity level (Básica / Media / Compleja, or "ekuatia alcanza").
 * No prices — the lead form handles the actual quote.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("sifen-form");
  if (!form) {
    return;
  }

  var el = function (id) { return document.getElementById(id); };
  var resultBox = el("sifen-result");
  var lastResult = null;

  var LEVELS = {
    ekuatia: {
      label: "Ekuatia probablemente alcanza",
      text: "Con este volumen y sin un sistema de ventas que conectar, el facturador gratuito de la DNIT suele ser suficiente. Si prefiere automatizar igual, el punto de partida sería una integración básica.",
      items: ["Uso del facturador gratuito de ekuatia", "Orientación para habilitarse en Marangatu", "Revisión cuando el volumen crezca"]
    },
    basica: {
      label: "Básica",
      text: "Un proyecto acotado: generación, firma y envío de documentos desde un solo origen de datos.",
      items: ["Factura electrónica y nota de crédito", "Firma digital y envío a SIFEN", "KuDE en PDF con QR enviado por correo", "Pruebas en el ambiente de SIFEN y paso a producción"]
    },
    media: {
      label: "Media",
      text: "Integración con un sistema existente o varios puntos de expedición, con manejo de eventos y reintentos.",
      items: ["Todo lo de la integración básica", "Conexión con su sistema o migración desde planillas", "Varios puntos de expedición con numeración propia", "Cancelaciones, inutilizaciones y reintentos automáticos"]
    },
    compleja: {
      label: "Compleja",
      text: "Varios sistemas o canales facturando en simultáneo, o un ERP comercial que requiere integración a medida.",
      items: ["Todo lo de la integración media", "Integración con ERP comercial, tienda web y/o cajas POS", "Envío por lotes y monitoreo de documentos pendientes", "Reportes y conciliación entre ventas, cobros y facturas"]
    }
  };

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    var facturas = parseInt(el("sifen-facturas").value, 10);
    if (isNaN(facturas) || facturas < 0) {
      el("sifen-facturas").focus();
      return;
    }
    var puntos = Math.max(1, parseInt(el("sifen-puntos").value, 10) || 1);
    var sistema = el("sifen-sistema").value;
    var canal = (form.querySelector('input[name="canal"]:checked') || {}).value || "no";

    var score = 0;
    score += facturas > 3000 ? 3 : facturas > 500 ? 2 : facturas > 100 ? 1 : 0;
    score += puntos > 5 ? 2 : puntos > 1 ? 1 : 0;
    score += { ninguno: 0, excel: 1, propio: 1, erp: 3 }[sistema] || 0;
    score += { no: 0, web: 1, pos: 2, ambos: 3 }[canal] || 0;

    var key;
    if (facturas <= 100 && puntos === 1 && canal === "no" && (sistema === "ninguno" || sistema === "excel")) {
      key = "ekuatia";
    } else if (score <= 2) {
      key = "basica";
    } else if (score <= 5) {
      key = "media";
    } else {
      key = "compleja";
    }
    var level = LEVELS[key];

    el("sifen-nivel").textContent = level.label;
    el("sifen-resumen").textContent = level.text;
    var list = el("sifen-incluye");
    list.innerHTML = "";
    level.items.forEach(function (t) {
      var li = document.createElement("li");
      li.textContent = t;
      list.appendChild(li);
    });
    resultBox.hidden = false;

    lastResult = "Cotizador SIFEN: nivel " + level.label + " · " + facturas + " facturas/mes · " +
      puntos + " punto(s) de expedición · sistema: " + sistema + " · web/POS: " + canal;

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("costo_integracion_sifen", { level: key });
    }
  });

  var useResult = el("sifen-use-result");
  if (useResult) {
    useResult.addEventListener("click", function () {
      var leadForm = document.querySelector("form[data-lead-form]");
      if (!window.ToolsShared || !leadForm || !lastResult) {
        return;
      }
      window.ToolsShared.prefillLeadForm(leadForm, { need: "integracion", message: lastResult, result: lastResult });
      window.ToolsShared.focusLeadForm(leadForm);
    });
  }
})(window, document);
