<div class="foodType">
    <div class="foodCategories">
    <p class="foodTypeOption meals">Meals</p>
     <p class="foodTypeOption sides">Sides</p>
     <p class="foodTypeOption drinks">Drinks</p>
    </div>
    <div class="foodTypeUnderbar">
          <div class="foodTypeSlider">
          </div>
    </div>
  </div>
<!--  Added to dist/styles/components.css 
<style>
    /*Food categories*/
.foodType{
  width: 15rem;
}
.foodCategories{
  display: flex;
  justify-content: space-between;
}
.foodTypeOption{
  cursor: pointer;
  text-align: center;
  width: 15rem;
}
.foodTypeSlider{
  position: relative;
  left: 0rem;
  background-color: black;
  height: 2px;
  width: 5rem;
  animation: slide 1s ease-in-out infinite;
}
.foodTypeUnderbar{
  display: flex;
  background-color: rgb(167, 167, 167);
  height: 2px;
  transition: all .2s ease-out;
}

.sliderPos1{
  left: 0rem;
  transition: all .2s ease-out;
}
.sliderPos2{
  left: 5rem;
  transition: all .2s ease-out;
}
.sliderPos3{
  left: 10rem;
  transition: all .2s ease-out;
}
.bolded{
  /* increase font weight */
  font-weight: 900;
  /* Slide to the left */
  transition: all .5s ease-out;
}
</style>
-->
<script>

    //Food type slider variables
const slider = document.querySelector('.foodTypeSlider');
const meals = document.querySelector('.meals');
const sides = document.querySelector('.sides');
const drinks = document.querySelector('.drinks');

    //Food type slider functions
meals.addEventListener('mouseup', function(){
  meals.classList.add('bolded');
  sides.classList.remove('bolded');
  drinks.classList.remove('bolded');
  slider.classList.add('sliderPos1');
  slider.classList.remove('sliderPos2');
  slider.classList.remove('sliderPos3');
});
sides.addEventListener('mouseup', function(){
  meals.classList.remove('bolded');
  sides.classList.add('bolded');
  drinks.classList.remove('bolded');
  slider.classList.add('sliderPos2');
  slider.classList.remove('sliderPos1');
  slider.classList.remove('sliderPos3');
});
drinks.addEventListener('mouseup', function(){
  meals.classList.remove('bolded');
  sides.classList.remove('bolded');
  drinks.classList.add('bolded');
  slider.classList.add('sliderPos3');
  slider.classList.remove('sliderPos2');
  slider.classList.remove('sliderPos1');
});
</script>