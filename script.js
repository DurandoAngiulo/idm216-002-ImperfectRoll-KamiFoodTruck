let paul = document.querySelector(".paul");
let jill = document.querySelector(".jill");
let durando = document.querySelector(".durando");
let tony = document.querySelector(".tony");

paul.addEventListener("mouseover", function () {
  paul.src = "images/Paul-update.png";
});
paul.addEventListener("mouseout", function () {
  paul.src = "images/Paul-2.png";
});
jill.addEventListener("mouseover", function () {
  jill.src = "images/Jill-update.png";
});
jill.addEventListener("mouseout", function () {
  jill.src = "images/Jill-2.png";
});
durando.addEventListener("mouseover", function () {
  durando.src = "images/Durando-update.png";
});
durando.addEventListener("mouseout", function () {
  durando.src = "images/Durando-2.png";
});
tony.addEventListener("mouseover", function () {
  tony.src = "images/Tony-update.png";
});
tony.addEventListener("mouseout", function () {
  tony.src = "images/Tony-2.png";
});
