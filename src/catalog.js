import { loadHTML, getPath } from "./js/utils.js";
import { initCatalog } from "./js/init-catalog.js";
import { catalogItems } from "./data/catalog-items.js";

async function initCatalogPage() {
  await loadHTML("header", getPath("header.html"));
  await loadHTML(
    "catalog-controls",
    getPath("catalog-page/catalog-controls.html"),
  );
  await loadHTML("catalog", getPath("catalog-page/catalog.html"));
  await loadHTML("pagination", getPath("catalog-page/pagination.html"));
  await loadHTML("footer", getPath("footer.html"));

  initCatalog(".catalog__grid", catalogItems);
}

initCatalogPage();
