<div class="modal fade" id="sideDishModal-<?php echo $meal['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable mx-0 mt-5 ">
    <div class="modal-content modalBackground">
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
                <textarea class="form-control modalBackground border-dark" placeholder="Add note..."></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between flex-wrap">
        <div class="button bIncrement">
            <p class="text-center align-self-center mt-1"><span class="me-4">-</span>1<span class="ms-4">+</span></p>
        </div>
        <div class="button addToCart">
            <p  data-bs-dismiss="modal" class="text-center align-self-center mt-1 text-light">Add to Cart</p>
        </div>
      </div>
    </div>
  </div>
</div>