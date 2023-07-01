// Menu
let nav = document.querySelector(".nav");
let button = document.querySelector(".header__button");

button.addEventListener("click", function(){
    nav.classList.toggle("activo");
});