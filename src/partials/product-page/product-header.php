<?php
require __DIR__ . '/product-logic.php';
?>

<section class="product-header">
  <div class="product-header__container container">
    <a href="catalog.html" class="product-header__link">
      <button class="product-header__btn-back btn btn--secondary" aria-label="Назад">⟵</button>
    </a>

    <div class="product-header__info">
      <h2 class="product-header__title">
        <?= htmlspecialchars($product->title) ?>
      </h2>
      <span class="product-header__badge badge">
        <?= htmlspecialchars($productData['category']) ?>
      </span>
    </div>
  </div>
</section>