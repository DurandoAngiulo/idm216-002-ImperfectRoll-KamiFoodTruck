<div class="cart-container">
    <div class="cart-amount"></div>
  <img class="cart-image" src="https://upload.wikimedia.org/wikipedia/commons/6/67/Ic_shopping_cart_48px.svg" alt="cart">
  </div>
  <!--  Added to dist/styles/components.css 
<style>
    @keyframes cart-wiggle{
  0%{
    transform: rotate(0deg);
  }25%{
    transform: rotate(-10deg);
  }50%{
    transform: rotate(10deg);
  }75%{
    transform: rotate(-10deg);
  }100%{
    transform: rotate(0deg);
  }
}

@keyframes cart-add-anim{
  0%{
    transform: scale(.01);
  }100%{
    transform: scale(1);
  }
}

.cart-amount{
  border-radius: 1rem;
  width: 1rem;
  height: 1rem;
  background-color: red;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cart-wiggle{
  animation: cart-wiggle .6s ease-in-out;
  transition: all .4s ease-in-out
}

.cart-amount{
  z-index: 10;
  position: relative;
  right: -2rem;
  top: .8rem;
  transform: scale(.01);
}
.cart-add-anim{
  animation: cart-add-anim .4s ease-out forwards;
}
</style>

-->
<script>
    const cart = document.querySelector('.cart-container');
const cartImg = document.querySelector('.cart-image')
const notif = document.querySelector('.cart-amount');
let deb = false;

cart.addEventListener('click', function(){
  if (deb == false){
    deb = true
  notif.classList.remove('cart-add-anim');
  cartImg.classList.add('cart-wiggle');
  setTimeout(function(){
    notif.classList.add('cart-add-anim');
  }, 600);
    setTimeout(function(){
    cartImg.classList.remove('cart-wiggle');
       deb = false;
  }, 1000);
  };
});
</script>