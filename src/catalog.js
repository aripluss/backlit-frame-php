import { loadHTML, getPath } from "./js/utils.js";

async function initCatalogPage() {
  await loadHTML("header", getPath("header.html"));
  await loadHTML(
    "catalog-controls",
    getPath("catalog-page/catalog-controls.html"),
  );
  await loadHTML("catalog", getPath("catalog-page/catalog-section.php"));
  await loadHTML("pagination", getPath("catalog-page/pagination.html"));
  await loadHTML("footer", getPath("footer.html"));
}

initCatalogPage();
