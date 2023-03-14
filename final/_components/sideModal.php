<div class="modal fade" id="sideDishModal-<?php echo $meal['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <form class="modal-content modalBackground" action="<?php echo site_url();?>/_includes/addSideToOrder.php" method="POST">
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
            <h3 class="mb-4">Add a Note</h3>
            <div class="input-group">
                <textarea class="form-control modalBackground border-dark" placeholder="Add note..." type="text" name="note"></textarea>
            </div>
            <input name="menu_id" value="<?php echo $meal['id']; ?>" type="hidden"/>
            <input name="order_id" value="<?php echo $userOrder['id']; ?>" type="hidden"/>
            <input id="quantity-input<?php echo $meal['id']; ?>"name="quantity" value="1" type="hidden"/>
        </div>
      </div>
      <div class="modal-footer justify-content-between flex-wrap">
      <?php include __DIR__ . '/quanity.php'; ?>
      <button  data-bs-dismiss="modal" class="button addToCart text-center align-self-center mt-1 " type="submit" ><p class="mt-1 text-light">Add to Cart</p></button>
      </div>
    </form>
  </div>
</div>