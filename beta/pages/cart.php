<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/../_components/navbar-mobile.php';
?>
<!-- <style><?php 
include_once __DIR__ . '/../dist/styles/cart.css';
?></style> -->
<h1 class="text-center mt-5 mb-3">Cart</h1>
<div class=" box1 sb8 mb-2">
    <h3>The wait time is <span class="accent">13 Minutes</span></h3>
   </div>
   <!-- /////wrapper///// -->
   <div class="px-3">
    <div class="heading-border d-flex justify-content-between mb-3">
        <h3 class="align-self-end">Your Order</h3>
        <img class="kami-duck" src="<?php echo site_url(); ?>/dist/images/kami-duck.png">
    </div>

    <div class="d-flex justify-content-between mb-3">
        <h2>Total</h2>
        <h2>$12</h2>
    </div>

        <div class="d-flex justify-content-between mb-4">
            <!-- cart item image and number -->
            <div class="image-and-text d-flex justify-content-between">
                <div class="cart-item-container">
                    <div class="cart-image-cropper-container ">
                        <img class="cart-cropped-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bibimbap_z5qfu8.jpg"> 
                    </div>
                    <div class="order-amount">
                        <p class="accent order-amount-number pt-1">1</p>
                    </div> 
                </div>
                <div class="ms-3 pt-2">
                    <h3>Bibimbap</h3>
                    <p>Medium Spice</p>
                </div>
            </div>
            <h3 class="pt-2">$10</h3>
        </div>
        
        <div class="d-flex justify-content-between mb-4">
            <a href="#">
                <p class="text-decoration-underline">Delete</p>
            </a>
            <a href="#">
            <p class="text-decoration-underline">Edit Item</p>
            </a>
        </div>
        <div class="heading-border d-flex justify-content-between mb-3"></div>
        <!-- next item -->
        <div class="d-flex justify-content-between mb-4">
            <!-- cart item image and number -->
            <div class="image-and-text d-flex justify-content-between">
                <div class="cart-item-container">
                    <div class="cart-image-cropper-container ">
                        <img class="cart-cropped-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676320861/idm216/kimchi_n1vhcy.jpg"> 
                    </div>
                    <div class="order-amount">
                        <p class="accent order-amount-number pt-1">2</p>
                    </div> 
                </div>
                <div class="ms-3 pt-2">
                    <h3>Kimchi</h3>
                </div>
            </div>
            <h3 class="pt-2">$2</h3>
        </div>
        
        <div class="d-flex justify-content-between mb-4">
            <a href="#">
                <p class="text-decoration-underline">Delete</p>
            </a>
            <a href="#">
                <p class="text-decoration-underline">Edit Item</p>
            </a>
        </div>
        <div class="heading-border d-flex justify-content-between mb-3"></div>
        <h3 class="mb-4 text-center">Want to Include any utensils?</h3>
            <div class="d-flex justify-content-between mb-4">
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <a href="#">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/chopsticks.png">
                    </a>
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/fork.png">
                    </a>
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                <a href="#">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/napkin.png">
                </a>
                </div>
            </div>
            <div class="heading-border d-flex justify-content-between mb-4"></div>
            <a  href="<?php echo site_url(); ?>/pages/login.php" class="checkoutBtn  px-3 mb-5">
            <p  class=" mt-1 text-light">Login to checkout</p>
            <p  class=" mt-1 text-light">$12</p>
        </a>
        
   </div>

   <?php include_once __DIR__ . '/../_components/footer.php';
?>