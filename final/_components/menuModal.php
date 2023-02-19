<div class="modal fade" id="selectionModal-<?php echo $meal['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable mx-0 mt-5 ">
    <form class="modal-content modalBackground" action="<?php echo site_url();?>/_includes/addToOrder.php" method="POST">
      <div class="modal-body p-0">
        <div class=" modal-header-details border-bottom-0 modalAccent p-0">
            <div class="w-100 d-flex justify-content-end pe-2 pt-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
                <div class="image-cropper-container ">
                    <img class="cropped-image" src="<?php echo $meal['imageUrl']; ?>">  
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="d-flex justify-content-between">
                <h2><?php echo $meal['name']; ?></h2>
                <h2><?php echo $meal['price']; ?></h2>
            </div>
            <p class="mb-4"><?php echo $meal['description']; ?></p>
            <h3 class="">Ingredients</h3>
            <p class="mb-4"><?php echo $meal['ingredients']; ?></p>
            <h3 class="">Customize spice level</h3>
            <div class="d-flex justify-content-center mb-4">
                <img src="<?php echo site_url(); ?>/dist/images/thermo.png">
            </div>
            <h3 class="mb-4">Add Protein (+ 1$)</h3>
            <div class="d-flex justify-content-between mb-4">
                <!-- protein inputs -->
                <input  id="chicken<?php echo $meal['id']; ?>" type="radio" name="protein" class=" input-hidden">
                <label  class="" for="chicken<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/chicken.png">
                    </div>
                </label>
                <input  id="beef<?php echo $meal['id']; ?>" type="radio" name="protein" class=" input-hidden">
                <label  class="" for="beef<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/beef.png">
                    </div>
                </label>
                <input  id="tofu<?php echo $meal['id']; ?>" type="radio" name="protein" class=" input-hidden">
                <label  class="" for="tofu<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/tofu.png">
                    </div>
                </label> 
            </div>
            <!-- note input -->
            <h3 class="mb-4">Add a Note</h3>
            <div class="input-group">
                <textarea class="form-control modalBackground border-dark" placeholder="Add note..." type="text" name="note"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between flex-wrap">
        <div class="button bIncrement">
            <p class="text-center align-self-center mt-1"><span class="me-4">-</span>1<span class="ms-4">+</span></p>
        </div>
        <div class="button addToCart" type="submit">
            <p  data-bs-dismiss="modal" class="text-center align-self-center mt-1 text-light">Add to Cart</p>
        </div>
      </div>
    </form>
  </div>
</div>