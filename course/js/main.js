const courseContainer = document.querySelector(".course-container");
const searchbar = document.querySelector("#search-course");
const searchIcon = document.querySelector(".search-icon");

const courseArr = [
  {
    img: "./../assets/img/html_thumbnail.png",
    title: "HTML Tutorial (From Zero to Hero)",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "Free",
    tag:
      "html|html tutorial|html course|web development|Front end development|Front-end development",
    link: "./../buy-courses/html-course",
  },
];

courseArr.forEach((el) => {
  let newCard = document.createElement("div");
  newCard.classList.add("card-container");
  newCard.innerHTML = `
    <div class="card-img">
      <img src=${el.img} alt="CSS" />
    </div>
    <div class="card-body">
      <h4 class="card-title">${el.title}</h4>
      <div class="card-desc">
        ${el.desc}
      </div>
    </div>
    <div class="card-footer">
      <a href="${el.link}" class="btn btn-green"><i class="fas fa-shopping-cart"></i>&nbsp;Buy Now</a>
      <div class="price-tag">${el.price}</div>
    </div>
  `;
  courseContainer.appendChild(newCard);
});

const search = () => {
  let cards = document.querySelectorAll(".card-container");
  cards.forEach((el) => {
    el.classList.remove("found");
  });
  if (searchbar.value.trim() !== "") {
    courseArr.forEach((el, idx) => {
      let tagArr = el.tag.split("|");
      tagArr.forEach((tag) => {
        let len = searchbar.value.length;
        if (searchbar.value.toLowerCase() === tag.slice(0, len)) {
          cards[idx].style.display = "grid";
          cards[idx].classList.add("found");
        } else {
          if (!cards[idx].classList.contains("found")) {
            cards[idx].style.display = "none";
          }
        }
      });
    });
  } else {
    cards.forEach((card) => {
      card.style.display = "grid";
    });
  }
};

searchbar.focus();

searchbar.addEventListener("keyup", (e) => {
  search();
});

searchIcon.addEventListener("click", () => {
  search();
});
