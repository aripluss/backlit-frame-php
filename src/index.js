// import "./src/styles/index.scss";

const isProd = import.meta.env.PROD;
function getPath(file) {
  return isProd ? ` ./partials/${file}` : `./src/partials/${file}`;
}

async function loadHTML(id, path) {
  const container = document.getElementById(id);

  if (!container) return;
  container.innerHTML = "";

  const res = await fetch(path);
  const html = await res.text();
  container.innerHTML = html;
}

loadHTML("header", getPath("header.html"));
loadHTML("hero", getPath("main-page/hero.html"));
loadHTML("popular-designs", getPath("main-page/popular-designs.html"));
loadHTML("how-it-works", getPath("main-page/how-it-works.html"));
loadHTML("why-we", getPath("main-page/why-we.html"));
loadHTML("steps-to-order", getPath("main-page/steps-to-order.html"));
loadHTML("feedback", getPath("main-page/feedback.html"));
loadHTML("faq", getPath("main-page/faq.html"));
loadHTML("contact_form", getPath("main-page/contact_form.html"));
loadHTML("footer", getPath("footer.html"));
