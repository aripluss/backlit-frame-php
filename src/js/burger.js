export function initBurgerMenu() {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".header__navigation");
  const navLinks = document.querySelectorAll(".nav__link");

  if (burger && nav) {
    burger.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  }

  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("active");
    });
  });

  window.addEventListener("resize", () => {
    // close burger when resizing
    if (window.innerWidth >= 768) {
      nav.classList.remove("active");
    }
  });
}
