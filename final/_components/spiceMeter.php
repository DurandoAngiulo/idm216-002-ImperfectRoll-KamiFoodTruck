
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
          <input class="spiceTouchArea selectionHot js-selectionHot" type="radio" id="hot<?php echo $meal['id']; ?>" name="spiceLevel" value="hot">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMedium" type="radio" id="medium<?php echo $meal['id']; ?>" name="spiceLevel" value="medium">
        </div>
        <div class="spiceRadioInsert">
          <input class="spiceTouchArea selectionMild" type="radio" id="mild<?php echo $meal['id']; ?>" name="spiceLevel" value="mild">
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
