<div class="modal fade" id="selectionModal-<?php echo $meal['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
                <h2>$ <?php echo $meal['price']; ?></h2>
            </div>
            <p class="mb-4"><?php echo $meal['description']; ?></p>
            <h3 class="">Ingredients</h3>
            <p class="mb-4"><?php echo $meal['ingredients']; ?></p>

            <h3 class="mb-4">Customize spice level</h3>
            <div class="d-flex justify-content-center">
            <!-- <img class ="flame-img me-4" src="<?php echo site_url(); ?>/dist/images/flame.png"> -->
            <!-- 
                <div class="d-flex flex-column justify-content-center mb-4">

                        <div class="form-check flex-column">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Mild
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Medium
                            </label>
                        </div>
                        <div class="form-check flex-column">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Hot
                            </label>
                        </div>
                </div>
                 -->
                <?php include __DIR__ . '/spiceMeter.php'; ?>
            </div>

            <h3 class="mb-4">Add Protein (+ 1$)</h3>
            <div class="d-flex justify-content-evenly mb-4 px-5">
                <!-- protein inputs -->
                <input  id="chicken<?php echo $meal['id']; ?>" value="chicken" type="radio" name="protein" class=" input-hidden">
                <label  class="" for="chicken<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex flex-wrap justify-content-center ">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/chicken.png">
                        <p class="text-center fst-italic">Chicken</p>
                    </div>
                </label>
                <input  id="beef<?php echo $meal['id']; ?>" type="radio" value="beef" name="protein" class=" input-hidden">
                <label  class="" for="beef<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex flex-wrap justify-content-center ">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/beef.png">
                        <p class="text-center fst-italic">Beef</p>
                    </div>
                </label>
                <input  id="tofu<?php echo $meal['id']; ?>" type="radio"  value="tofu" name="protein" class=" input-hidden">
                <label  class="" for="tofu<?php echo $meal['id']; ?>">
                    <div class="protein-container d-flex  flex-wrap justify-content-center ">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/tofu.png">
                        <p class="text-center fst-italic">Tofu</p>
                    </div>
                </label> 
            </div>
            <!-- note input -->
            <h3 class="mb-4">Add a Note</h3>
            <div class="input-group">
                <textarea class="form-control modalBackground border-dark" placeholder="Add note..." type="text" name="note"></textarea>
            </div>
            <input name="menu_id" value="<?php echo $meal['id']; ?>" type="hidden"/>
            <input name="order_id" value="<?php echo $userOrder['id']; ?>" type="hidden"/>
            <input name="spice_level" value="mild" type="hidden"/>
            <input name="quantity" value=1 type="hidden"/>
        </div>
      </div>
      <div class="modal-footer justify-content-between flex-wrap">
        <!-- <div class="button bIncrement">
            <p class="text-center align-self-center mt-1 "><span class="me-4">-</span>1<span class="ms-4">+</span></p>
        </div> -->
        <?php include __DIR__ . '/quantity.php'; ?>
        <button  data-bs-dismiss="modal" class="button addToCart text-center align-self-center mt-1 " type="submit" ><p class="mt-1 text-light">Add to Cart</p></button>
      </div>
    </form>
  </div>
</div>
