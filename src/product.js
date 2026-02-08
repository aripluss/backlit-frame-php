import { loadHTML, getPath } from "./js/utils.js";

async function initCatalogPage() {
  await loadHTML("header", getPath("header.html"));
  await loadHTML("product-header", getPath("product-page/product-header.html"));
  await loadHTML("product-info", getPath("product-page/product-info.html"));
  await loadHTML("footer", getPath("footer.html"));
}

initCatalogPage();
