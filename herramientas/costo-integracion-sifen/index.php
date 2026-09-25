<?php
/**
 * Cotizador de integración SIFEN: orientative complexity level, no prices.
 * Logic in assets/js/tools/costo-integracion-sifen.js.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'costo-integracion-sifen';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="sifen-form" novalidate>
    <div class="tool-form__row">
      <label class="field">
        <span>Facturas por mes (aprox.)</span>
        <input type="number" inputmode="numeric" min="0" step="1" name="facturas" id="sifen-facturas" required>
      </label>
      <label class="field">
        <span>Puntos de expedición (cajas o sucursales)</span>
        <input type="number" inputmode="numeric" min="1" step="1" name="puntos" id="sifen-puntos" value="1">
      </label>
    </div>
    <label class="field">
      <span>¿Con qué registra hoy sus ventas?</span>
      <select name="sistema" id="sifen-sistema">
        <option value="ninguno">Ningún sistema</option>
        <option value="excel">Planillas Excel</option>
        <option value="propio">Sistema propio o a medida</option>
        <option value="erp">ERP comercial de terceros</option>
      </select>
    </label>
    <fieldset class="field">
      <legend>¿La factura tiene que salir sola desde una tienda web o un punto de venta (POS)?</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="canal" id="sifen-canal-no" value="no" checked>
        <label class="chip" for="sifen-canal-no">No</label>
        <input class="chip-radio" type="radio" name="canal" id="sifen-canal-web" value="web">
        <label class="chip" for="sifen-canal-web">Sí, tienda web</label>
        <input class="chip-radio" type="radio" name="canal" id="sifen-canal-pos" value="pos">
        <label class="chip" for="sifen-canal-pos">Sí, POS / cajas</label>
        <input class="chip-radio" type="radio" name="canal" id="sifen-canal-ambos" value="ambos">
        <label class="chip" for="sifen-canal-ambos">Ambos</label>
      </div>
    </fieldset>
    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="sifen-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Nivel orientativo</dt>
      <dd id="sifen-nivel"></dd>
    </dl>
    <p id="sifen-resumen"></p>
    <ul id="sifen-incluye"></ul>
    <p class="note">Resultado orientativo, no es un presupuesto. El costo real se confirma después de revisar su sistema.</p>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="sifen-use-result"><?= e(ui('tools.use_result')) ?></button>
    </div>
  </div>

  <noscript><p class="note"><?= e(ui('tools.need_js')) ?></p></noscript>
</div>

<?php
$formId         = $slug;
$formService    = $slug;
$formNeed       = $tool['formNeed'];
$formHeading    = ui('form.legend');
$formSourcePage = $tool['path'];
require ROOT_DIR . '/partials/lead-form.php';
?>
<?php
$toolCalcHtml = ob_get_clean();

require ROOT_DIR . '/templates/tool.php';
