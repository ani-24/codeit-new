const email = document.querySelector("#email");
const pass = document.querySelector("#pass");

const input = document.querySelectorAll("input");

const isFilled = () => {
  if (email.value.trim() !== "") {
    email.classList.add("filled");
  } else {
    email.classList.remove("filled");
  }
  if (pass.value.trim() !== "") {
    pass.classList.add("filled");
  } else {
    pass.classList.remove("filled");
  }
};

document.addEventListener("DOMContentLoaded", () => {
  email.focus();
});

input.forEach((el) => {
  el.addEventListener("blur", isFilled);
});
