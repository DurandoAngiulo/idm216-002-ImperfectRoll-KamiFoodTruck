<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/_components/navbar-mobile.php';
?>
<!-- <style><?php 
include_once __DIR__ . '/../dist/styles/home.css';
?></style> -->
<?php 
$query ='SELECT * FROM menu WHERE category = "side" ORDER BY name';
$result = mysqli_query($db_connection, $query);


?>
   
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
            <a href="<?php echo site_url(); ?>/index.php" class="foodTypeOption sides">Meals</a>
                <p class="foodTypeOption sides">Sides</p>
                <p class="foodTypeOption drinks">Drinks</p>
            </div>
            <div class="foodTypeUnderbar">
            <div class="foodTypeSlider"></div>
            </div>
        </div>
    </div>
    <!-- menu items -->
    <?php include __DIR__ . '/_components/sideItem.php'; ?>
   </div>

   <!-- MODAL -->


    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal meal -->
<!-- <div class="modal fade" id="sideDishModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable mx-0 mt-5 ">
    <div class="modal-content modalBackground">
      <div class="modal-body p-0">
        <div class=" modal-header-details border-bottom-0 modalAccent p-0">
            <div class="w-100 d-flex justify-content-end pe-2 pt-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
                <div class="image-cropper-container ">
                    <img class="cropped-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676320861/idm216/kimchi_n1vhcy.jpg">  
                </div>
            </div>
        </div>
        <div class="p-3">
            <div class="d-flex justify-content-between">
                <h2> Kimchi</h2>
                <h2> 1$</h2>
            </div>
            <p class="mb-4">Fermented cabbage with ginger and garlic.</p>
            <h3 class="">Ingredients</h3>
            <p class="mb-4">
                Napa Cabbage, Natural rock salt, Gochugaru 
                (Korean chili flakes), Daikon radish, Korean 
                fish sauce, Carrots, Ginger, Garlic, Sugar, 
                Onion
            </p>
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
</div> -->

<div class="py-3"></div>

    <?php include_once __DIR__ . '/_components/footer.php';
?>