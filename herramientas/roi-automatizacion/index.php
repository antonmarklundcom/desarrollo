<?php
/** Calculadora de ahorro por automatización. Logic: assets/js/tools/roi-automatizacion.js */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'roi-automatizacion';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="roi-form" novalidate>
    <div class="tool-form__row">
      <label class="field">
        <span>Horas por semana de la tarea (por persona)</span>
        <input type="number" inputmode="decimal" min="0" step="0.5" name="horas" id="roi-horas" value="5" required>
      </label>
      <label class="field">
        <span>Personas que la hacen</span>
        <input type="number" inputmode="numeric" min="1" step="1" name="personas" id="roi-personas" value="1" required>
      </label>
    </div>
    <div class="tool-form__row">
      <label class="field">
        <span>Costo por hora (Gs, con cargas sociales)</span>
        <input type="number" inputmode="numeric" min="0" step="1000" name="costo" id="roi-costo" required>
      </label>
      <label class="field">
        <span>Porcentaje automatizable</span>
        <select name="pct" id="roi-pct">
          <option value="30">30 %</option>
          <option value="50">50 %</option>
          <option value="70" selected>70 %</option>
          <option value="90">90 %</option>
        </select>
      </label>
    </div>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="roi-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Horas ahorradas por mes</dt>
      <dd id="roi-horas-mes"></dd>
      <dt>Horas ahorradas por año</dt>
      <dd id="roi-horas-anio"></dd>
      <dt>Costo ahorrado por mes</dt>
      <dd id="roi-costo-mes"></dd>
      <dt>Costo ahorrado por año</dt>
      <dd id="roi-costo-anio"></dd>
    </dl>
    <p class="note">Ahorro bruto estimado. Réstele el costo de desarrollo y de operación de la automatización.</p>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="roi-use-result"><?= e(ui('tools.use_result')) ?></button>
    </div>
  </div>

  <noscript><p class="note"><?= e(ui('tools.need_js')) ?></p></noscript>
</div>

<?php
$formId      = $slug;
$formService = $slug;
$formNeed    = $tool['formNeed'];
$formHeading = ui('form.legend');
$formSourcePage = $tool['path'];
require ROOT_DIR . '/partials/lead-form.php';
?>
<?php
$toolCalcHtml = ob_get_clean();

require ROOT_DIR . '/templates/tool.php';
