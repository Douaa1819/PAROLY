// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
// 
function update() {
console.log("aaa");
}

const updateBtns = document.querySelectorAll(".update-btn");
const genreid = document.querySelector("#id");
// const genreInput = document.querySelector("#id");
for (let i = 0; i < updateBtns.length; i++) {
  updateBtns[i].addEventListener("click", () => {
    console.log(updateBtns[i].attributes.value);
    console.log(updateBtns[i].dataset.key);
    genreid.setAttribute("value", updateBtns[i].dataset.key);
  })
}