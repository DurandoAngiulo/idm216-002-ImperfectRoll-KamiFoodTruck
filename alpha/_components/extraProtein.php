<div class="selectionButtons">
<div class="selectionButton">
    <img src="https://durandoangiulo.com/idm216/final/dist/images/chicken.png" alt="chicken">
  </div>
   <div class="selectionButton">
     <img src="https://durandoangiulo.com/idm216/final/dist/images/beef.png" alt="beef">
  </div>
   <div class="selectionButton">
      <img src="https://durandoangiulo.com/idm216/final/dist/images/tofu.png" alt="tofu">
  </div>
</div>
<style>
    /*Selection Button*/
    .selectionButtons{
        display: flex;
    }
.selectionButton{
  border: solid 2px rgba(0, 0, 0, 0);
  border-radius: 1rem;
  height: 10rem;
  width: 9rem;
  background-color: rgb(249,236,200);
  transition: all .2s linear;
  margin: 0 1rem;
  display: flex;
  justify-content: center;
  padding: .5rem;
}

.borderAdded{
  border: solid 2px black;
  transition: all .2s linear;
}
</style>
<script>
    //Add protein buttons
const selectionButtons = document.querySelectorAll('.selectionButton');

    selectionButtons.forEach((selectionButton) => {
  selectionButton.addEventListener('click', function(){
    if (selectionButton.classList.contains('borderAdded')){
        selectionButton.classList.remove('borderAdded')
    }else{
       selectionButton.classList.add('borderAdded')
    }
    });
});
</script>