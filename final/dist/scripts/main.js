function calculateTip(tipPortion, subtotal) {
  let tipAmount = tipPortion * subtotal;
  let totalPlusTip = tipAmount + subtotal;
  totalPlusTip = totalPlusTip.toFixed(2);
  document.getElementById("priceHook1").innerHTML = totalPlusTip;
  document.getElementById("priceHook2").innerHTML = totalPlusTip;
  document.getElementById("final_price").value = totalPlusTip;
}
