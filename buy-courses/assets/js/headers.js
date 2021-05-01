const search = document.querySelector(".search");
const searchbar = document.querySelector(".searchbar");
const searchicon = document.querySelector(".search-icon");

searchicon.addEventListener("click", () => {
  search.classList.toggle("active");
  searchicon.classList.toggle("active");
  if (search.classList.contains("active")) {
    searchbar.focus();
  } else {
    searchbar.blur();
  }
});
