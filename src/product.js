import { loadHTML, getPath } from "./js/utils.js";
import { initToggleImage } from "./js/toggle-image.js";
import { initProductOptions } from "./js/product-options.js";

async function initProductPage() {
  const params = window.location.search;

  await loadHTML("header", getPath("header.html"));
  await loadHTML(
    "product-header",
    getPath("product-page/product-header.php") + params,
  );
  await loadHTML(
    "product-info",
    getPath("product-page/product-info.php") + params,
  );
  await loadHTML("footer", getPath("footer.html"));

  initToggleImage();
  initProductOptions();
}

initProductPage();
