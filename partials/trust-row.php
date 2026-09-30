<?php
/**
 * A short row of commitments under a hero's buttons. Every line is a promise
 * the site already makes elsewhere — never a figure the owner has not
 * confirmed.
 *
 *   $trustItems  string[]  defaults to ui home.trust
 */

declare(strict_types=1);

$trustItems = $trustItems ?? content('ui')['home']['trust'];
?>
<?php if ($trustItems !== []): ?>
  <ul class="trust-row">
    <?php foreach ($trustItems as $trustItem): ?>
      <li><?= e($trustItem) ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
<?php
unset($trustItems, $trustItem);
