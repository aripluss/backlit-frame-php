export async function initCatalog(containerSelector, items) {
  const container = document.querySelector(containerSelector);
  if (!container) return;

  const res = await fetch("./src/partials/shared/catalog-item.html");
  let template = await res.text();

  items.forEach((item) => {
    let itemHTML = template;
    Object.keys(item).forEach((key) => {
      itemHTML = itemHTML.replaceAll(`{{${key}}}`, item[key]);
    });
    container.insertAdjacentHTML("beforeend", itemHTML);
  });
}
