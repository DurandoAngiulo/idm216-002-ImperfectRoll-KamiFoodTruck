<div class="spiceMeterBox">
<div class="spiceRing"></div>
  <div class="spiceTouchAreas">
    <div class="spiceTouchArea selectionHot"></div>
    <div class="spiceTouchArea selectionMedium"></div>
    <div class="spiceTouchArea selectionMild"></div>
  </div>
  <div class="spiceLevels">
    <div class="spiceText">
      <p>Hot</p>
      <p>Medium</p>
      <p>Mild</p>
    </div>
    <div class="spiceRules">
      <div class="spiceDash"></div>
      <div class="spiceDash"></div>
      <div class="spiceDash"></div>
    </div>
  </div>
  <div class="spiceMeter">
    <div class="spiceBar">
          <div class="spiceBarCircle"></div>
    </div>
</div>  
</div>

<style>:root{
  --spiceColor: rgb(35,128,7);
  --spiceAccent: rgb(118, 196, 160);
}
/*This is the whole bar */
.spiceMeterBox{
  display: flex;
}
.spiceMeter{
  display: flex;
  align-items: flex-end;
  border-radius: 20rem;
  height: 20rem;
  width: 3rem;
  background-color: rgb(249,236,200);
  overflow: hidden;
}
/*This is the colored bar inside the meter */
.spiceBar{
  display: flex;
  align-items: flex-start;
  width: 3rem;
  height: 1.5rem;
  background-color: var(--spiceAccent);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
.spiceBarCircle{
  position: relative;
  top: -1.5rem;
  width: 3rem;
  height: 3rem;
  border-radius: 20rem;
  background-color: var(--spiceColor);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
.spiceLevels{
  height: 20rem;
  width: 10rem;
  display: flex;
}
.spiceText{
  width: 5rem;
  text-align: right;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.spiceRules{
  padding: 1.5rem 0;
  width: 5rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
.spiceDash{
  height: 2px;
  width: 2rem;
  background-color: gray;
}
.spiceRing{
  border: solid 5px var(--spiceColor);
  display: flex;
  align-self: center;
  width: 5rem;
  height: 5rem;
  margin: 2rem;
  border-radius: 20rem;
  background-color: rgb(249,236,200);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
/*This is where the user will tap to change the level, covers a larger area than just the bar. */
.spiceTouchAreas{
  position: absolute;
  height: 20rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.spiceTouchArea{
  cursor: pointer;
  position: relative;
  left: 10rem;
  height: 60px;
  width: 13rem;
  z-index: 100;
}

.spicePos3{
  height: 18.5rem;
}
.spicePos2{
  height: 10rem;
}
.spicePos1{
  height: 1.5rem;
}
</style>

<script>
    //Spice meter variables
const spiceTouchHot = document.querySelector('.selectionHot');
const spiceTouchMedium = document.querySelector('.selectionMedium');
const spiceTouchMild = document.querySelector('.selectionMild');
const spiceBar = document.querySelector('.spiceBar');
const spiceCircle = document.querySelector('.spiceBarCircle');
let spiceValueForDatabase = 1;

//spice meter function
spiceTouchHot.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', "rgb(235,78,55)");
      document.documentElement.style.setProperty('--spiceAccent', 'rgb(247,145,129)');

  spiceBar.classList.add('spicePos3');
  spiceBar.classList.remove('spicePos2');
  spiceBar.classList.remove('spicePos1');
  spiceValueForDatabase = 3;
});

spiceTouchMedium.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', 'rgb(223,117,0)');  
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(240,183,119)');

  spiceBar.classList.remove('spicePos3');
  spiceBar.classList.add('spicePos2');
  spiceBar.classList.remove('spicePos1');
  spiceValueForDatabase = 2;
});

spiceTouchMild.addEventListener('click', function(){
    document.documentElement.style.setProperty('--spiceColor', 'rgb(35,128,7)');
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(118, 196, 160)');

  spiceBar.classList.remove('spicePos3');
  spiceBar.classList.remove('spicePos2');
  spiceBar.classList.add('spicePos1');
  spiceValueForDatabase = 1;
});
</script>