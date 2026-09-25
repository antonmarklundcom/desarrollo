<?php
/** Cotizador orientativo de apps. Logic: assets/js/tools/cotizador-app.js */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cotizador-app';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="capp-form" novalidate>
    <fieldset class="field">
      <legend>Plataformas</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="plataforma" id="capp-web" value="web">
        <label class="chip" for="capp-web">Web app</label>
        <input class="chip-radio" type="radio" name="plataforma" id="capp-android" value="android" checked>
        <label class="chip" for="capp-android">Solo Android</label>
        <input class="chip-radio" type="radio" name="plataforma" id="capp-ios" value="ios">
        <label class="chip" for="capp-ios">Solo iOS</label>
        <input class="chip-radio" type="radio" name="plataforma" id="capp-ambas" value="ambas">
        <label class="chip" for="capp-ambas">Android e iOS</label>
      </div>
    </fieldset>

    <fieldset class="field">
      <legend>Funciones</legend>
      <div class="chip-row">
        <input class="chip-radio" type="checkbox" name="login" id="capp-login" value="1">
        <label class="chip" for="capp-login">Login de usuarios</label>
        <input class="chip-radio" type="checkbox" name="pagos" id="capp-pagos" value="1">
        <label class="chip" for="capp-pagos">Pagos en la app</label>
        <input class="chip-radio" type="checkbox" name="panel" id="capp-panel" value="1">
        <label class="chip" for="capp-panel">Panel de administración</label>
      </div>
    </fieldset>

    <div class="tool-form__row">
      <label class="field">
        <span>Integraciones con otros sistemas</span>
        <select name="integraciones" id="capp-integraciones">
          <option value="0">Ninguna</option>
          <option value="1">Una</option>
          <option value="2">Dos o tres</option>
          <option value="4">Más de tres</option>
        </select>
      </label>
      <label class="field">
        <span>Cantidad de pantallas</span>
        <select name="pantallas" id="capp-pantallas">
          <option value="5">Hasta 5</option>
          <option value="10" selected>6 a 10</option>
          <option value="20">11 a 20</option>
          <option value="30">Más de 20</option>
        </select>
      </label>
    </div>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="capp-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Nivel de complejidad</dt>
      <dd id="capp-nivel"></dd>
      <dt>Rango orientativo del mercado</dt>
      <dd id="capp-rango"></dd>
    </dl>
    <p class="note" id="capp-detalle"></p>
    <p class="note">Rangos orientativos del mercado, a confirmar con presupuesto. No incluye mantenimiento, servidores ni cuentas de las tiendas.</p>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="capp-use-result"><?= e(ui('tools.use_result')) ?></button>
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
