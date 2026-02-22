<?php
$isClickable = $isClickable ?? true; // клікабельна за замовчуванням у каталозі, в популярних не клікабельна
?>

<article class="catalog__item <?= $isClickable ? '' : 'no-pointer' ?>">
  <div class="catalog__image-wrapper">

    <?php if ($isClickable): ?>
      <a href="product.html?id=<?= $item['id'] ?>" class="catalog__link">
        <div class="catalog__image-overlay"></div>
        <img src="<?= $item['image'] ?>" alt="<?= $item['alt'] ?>" class="catalog__image" loading="lazy" />
      </a>
    <?php else: ?>
      <img src="<?= $item['image'] ?>" alt="<?= $item['alt'] ?>" class="catalog__image" loading="lazy" />
    <?php endif; ?>

  </div>

  <h4 class="catalog__title"><?= $item['title'] ?></h4>
  <p class="catalog__text"><?= $item['text'] ?></p>
</article>