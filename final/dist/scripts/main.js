function calculateTip(tipPortion, subtotal) {
  let tipAmount = tipPortion * subtotal;
  tipAmount = (Math.round(tipAmount * 100) / 100).toFixed(2);
  let totalPlusTip = tipAmount + subtotal;
  totalPlusTip = (Math.round(totalPlusTip * 100) / 100).toFixed(2);
  document.getElementById("priceHook1").innerHTML = totalPlusTip;
  document.getElementById("tipHook").innerHTML = tipAmount;
  document.getElementById("priceHook2").innerHTML = totalPlusTip;
  document.getElementById("final_price").value = totalPlusTip;
}
