import { loadHTML, getPath } from "./js/utils.js";
import { initToggleImage } from "./js/toggle-image.js";

async function initProductPage() {
  await loadHTML("header", getPath("header.html"));
  await loadHTML("product-header", getPath("product-page/product-header.html"));
  await loadHTML("product-info", getPath("product-page/product-info.html"));
  await loadHTML("footer", getPath("footer.html"));

  initToggleImage();
}

initProductPage();
