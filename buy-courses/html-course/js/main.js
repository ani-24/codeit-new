const bg = document.querySelector(".bg");
const bgImg = bg.dataset.img;
bg.setAttribute(
  "style",
  `background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./../../assets/img/${bgImg}")`
);
