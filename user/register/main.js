const fname = document.querySelector("#fname");
const lname = document.querySelector("#lname");
const mobile = document.querySelector("#mobile");
const email = document.querySelector("#email");
const pass = document.querySelector("#pass");
const cpass = document.querySelector("#cpass");

const input = document.querySelectorAll("input");

const isFilled = () => {
  if (fname.value.trim() !== "") {
    fname.classList.add("filled");
  } else {
    fname.classList.remove("filled");
  }
  if (lname.value.trim() !== "") {
    lname.classList.add("filled");
  } else {
    lname.classList.remove("filled");
  }
  if (mobile.value.trim() !== "") {
    mobile.classList.add("filled");
  } else {
    mobile.classList.remove("filled");
  }
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
  if (cpass.value.trim() !== "") {
    cpass.classList.add("filled");
  } else {
    cpass.classList.remove("filled");
  }
};

document.addEventListener("DOMContentLoaded", () => {
  fname.focus();
});

input.forEach((el) => {
  el.addEventListener("blur", isFilled);
});
