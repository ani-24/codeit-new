const hamburger = document.querySelectorAll(".hamburger_menu");
const sidenav = document.querySelector(".sidenav");

hamburger.forEach((el) => {
  let overlay;
  el.addEventListener("click", () => {
    el.classList.toggle("active");
    sidenav.classList.toggle("active");
    overlay = document.createElement("div");
    if (el.classList.contains("active")) {
      overlay.classList.add("overlay");
      overlay.setAttribute(
        "style",
        "position: fixed; top: 0; left: 0; height: 100vh; width: 100%; z-index: 99; background: rgba(0, 0, 0, 0.7);"
      );
      document.body.appendChild(overlay);
    }
    overlay.addEventListener("click", () => {
      el.classList.remove("active");
      sidenav.classList.remove("active");
      document.body.removeChild(overlay);
    });
  });
});
