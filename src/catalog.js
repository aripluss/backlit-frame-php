import { loadHTML, getPath } from "./js/utils.js";
import { getCategoryFromURL, getPageFromURL } from "./js/catalog-logic.js";

async function initCatalogPage(category = "", page = "1") {
  const query = new URLSearchParams();

  if (category) query.set("category", category);
  if (page) query.set("page", page);

  const queryString = query.toString() ? `?${query.toString()}` : "";

  await loadHTML("header", getPath("header.html"));
  await loadHTML(
    "catalog-controls",
    getPath("catalog-page/catalog-controls.php") + queryString,
  );
  await loadHTML(
    "catalog",
    getPath("catalog-page/catalog-section.php") + queryString,
  );
  await loadHTML(
    "pagination",
    getPath("catalog-page/pagination.php") + queryString,
  );
  await loadHTML("footer", getPath("footer.html"));
}

const category = getCategoryFromURL();
const page = getPageFromURL();

initCatalogPage(category, page);
