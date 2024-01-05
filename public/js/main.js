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
// update Genere
const updateBtns = document.querySelectorAll(".update-btn");
const genreid = document.querySelector("#id");
const genreInput = document.querySelector("#genre");
for (let i = 0; i < updateBtns.length; i++) {
  updateBtns[i].addEventListener("click", () => {
    console.log(updateBtns[i].attributes.value);
    console.log(updateBtns[i].attributes.value.value);
    console.log(updateBtns[i].dataset.key);
    genreid.setAttribute("value", updateBtns[i].dataset.key);
    genreInput.value = updateBtns[i].attributes.value.value;
  });
}
//Approve Parol
const approve_btn = document.querySelectorAll(".approve_btn");
const lyrics_id = document.querySelector("#idlyrics");
const email_input = document.querySelector("#email");
const Parol = document.querySelector("#msg");

for (let i = 0; i < approve_btn.length; i++) {
    approve_btn[i].addEventListener("click", () => {
        console.log(approve_btn[i].dataset.key);
        console.log(approve_btn[i].getAttribute("value"));
        console.log(approve_btn[i].dataset.anotherValue);

        lyrics_id.value = approve_btn[i].dataset.key;
        email_input.value = approve_btn[i].getAttribute("value");
        Parol.value = approve_btn[i].dataset.anotherValue;

       
    });
}
