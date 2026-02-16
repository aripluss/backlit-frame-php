<?php
require __DIR__ . '/product-logic.php';
?>


<section class="product">
  <div class="product__container container">

    <!-- Image -->
    <div class="product__image-wrapper">
      <img class="product__image" src="<?= htmlspecialchars($productData['image']) ?>"
        alt="<?= htmlspecialchars($productData['alt']) ?>" />
      <button class="btn btn--glass product__toggle js-light-toggle">💡 Вимкнути</button>
    </div>

    <!-- Content -->
    <div class="product__content" data-id="<?= $product->id ?>"
      data-size="<?= htmlspecialchars($product->selectedSize) ?>"
      data-custom="<?= $product->customDesign ? '1' : '0' ?>" data-base-price="<?= $productData['basePrice'] ?>"></div>
    <div class="product__text-wrapper">
      <h3 class="product__title">
        <?= htmlspecialchars($product->title) ?>
      </h3>
      <p class="product__description">
        <?= htmlspecialchars($productData['text']) ?>
      </p>
    </div>

    <!-- Sizes -->
    <div class="product__sizes">
      <p class="product__sizes-title">Розмір</p>
      <div class="product__sizes-list">
        <?php foreach ($productData['sizes'] as $size): ?>
          <button data-size="<?= $size ?>"
            class="product__size btn btn--secondary <?= $product->selectedSize === $size ? 'product__size--active' : '' ?>">
            <?= $size ?>
          </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Checkbox -->
    <label class="product__option">
      <input type="checkbox" class="product__checkbox" <?= $product->customDesign ? 'checked' : '' ?> />
      Індивідуальний макет (+350 грн)
    </label>

    <!-- Price -->
    <div class="product__price-btn-wrapper">
      <div class="product__price">
        <span class="product__price-value">
          <?= $price ?> грн
        </span>
        <span class="product__price-note">обраний розмір
          <?= htmlspecialchars($product->selectedSize) ?>
        </span>
      </div>

      <button class="product__cta btn btn--primary">Замовити світильник</button>
    </div>

  </div>
  </div>
</section>