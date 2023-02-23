<div class="number-box">
        <div class="number-left-touch-area number-touch-area">
              <p class="number-text">-</p>
        </div>
    <div class="number-reel-container">
      <p class="item-amount last-number">0</p>
      <p class="item-amount number current-number">1</p>
      <p class="item-amount new-number">2</p>
    </div>
    <div class="number-right-touch-area number-touch-area">    <p class="number-text">+</p></div>
  </div>

  <style>
    /*Item Added*/
@keyframes prevSlideIn{
  from{
    opacity: 0;
    left: -1;
  }to{
    opacity: 1;
    left: .6rem;
  }
}
@keyframes newSlideIn{
    from{
    opacity: 0;
    left: 1;
  }to{
    opacity: 1;
    left: -.6rem;
  }
}
@keyframes currentSlideRight{
    from{
    opacity: 1;
    left: 0;
  }to{
    opacity: 0;
    left: 1rem;
  }
}
@keyframes currentSlideLeft{
      from{
    opacity: 1;
    left: 0;
  }to{
    opacity: 0;
    left: -1rem;
  }
}
.number-box{
  display: flex;
  justify-content: space-between;
  width: 6rem;
  height: 3rem;
  border: solid 2px black;
  border-radius: 5rem;
  padding: 0 1.5rem;
  align-items: center;
}
.number-reel-container{
  width: 100%;
  position: relative;
  display: flex;
  justify-content: space-between;
}
.number-touch-area{
    cursor: pointer;
  position: relative;
  display: flex;
  height: 3rem;
  width: 8rem;
}
.number-left-touch-area{
  left: -1rem;
  justify-content: center;
}
.number-right-touch-area{
  left: 1rem;
  justify-content: center;
}
.item-amount{
  position: relative;
}
.last-number{
  opacity: 0;
  left: -1rem; 
}
.new-number{
  opacity: 0;
  left: 1rem;
}

.prevSlideIn{
  animation: prevSlideIn .25s ease-in-out;
}
.newSlideIn{
  animation: newSlideIn .25s ease-in-out;
}
.currentSlideLeft{
  animation: currentSlideLeft .25s ease-in-out;
}
.currentSlideRight{
  animation: currentSlideRight .25s ease-in-out;
}
  </style>
  <script>
    //Number of items
let defaultNumber = 1;
const minus = document.querySelector('.number-left-touch-area');
const plus = document.querySelector('.number-right-touch-area');
const prevNumb = document.querySelector('.last-number');
const newNumb = document.querySelector('.new-number');
const currentNumb = document.querySelector('.current-number');
const amountNumbs = document.querySelector('.item-amount');
let numberDeb = false

minus.addEventListener('click', function(){
  if ((defaultNumber >= 2) && (numberDeb == false)){
    numberDeb = true;
  prevNumb.classList.add('prevSlideIn');
  currentNumb.classList.add('currentSlideRight');
    setTimeout(function(){
      defaultNumber --;
      currentNumb.innerHTML = defaultNumber;
      prevNumb.innerHTML = defaultNumber - 1;
      newNumb.innerHTML = defaultNumber + 1;
      prevNumb.classList.remove('prevSlideIn');
currentNumb.classList.remove('currentSlideRight');
      numberDeb = false;
    }, 250);
  };
});

plus.addEventListener('click', function(){
  if (numberDeb == false){
  numberDeb = true;
    newNumb.classList.add('newSlideIn');
  currentNumb.classList.add('currentSlideLeft');
    setTimeout(function(){
      defaultNumber ++;
              amountNumbs.style.transition = 'all 0s linear';
      currentNumb.innerHTML = defaultNumber;
      prevNumb.innerHTML = defaultNumber - 1;
      newNumb.innerHTML = defaultNumber + 1;
       newNumb.classList.remove('newSlideIn');
currentNumb.classList.remove('currentSlideLeft');
      numberDeb = false;
    }, 250); 
  };
});
  </script>