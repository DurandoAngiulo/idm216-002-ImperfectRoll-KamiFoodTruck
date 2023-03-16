<div class="number-box">
  <div  id="minus<?php echo $meal['id']; ?>"class="number-left-touch-area number-touch-area">
    <p class="number-text">-</p>
  </div>
  <div class="number-reel-container">
    <p id="last-number<?php echo $meal['id']; ?>" class="item-amount last-number">0</p>
    <p id="current-number<?php echo $meal['id']; ?>" class="item-amount number current-number">1</p>
    <p id="new-number<?php echo $meal['id']; ?>" class="item-amount new-number">2</p>
  </div>
  <div id="plus<?php echo $meal['id']; ?>"class="number-right-touch-area number-touch-area">
    <p class="number-text">+</p>
  </div>
</div>
<script>
    //Number of items
let defaultNumber<?php echo $meal['id']; ?> = 1;
const minus<?php echo $meal['id']; ?> = document.getElementById('minus<?php echo $meal['id']; ?>');
const plus<?php echo $meal['id']; ?> = document.getElementById('plus<?php echo $meal['id']; ?>');
const prevNumb<?php echo $meal['id']; ?> = document.getElementById('last-number<?php echo $meal['id']; ?>');
const newNumb<?php echo $meal['id']; ?> = document.getElementById('new-number<?php echo $meal['id']; ?>');
const currentNumb<?php echo $meal['id']; ?> = document.getElementById('current-number<?php echo $meal['id']; ?>');
const amountNumbs<?php echo $meal['id']; ?> = document.querySelector('.item-amount');
let numberDeb<?php echo $meal['id']; ?> = false

minus<?php echo $meal['id']; ?>.addEventListener('click', function(){
  if ((defaultNumber<?php echo $meal['id']; ?> >= 2) && (numberDeb<?php echo $meal['id']; ?> == false)){
    numberDeb<?php echo $meal['id']; ?> = true;
  prevNumb<?php echo $meal['id']; ?>.classList.add('prevSlideIn');
  currentNumb<?php echo $meal['id']; ?>.classList.add('currentSlideRight');
    setTimeout(function(){
      defaultNumber<?php echo $meal['id']; ?> --;
      currentNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?>;
      prevNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?> - 1;
      newNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?> + 1;
      prevNumb<?php echo $meal['id']; ?>.classList.remove('prevSlideIn');
currentNumb<?php echo $meal['id']; ?>.classList.remove('currentSlideRight');
      numberDeb<?php echo $meal['id']; ?> = false;
    }, 250);
    document.getElementById("quantity-input<?php echo $meal['id']; ?>").setAttribute("value", prevNumb<?php echo $meal['id']; ?>.innerHTML);
  };
});

plus<?php echo $meal['id']; ?>.addEventListener('click', function(){
  if ((defaultNumber<?php echo $meal['id']; ?> <= 8) && (numberDeb<?php echo $meal['id']; ?> == false)){
    numberDeb<?php echo $meal['id']; ?> = true;
    newNumb<?php echo $meal['id']; ?>.classList.add('newSlideIn');
    currentNumb<?php echo $meal['id']; ?>.classList.add('currentSlideLeft');
    setTimeout(function(){
      defaultNumber<?php echo $meal['id']; ?> ++;
      amountNumbs<?php echo $meal['id']; ?>.style.transition = 'all 0s linear';
      currentNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?>;
      prevNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?> - 1;
      newNumb<?php echo $meal['id']; ?>.innerHTML = defaultNumber<?php echo $meal['id']; ?> + 1;
       newNumb<?php echo $meal['id']; ?>.classList.remove('newSlideIn');
      currentNumb<?php echo $meal['id']; ?>.classList.remove('currentSlideLeft');
      numberDeb<?php echo $meal['id']; ?> = false;
    }, 250); 
    document.getElementById("quantity-input<?php echo $meal['id']; ?>").setAttribute("value", (newNumb<?php echo $meal['id']; ?>.innerHTML));

  };
});


</script>