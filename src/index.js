import "/src/styles/index.scss";

async function loadHTML(id, path) {
  const container = document.getElementById(id);
  //   if (!container) return;
  //   container.innerHTML = "";
  const res = await fetch(path);
  const html = await res.text();
  container.innerHTML = html;
}

// async function loadHTML(id, path) {
//   const container = document.getElementById(id);
//   if (!container) return;
//   try {
//     const res = await fetch(path);
//     if (!res.ok) throw new Error(`Failed to load ${path}: ${res.status}`);
//     const html = await res.text();
//     container.innerHTML = html;
//   } catch (e) {
//     console.error(e);
//   }
// }
loadHTML("header", "/src/partials/header.html");
loadHTML("hero", "/src/partials/hero.html");
loadHTML("footer", "/src/partials/footer.html");

// if (import.meta.hot) {
//   import.meta.hot.accept(() => {
//     loadHTML("header", "/src/partials/header.html");
//     loadHTML("footer", "/src/partials/footer.html");
//   });
// }
