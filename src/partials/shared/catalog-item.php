<article class="catalog__item">
  <div class="catalog__image-wrapper">
    <a href="product.html?id=<?= $item['id'] ?>" class="catalog__link">
      <img src="<?= $item['image'] ?>" alt="<?= $item['alt'] ?>" class="catalog__image" loading="lazy" />
    </a>
    <div class="catalog__overlay"></div>
  </div>

  <h4 class="catalog__title"><?= $item['title'] ?></h4>
  <p class="catalog__text"><?= $item['text'] ?></p>
</article>