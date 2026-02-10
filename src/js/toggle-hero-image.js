export function initToggleHeroImage() {
  const toggleBtn = document.querySelector(".js-light-toggle");
  const toggleText = document.querySelector(".hero__toggle-text");
  const img = document.querySelector(".hero__image");

  if (!toggleBtn || !toggleText || !img) return;

  let lightOn = true;

  toggleBtn.addEventListener("click", () => {
    lightOn = !lightOn;

    toggleText.textContent = lightOn ? "💡 Вимкнути" : "💡 Увімкнути";

    img.src = lightOn
      ? "./images/hero-image-glow.webp"
      : "./images/hero-image.webp";
    img.srcset = lightOn
      ? `./images/hero-image-glow.webp 1x,
     ./images/hero-image-glow@2x.webp 2x`
      : `./images/hero-image.webp 1x,
     ./images/hero-image@2x.webp 2x`;
    img.alt = lightOn
      ? "Світлова картина з підсвіткою"
      : "Світлова картина з підсвіткою вимкнена";
  });
}
