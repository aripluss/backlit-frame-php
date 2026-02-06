export const isProd = import.meta.env.PROD;
export function getPath(file) {
  return isProd ? ` ./partials/${file}` : `./src/partials/${file}`;
}

export async function loadHTML(id, path) {
  const container = document.getElementById(id);

  if (!container) return;
  container.innerHTML = "";

  const res = await fetch(path);
  const html = await res.text();

  container.outerHTML = html;
}
