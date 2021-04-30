const courseContainer = document.querySelector(".course-container");
const searchbar = document.querySelector("#search-course");
const searchIcon = document.querySelector(".search-icon");

const courseArr = [
  {
    img: "./../assets/img/html_thumbnail.png",
    title: "HTML Tutorial (From Zero to Hero)",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "₹1999",
    tag:
      "html|html tutorial|html course|web development|Front end development|Front-end development",
    link: "#",
  },
  {
    img: "./../assets/img/css_thumbnail.png",
    title: "A complete CSS course",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "₹1999",
    tag:
      "css|cascading style sheets|styling|web development|css course|Front end development|Front-end development",
    link: "#",
  },
  {
    img: "./../assets/img/js_thumbnail.png",
    title: "Advanced JS projects (50+ projects)",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "₹1999",
    tag:
      "js|javascript|java script|web development|js course|javascript course| java script course|Front end development|Front-end development",
    link: "#",
  },
  {
    img: "./../assets/img/beg_react_thumbnail.png",
    title: "React JS for absolute beginners",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "₹1999",
    tag:
      "react|react js|react javascript|js|javascript|java script|react java script|web development|js library|javascript library|for beginners|beginners|react js for beginners|react javascript for beginners|react js course for beginners|react javascript course for beginners|react js for absolute beginners|react javascript for absolute beginners|Front end development|Front-end development|react js tutorial for absolute beginners|react javascript tutorial for absolute beginners|react js tutorial",
    link: "#",
  },
  {
    img: "./../assets/img/advanced_react_thumbnail.png",
    title: "Advanced React JS course",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    price: "₹1999",
    tag:
      "react|react js|react javascript|js|javascript|java script|react java script|web development|js library|javascript library|for advanced|advanced javascript course|advanced|react js course for advanced|Front end development|Front-end development|react js tutorial|react js tutorial for advanced learners|react js tutorial advanced|react js tutorial",
    link: "#",
  },
  {
    img: "./../assets/img/python_thumbnail.png",
    title: "Python tutorial for all",
    desc:
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis laborum aliquid voluptas ipsa itaque adipisci!",
    link: "#",
    price: "₹1999",
    tag:
      "python|web development|python tutorial for absolute beginners|python tutorial for beginners|advanced python tutorial|python tutorial for all|Front end development|Front-end development",
    link: "#",
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
