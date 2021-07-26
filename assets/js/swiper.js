const initializeSlider = () => {
  new Swiper(".swiper-container", {
    direction: "horizontal",
    speed: 750,
    pagination: { el: ".swiper-pagination", clickable: true },
    type: "bullets",
    loop: true,
  });
};

window.addEventListener("DOMContentLoaded", initializeSlider);
