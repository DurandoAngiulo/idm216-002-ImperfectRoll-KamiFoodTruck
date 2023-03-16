function calculateTip(tipPortion, subtotal) {
  let tipAmount = tipPortion * subtotal;
  let totalPlusTip = subtotal + tipAmount;
  console.log(subtotal, tipAmount);
  totalPlusTip = (Math.round(totalPlusTip * 100) / 100).toFixed(2);
  tipAmount = (Math.round(tipAmount * 100) / 100).toFixed(2);
  document.getElementById("priceHook1").innerHTML = totalPlusTip;
  document.getElementById("tipHook").innerHTML = tipAmount;
  document.getElementById("priceHook2").innerHTML = totalPlusTip;
  document.getElementById("final_price").value = totalPlusTip;
}

const cart = document.querySelector(".cart-container");
const cartImg = document.querySelector(".cart-image");
const notif = document.querySelector(".cart-amount");
let deb = false;

cart.addEventListener("mouseover", function () {
  if (deb == false) {
    deb = true;
    // notif.classList.remove("cart-add-anim");
    cartImg.classList.add("cart-wiggle");
    // setTimeout(function () {
    //   notif.classList.add("cart-add-anim");
    // }, 600);
    setTimeout(function () {
      cartImg.classList.remove("cart-wiggle");
      deb = false;
    }, 1000);
  }
});
