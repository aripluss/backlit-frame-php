// export function initFooterYear() {
//   const year = document.getElementById("year");

//   year.textContent = new Date().getFullYear();
// }
export function initFooterYear() {
  document.addEventListener("DOMContentLoaded", () => {
    const year = document.getElementById("year");

    if (!year) return;

    year.textContent = new Date().getFullYear();
  });
}
