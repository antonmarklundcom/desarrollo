<?php
/**
 * Cotizador de página web: complexity tier + orientative market range.
 * The scoring lives in assets/js/tools/cotizador-pagina-web.js.
 */

require __DIR__ . '/../../lib/bootstrap.php';

$slug = 'cotizador-pagina-web';
$tool = content('tools')[$slug];

ob_start();
?>
<div class="tool card" data-tool="<?= e($slug) ?>">
  <form class="tool-form" id="cpw-form" novalidate>
    <fieldset class="field">
      <legend>Tipo de sitio</legend>
      <div class="chip-row">
        <input class="chip-radio" type="radio" name="tipo" id="cpw-landing" value="landing">
        <label class="chip" for="cpw-landing">Landing page</label>
        <input class="chip-radio" type="radio" name="tipo" id="cpw-institucional" value="institucional" checked>
        <label class="chip" for="cpw-institucional">Institucional</label>
        <input class="chip-radio" type="radio" name="tipo" id="cpw-tienda" value="tienda">
        <label class="chip" for="cpw-tienda">Tienda online</label>
        <input class="chip-radio" type="radio" name="tipo" id="cpw-medida" value="medida">
        <label class="chip" for="cpw-medida">A medida</label>
      </div>
    </fieldset>

    <div class="tool-form__row">
      <label class="field">
        <span>Cantidad de páginas</span>
        <input type="number" inputmode="numeric" min="1" max="200" step="1" name="paginas" id="cpw-paginas" value="5" required>
      </label>
      <label class="field">
        <span>Idiomas</span>
        <select name="idiomas" id="cpw-idiomas">
          <option value="1">1 idioma</option>
          <option value="2">2 idiomas</option>
          <option value="3">3 o más</option>
        </select>
      </label>
    </div>

    <fieldset class="field">
      <legend>Funciones</legend>
      <div class="chip-row">
        <input class="chip-radio" type="checkbox" name="blog" id="cpw-blog" value="1">
        <label class="chip" for="cpw-blog">Necesita blog</label>
        <input class="chip-radio" type="checkbox" name="pagos" id="cpw-pagos" value="1">
        <label class="chip" for="cpw-pagos">Pagos online</label>
        <input class="chip-radio" type="checkbox" name="textos" id="cpw-textos" value="1">
        <label class="chip" for="cpw-textos">Necesita que escribamos los textos</label>
      </div>
    </fieldset>

    <div class="btn-row">
      <button class="btn btn--primary" type="submit"><?= e(ui('tools.calculate')) ?></button>
    </div>
  </form>

  <div class="tool-result" id="cpw-result" hidden aria-live="polite">
    <h2 class="card-title"><?= e(ui('tools.result_title')) ?></h2>
    <dl class="tool-result__lines">
      <dt>Nivel de complejidad</dt>
      <dd id="cpw-nivel"></dd>
      <dt>Rango orientativo del mercado</dt>
      <dd id="cpw-rango"></dd>
    </dl>
    <p class="note">Rangos orientativos del mercado, a confirmar con presupuesto. No incluye dominio, hosting ni licencias.</p>
    <p><strong>Suele incluir:</strong></p>
    <ul id="cpw-incluye"></ul>
    <div class="btn-row mt-3">
      <button class="btn btn--secondary" type="button" id="cpw-use-result"><?= e(ui('tools.use_result')) ?></button>
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
