export function initBurgerMenu() {
  const burger = document.querySelector(".burger");
  const menu = document.querySelector("mobile-menu");
  // const overlay = document.querySelector(".mobile-menu__overlay");

  if (!burger || !menu) return;

  const navLinks = menu?.querySelectorAll(".nav__link");

  // Клік по бургеру
  burger?.addEventListener("click", () => {
    menu.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
  });

  // Клік по пункту меню - закрити меню
  navLinks?.forEach((link) => {
    link.addEventListener("click", () => {
      menu.classList.remove("active");
      document.body.classList.remove("no-scroll");
    });
  });

  // При ресайзі - закрити меню
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
      menu.classList.remove("active");
      document.body.classList.remove("no-scroll");
    }
  });
}
