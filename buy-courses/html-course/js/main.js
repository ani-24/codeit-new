const video = document.querySelector(".course-preview video");
const videoPos = video.dataset.poster;
video.poster = `./../../assets/img/${videoPos}`;
