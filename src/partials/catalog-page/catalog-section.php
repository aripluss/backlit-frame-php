<?php
define('BASE_URL', '/backlit-frame');
require __DIR__ . '/../../data/catalog.php';
$items = $catalogItems;
?>

<section id="catalog" class="catalog">
  <div class="catalog__container container">

    <?php include __DIR__ . '/../shared/catalog-grid.php'; ?>

  </div>
</section>