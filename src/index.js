import "/src/styles/index.scss";

async function loadHTML(id, path) {
  const container = document.getElementById(id);
  if (!container) return;
  container.innerHTML = "";

  console.log(id, container);

  const res = await fetch(path);
  const html = await res.text();
  container.innerHTML = html;
}

loadHTML("header", "/src/partials/header.html");
loadHTML("hero", "/src/partials/main-page/hero.html");
loadHTML("popular-designs", "/src/partials/main-page/popular-designs.html");
loadHTML("how-it-works", "/src/partials/main-page/how-it-works.html");
loadHTML("why-we", "/src/partials/main-page/why-we.html");
loadHTML("steps-to-order", "/src/partials/main-page/steps-to-order.html");
loadHTML("feedback", "/src/partials/main-page/feedback.html");
loadHTML("footer", "/src/partials/footer.html");
