const videoContainer = document.querySelector(".video-container");
const outer = videoContainer.querySelector(".play-circle-outer");
const inner = videoContainer.querySelector(".play-circle-inner");
const playBtn = videoContainer.querySelector(".play-icon");

videoContainer.addEventListener("mousemove", (e) => {
  let left = playBtn.getBoundingClientRect().left;
  let top = playBtn.getBoundingClientRect().top;
  let x = left - e.clientX;
  let y = top - e.clientY;
  outer.setAttribute(
    "style",
    `transform: translate(${-(x / 50)}px, ${-(y / 50)}px)`
  );
  inner.setAttribute(
    "style",
    `transform: translate(${-(x / 49)}px, ${-(y / 49)}px)`
  );
  playBtn.setAttribute(
    "style",
    `transform: translate(${-(x / 48)}px, ${-(y / 48)}px)`
  );
});
