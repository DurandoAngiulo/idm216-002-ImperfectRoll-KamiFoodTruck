    //Spice meter variables
    const spiceTouchHot = document.querySelector('.selectionHot');
const spiceTouchMedium = document.querySelector('.selectionMedium');
const spiceTouchMild = document.querySelector('.selectionMild');
const spiceBar = document.querySelector('.spiceBar');
const spiceCircle = document.querySelector('.spiceBarCircle');
const bigFlame = document.querySelector('.largerFlame');
  
spiceTouchHot.addEventListener('click', function(){
    document.documentElement.style.setProperty('--spiceColor', "rgb(235,78,55)");
        document.documentElement.style.setProperty('--spiceAccent', 'rgb(247,145,129)');

    bigFlame.classList.add('hotFilter');
    bigFlame.classList.remove('mediumFilter');
    bigFlame.classList.remove('mildFilter');
    spiceBar.classList.add('spicePos3');
    spiceBar.classList.remove('spicePos2');
    spiceBar.classList.remove('spicePos1');
  });
  
  spiceTouchMedium.addEventListener('click', function(){
    document.documentElement.style.setProperty('--spiceColor', 'rgb(223,117,0)');  
      document.documentElement.style.setProperty('--spiceAccent', 'rgb(240,183,119)');

      bigFlame.classList.remove('hotFilter');
      bigFlame.classList.add('mediumFilter');
      bigFlame.classList.remove('mildFilter');
    spiceBar.classList.remove('spicePos3');
    spiceBar.classList.add('spicePos2');
    spiceBar.classList.remove('spicePos1');
  });
  
  spiceTouchMild.addEventListener('click', function(){
      document.documentElement.style.setProperty('--spiceColor', 'rgb(35,128,7)');
      document.documentElement.style.setProperty('--spiceAccent', 'rgb(118, 196, 160)');

    bigFlame.classList.remove('hotFilter');
    bigFlame.classList.remove('mediumFilter');
    bigFlame.classList.add('mildFilter');
    spiceBar.classList.remove('spicePos3');
    spiceBar.classList.remove('spicePos2');
    spiceBar.classList.add('spicePos1');
  });
    
    //Quantity 

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
  if ((defaultNumber <= 8) && (numberDeb == false)){
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


// Add food item 

const oneTap = document.querySelector('.addButton');
oneTap.setAttribute('draggable', false);
//Add item button functions
oneTap.addEventListener('mousedown', function(){
//alert("reading");
oneTap.classList.add('clicked');
});
oneTap.addEventListener('mouseup', function(){
oneTap.classList.remove('clicked');
});


const cart = document.querySelector('.cart-container');
const cartImg = document.querySelector('.cart-image')
const notif = document.querySelector('.cart-amount');
const addItem = document.querySelector('.addToCart');
const alertBar = document.querySelector('.alertContainer');
let deb = false;

addItem.addEventListener('click', function(){
  if (deb == false){
  setTimeout(function(){
   
      deb = true
    notif.classList.remove('cart-add-anim');
    cartImg.classList.add('cart-wiggle');
    alertBar.classList.add('alert-animation');
    setTimeout(function(){
      notif.classList.add('cart-add-anim');
    }, 600);
      setTimeout(function(){
      cartImg.classList.remove('cart-wiggle');
      alertBar.classList.remove('alert-animation');
         deb = false;
      }, 1000);
    }, 1000);
    };
});