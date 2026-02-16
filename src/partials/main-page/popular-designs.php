<?php
define('BASE_URL', value: '/backlit-frame');
require __DIR__ . '/../../data/popular-designs-items.php';
$items = $popularDesignsItems;
?>

<section id="popular-designs" class="popular-designs">
  <div class="popular-designs__container container">
    <div class="popular-designs__header">
      <h2 class="popular-designs__heading">Дизайни, які обирають найчастіше</h2>
      <p class="popular-designs__subheading">
        Знайдіть свій стиль або створіть щось особливе
      </p>
    </div>

    <?php include __DIR__ . '/../shared/catalog-grid.php'; ?>


    <div class="popular-designs__go-to-catalog">
      <a href="catalog.html" class="popular-designs__link">
        Переглянути повний каталог
        <svg class="popular-designs__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</section>