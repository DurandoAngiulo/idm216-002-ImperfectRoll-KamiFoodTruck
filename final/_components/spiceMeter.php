
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<div>
<div class="spiceBox">
   <div class="spiceRing"><img id="largerFlame<?php echo $meal['id']; ?>" class="largerFlame" src="<?php echo site_url(); ?>/dist/images/icons/mildFlame.png" alt="flameIcon">
   </div>
   <div class="spicePairing">
   <div class="spiceMeter">

      <div class="spiceTouchAreas">
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionHot js-selectionHot" type="radio" id="hot<?php echo $meal['id']; ?>" name="spice_level" value="hot">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMedium" type="radio" id="medium<?php echo $meal['id']; ?>" name="spice_level" value="medium">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMild" type="radio" id="mild<?php echo $meal['id']; ?>" name="spice_level" value="mild">
        </div>
      </div>
      <div class="spiceBar" id="spiceBar<?php echo $meal['id']; ?>">
          <div class="spiceBarCircle" id="spiceBarCircle<?php echo $meal['id']; ?>">
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

<script>
const spiceTouchHot<?php echo $meal['id']; ?> = document.getElementById('hot<?php echo $meal['id']; ?>');
const spiceTouchMedium<?php echo $meal['id']; ?> = document.getElementById('medium<?php echo $meal['id']; ?>');
const spiceTouchMild<?php echo $meal['id']; ?> = document.getElementById('mild<?php echo $meal['id']; ?>');
const spiceBar<?php echo $meal['id']; ?> = document.getElementById('spiceBar<?php echo $meal['id']; ?>');
const spiceCircle<?php echo $meal['id']; ?> = document.getElementById('spiceBarCircle<?php echo $meal['id']; ?>');
const bigFlame<?php echo $meal['id']; ?> = document.getElementById('largerFlame<?php echo $meal['id']; ?>');
  // console.log(spiceBar.classList);
spiceTouchHot<?php echo $meal['id']; ?>.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', "rgb(235,78,55)");
      document.documentElement.style.setProperty('--spiceAccent', 'rgb(247,145,129)');
  bigFlame<?php echo $meal['id']; ?>.classList.add('hotFilter');
  bigFlame<?php echo $meal['id']; ?>.classList.remove('mediumFilter');
  bigFlame<?php echo $meal['id']; ?>.classList.remove('mildFilter');
  spiceBar<?php echo $meal['id']; ?>.classList.add('spicePos3');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos2');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos1');
});

spiceTouchMedium<?php echo $meal['id']; ?>.addEventListener('click', function(){
  document.documentElement.style.setProperty('--spiceColor', 'rgb(223,117,0)');  
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(240,183,119)');
    bigFlame<?php echo $meal['id']; ?>.classList.remove('hotFilter');
    bigFlame<?php echo $meal['id']; ?>.classList.add('mediumFilter');
    bigFlame<?php echo $meal['id']; ?>.classList.remove('mildFilter');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos3');
  spiceBar<?php echo $meal['id']; ?>.classList.add('spicePos2');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos1');
});

spiceTouchMild<?php echo $meal['id']; ?>.addEventListener('click', function(){
    document.documentElement.style.setProperty('--spiceColor', 'rgb(35,128,7)');
    document.documentElement.style.setProperty('--spiceAccent', 'rgb(118, 196, 160)');
    bigFlame<?php echo $meal['id']; ?>.classList.remove('hotFilter');
    bigFlame<?php echo $meal['id']; ?>.classList.remove('mediumFilter');
    bigFlame<?php echo $meal['id']; ?>.classList.add('mildFilter');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos3');
  spiceBar<?php echo $meal['id']; ?>.classList.remove('spicePos2');
  spiceBar<?php echo $meal['id']; ?>.classList.add('spicePos1');
});
  
</script>
