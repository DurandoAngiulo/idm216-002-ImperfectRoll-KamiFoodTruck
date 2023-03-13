
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<div>
<div class="spiceBox">
   <div class="spiceRing"><img class="largerFlame" src="<?php echo site_url(); ?>/dist/images/icons/mildFlame.png" alt="flameIcon">
   </div>
   <div class="spicePairing">
   <div class="spiceMeter">

      <div class="spiceTouchAreas">
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionHot js-selectionHot" type="radio" id="Hot" name="spiceLevel" value="Hot">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMedium" type="radio" id="Medium" name="spiceLevel" value="Medium">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMild" type="radio" id="Mild" name="spiceLevel" value="Mild">
        </div>
      </div>
      <div class="spiceBar">
          <div class="spiceBarCircle">
            <img class="flameCircle"src="<?php echo site_url(); ?>/dist/images/icons/flame.png" alt="flameIcon">
          </div>
      </div>
</div>
  <div class="spiceLevels">
    <div class="spiceText">
      <p>Hot</p>
      <p>Medium</p>
      <p>Mild</p>
    </div>
  </div>
</div>  
 </div>
</div>
<!--  Added to dist/styles/components.css 
<style>/*Spice Meter*/
.spiceBox{
  width: 100%;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
p{
  font-family: Poppins;
}

:root{
  --spiceColor: rgb(35,128,7);
  --spiceAccent: rgb(118, 196, 160);
}

.spiceMeter{
  position: relative;
  left: -13.2rem;
  display: flex;
  align-items: flex-end;
  border-radius: 20rem;
  height: 15rem;
  width: 3rem;
  background-color: rgb(255,255,255);
  overflow: hidden;
}
.spiceBar{
  display: flex;
  align-items: flex-start;
  width: 3rem;
  height: 1.5rem;
  background-color: rgb(255,255,255);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
.spiceBarCircle{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  top: -1.5rem;
  width: 3rem;
  height: 3rem;
  border-radius: 20rem;
  background-color: var(--spiceColor);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
.spiceLevels{
  height: 15.5rem;
  width: 10rem;
  align-items: space-between;
  display: flex;
}
.spiceText{
  width: 6rem;
  padding: 0 1rem;
  text-align: left;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  
}
.flameCircle{
  width: 70%;
  height: 70%;
  padding: .25rem;
  filter: brightness(100);
  z-index: 100;
}
input[type="radio"] {
    -webkit-appearance: none;
  appearance: none;
}
.spiceRadioInsert{
  border: solid 1px black;
  height: 2.9rem;
  width: 2.9rem;
  border-radius: 20rem;
  position: relative;
  left: -3px;
  z-index: 500;
}
.spiceRing{
  border: solid 5px var(--spiceColor);
  display: flex;
  align-self: center;
  align-items: center;
  justify-content: center;
  width: 5rem;
  height: 5rem;
  margin: 2rem;
  border-radius: 20rem;
  background-color: rgb(249,236,200);
  transition: all .4s cubic-bezier(.38,.77,.1,.96);
}
.largerFlame{
  width: 90%;
  height: 90%;
}
.spiceTouchAreas{
  position: relative;
  height: 15rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.spiceTouchArea{
  background-color: rgba(0, 0, 0, 0);
  cursor: pointer;
  position: relative;
  height: 3rem;
  width: 3rem;
  z-index: 100;
}

.spicePos3{
  height: 13.5rem;
}
.spicePos2{
  height: 7.5rem;
}
.spicePos1{
  height: 1.5rem;
}
</style>-->
<!--  
<script>
spiceTouchHot.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', "rgb(235,78,55)");
      document.documentElement.style.setProperty('--spiceAccent', 'rgb(247,145,129)');

  spiceBar.classList.add('spicePos3');
  spiceBar.classList.remove('spicePos2');
  spiceBar.classList.remove('spicePos1');
});

spiceTouchMedium.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', 'rgb(223,117,0)');  
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(240,183,119)');

  spiceBar.classList.remove('spicePos3');
  spiceBar.classList.add('spicePos2');
  spiceBar.classList.remove('spicePos1');
});

spiceTouchMild.addEventListener('click', function(){
    document.documentElement.style.setProperty('--spiceColor', 'rgb(35,128,7)');
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(118, 196, 160)');

  spiceBar.classList.remove('spicePos3');
  spiceBar.classList.remove('spicePos2');
  spiceBar.classList.add('spicePos1');
});
  
</script>
-->