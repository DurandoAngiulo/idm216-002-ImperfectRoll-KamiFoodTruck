function calculateTip(tipPortion, subtotal) {
  let tipAmount = tipPortion * subtotal;
  tipAmount = Math.round((tipAmount + Number.EPSILON) * 100) / 100;
  let totalPlusTip = tipAmount + subtotal;
  totalPlusTip = totalPlusTip.toFixed(2);
  document.getElementById("priceHook1").innerHTML = totalPlusTip;
  document.getElementById("tipHook").innerHTML = tipAmount;
  document.getElementById("priceHook2").innerHTML = totalPlusTip;
  document.getElementById("final_price").value = totalPlusTip;
}