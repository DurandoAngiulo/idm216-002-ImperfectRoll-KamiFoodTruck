<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/../_components/navbar-mobile.php';
?>
<style><?php 
include_once __DIR__ . '/../dist/styles/home.css';
?></style>

   
   <h1 class="logoFont text-center mt-5 mb-3">KAMI</h1>
   <div class=" box1 sb8 mb-2">
    <h3>The wait time is <span class="accent">13 Minutes</span></h3>
   </div>
    <!-- wrapper -->
   <div class="px-3">
    <!-- header -->
    <div class="heading-border d-flex justify-content-between mb-3">
        <h3 class="align-self-end">Kami Today</h3>
        <img class="kami-duck" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
    </div>
    <!-- header image -->
    <div class="menu-header-image mb-3">
        <div class="todays-pick d-flex mt-1 ms-1 p-1">
            <img class="tpIcon me-1" src="<?php echo site_url(); ?>/dist/images/icons/stars.png">
            <p class="align-self-center">Today's Pick</p>
        </div>
        <div class="tp-name d-flex justify-content-between pt-2">
            <p class="ms-2">Tteok Bok Ki</p>
            <p class="me-2">$8</p>
        </div>
    </div>
    <!-- food slider -->
    <div class="d-flex justify-content-center mb-3">
        <div class="foodType">
            <div class="foodCategories">
                <p class="foodTypeOption meals">Meals</p>
                <a href="<?php echo site_url(); ?>/pages/home-2.php" class="foodTypeOption sides">Sides</a>
                <p class="foodTypeOption drinks">Drinks</p>
            </div>
            <div class="foodTypeUnderbar">
            <div class="foodTypeSlider"></div>
            </div>
        </div>
    </div>
    <!-- menu items -->
    <div class="menu-item-container mb-3 d-flex">
        <img class="menu-item-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bibimbap_z5qfu8.jpg">
        <div class="menu-item-content-container pt-3 px-2">
            <div class="d-flex justify-content-between mb-2">
                <h3>Bibimbap</h3>
                <h3>$10</h3>
            </div>
            <p>Rice with various vegetables and protein.</p>
            <div class="d-flex justify-content-end mt-2">
                <div  data-bs-toggle="modal" data-bs-target="#selectionModal" class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div> 
        </div>
    </div>
    <div class="menu-item-container mb-3 d-flex">
        <img class="menu-item-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062781/idm216/jae-yook_qfxmdv.jpg">
        <div class="menu-item-content-container pt-3 px-2">
            <div class="d-flex justify-content-between mb-2">
                <h3>Jae Yook Bok Um</h3>
                <h3>$10</h3>
            </div>
            <p>Stir-fried marinated pork with kimchi.</p>
            <div class="d-flex justify-content-end mt-2">
                <div class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-container mb-3 d-flex">
        <img class="menu-item-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bulgogi_srhtfb.jpg">
        <div class="menu-item-content-container pt-3 px-2">
            <div class="d-flex justify-content-between mb-2">
                <h3>Bulgogi</h3>
                <h3>$10</h3>
            </div>
            <p>Marinated beef with rice and vegetables.</p>
            <div class="d-flex justify-content-end mt-2">
                <div class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div>
        </div>
    </div>
   </div>

   <!-- MODAL////// -->
   <div class="modal fade" id="selectionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable mx-0 mt-5 ">
    <div class="modal-content modalBackground">
      <div class="modal-body p-0">
        <div class=" modal-header-details border-bottom-0 modalAccent p-0">
            <div class="w-100 d-flex justify-content-end pe-2 pt-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
                <div class="image-cropper-container ">
                    <img class="cropped-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bibimbap_z5qfu8.jpg">  
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="d-flex justify-content-between">
                <h2>Bibimbap</h2>
                <h2>10$</h2>
            </div>
            <p class="mb-4">Steamed white rice with various vegetables and proteins.</p>
            <h3 class="">Ingredients</h3>
            <p class="mb-4">
            Carrots, Green Squash, Watercress, 
            Bean Sprouts, Romain Lettuce on Rice with 
            Fried Egg and Sesame Oil and Gochujang 
            (Korean Hot Pepper Paste)
            </p>
            <h3 class="">Customize spice level</h3>
            <div class="d-flex justify-content-center mb-4">
                <img src="<?php echo site_url(); ?>/dist/images/thermo.png">
            </div>
            <h3 class="mb-4">Add Protein (+ 1$)</h3>
            <div class="d-flex justify-content-between mb-4">
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/chicken.png">
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/beef.png">
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/tofu.png">
                </div>
            </div>
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
    

    <?php include_once __DIR__ . '/../_components/footer.php';
?>