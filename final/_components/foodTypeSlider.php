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