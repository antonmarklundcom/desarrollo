/**
 * Cotizador de página web: scores type + options into a complexity tier and
 * shows what it includes. No amount is shown: the budget is given in writing.
 */
(function (window, document) {
  "use strict";

  var form = document.getElementById("cpw-form");
  if (!form) {
    return;
  }

  var TIERS = [
    { name: "Básico", note: "Es un proyecto acotado. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos.",
      incluye: ["Una página o pocas secciones", "Diseño adaptado al celular", "WhatsApp y formulario", "Medición básica"] },
    { name: "Intermedio", note: "Lo que más lo mueve es la cantidad de páginas y los textos. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos.",
      incluye: ["Sitio institucional de varias páginas", "Una página por servicio", "SEO técnico básico", "Capacitación para editar"] },
    { name: "Avanzado", note: "Pagos, idiomas y blog son lo que más suma. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos.",
      incluye: ["Catálogo o tienda con carrito", "Integración de pasarela de pago", "Varios idiomas o blog", "Medición de conversiones y ventas"] },
    { name: "A medida", note: "El alcance se define con vos antes de hablar de números. El presupuesto en guaraníes te lo pasamos por escrito después de una conversación de 30 minutos.",
      incluye: ["Funciones y diseño a medida", "Integraciones con sistemas internos", "Relevamiento técnico detallado", "Presupuesto por etapas"] }
  ];

  var TIPO_BASE = { landing: 0, institucional: 2, tienda: 5, medida: 8 };
  var lastResult = null;

  function checked(name) {
    var el = form.querySelector('input[name="' + name + '"]');
    return !!(el && el.checked);
  }

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    var tipoEl = form.querySelector('input[name="tipo"]:checked');
    var tipo = tipoEl ? tipoEl.value : "institucional";
    var paginas = parseInt(document.getElementById("cpw-paginas").value, 10) || 1;
    var idiomas = parseInt(document.getElementById("cpw-idiomas").value, 10) || 1;

    var score = TIPO_BASE[tipo] || 0;
    if (paginas > 5) score += 1;
    if (paginas > 15) score += 2;
    if (paginas > 40) score += 2;
    score += (idiomas - 1) * 1.5;
    if (checked("blog")) score += 1;
    if (checked("pagos")) score += tipo === "tienda" ? 1 : 3;
    if (checked("textos")) score += 1;

    var idx = score < 2 ? 0 : score < 5 ? 1 : score < 8 ? 2 : 3;
    if (tipo === "medida") idx = 3;
    var tier = TIERS[idx];

    document.getElementById("cpw-nivel").textContent = tier.name;
    document.getElementById("cpw-rango").textContent = tier.note;
    var ul = document.getElementById("cpw-incluye");
    ul.innerHTML = "";
    tier.incluye.forEach(function (txt) {
      var li = document.createElement("li");
      li.textContent = txt;
      ul.appendChild(li);
    });
    document.getElementById("cpw-result").hidden = false;

    lastResult = "Cotizador: tipo " + tipo + ", " + paginas + " páginas, " + idiomas + " idioma(s)" +
      (checked("blog") ? ", blog" : "") + (checked("pagos") ? ", pagos online" : "") +
      (checked("textos") ? ", redacción de textos" : "") + ". Nivel " + tier.name + ".";

    if (window.ToolsShared) {
      window.ToolsShared.trackToolUsed("cotizador_pagina_web", { tipo: tipo, nivel: tier.name });
    }
  });

  var useResult = document.getElementById("cpw-use-result");
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
