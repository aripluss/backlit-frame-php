import { loadHTML, getPath } from "./js/utils.js";
import { initCatalog } from "./js/init-catalog.js";
import { initBurgerMenu } from "./js/burger.js";
import { initFooterYear } from "./js/footer-year.js";
import { initToggleHeroImage } from "./js/toggle-hero-image.js";
import { popularDesignsItems } from "./data/popular-designs-items.js";

async function initPage() {
  await loadHTML("header", getPath("header.html"));

  await loadHTML("mobile-menu", getPath("main-page/mobile-menu.html"));
  initBurgerMenu();

  await loadHTML("hero", getPath("main-page/hero.html"));
  initToggleHeroImage();

  await loadHTML("popular-designs", getPath("main-page/popular-designs.html"));
  await loadHTML("how-it-works", getPath("main-page/how-it-works.html"));
  await loadHTML("why-we", getPath("main-page/why-we.html"));
  await loadHTML("steps-to-order", getPath("main-page/steps-to-order.html"));
  await loadHTML("feedback", getPath("main-page/feedback.html"));
  await loadHTML("faq", getPath("main-page/faq.html"));
  await loadHTML("contact_form", getPath("main-page/contact_form.html"));

  await loadHTML("footer", getPath("footer.html"));
  initFooterYear();

  initCatalog(".popular-designs__grid", popularDesignsItems);
}

initPage();
