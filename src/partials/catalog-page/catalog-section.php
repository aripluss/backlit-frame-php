<?php
require __DIR__ . '/catalog-logic.php';
?>

<section id="catalog" class="catalog">
  <div class="catalog__container container">

    <?php
    $items = $paginatedItems;
    include __DIR__ . '/../shared/catalog-grid.php';
    ?>

  </div>
</section>