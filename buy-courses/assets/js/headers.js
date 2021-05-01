const search = document.querySelector(".search");
const searchicon = document.querySelector(".search-icon");

searchicon.addEventListener("click", () => {
  search.classList.toggle("active");
  searchicon.classList.toggle("active");
});
