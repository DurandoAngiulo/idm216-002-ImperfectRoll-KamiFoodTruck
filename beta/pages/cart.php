<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/../_components/navbar-mobile.php';


?>

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
<!-- item 1 -->
        <div class='d-flex justify-content-between mb-4'>    
            <div class='image-and-text d-flex justify-content-between'>
                <div class='cart-item-container'>
                    <div class='cart-image-cropper-container '>
                        <img class='cart-cropped-image' src='https://res.cloudinary.com/dsysuymw2/image/upload/v1677358239/idm216/optimized%20images/bibimbap_cpqi8l.jpg'> 
                    </div>
                    <div class='order-amount'>
                        <p class='accent order-amount-number pt-1'>1</p>
                    </div> 
                </div>
                <div class='ms-3 pt-2'>
                    <h3>Bibimbap</h3>
                    <p>Mild</p>
                </div>
            </div>
            <h3 class='pt-2'>$10</h3>
        </div>   
        <div class='d-flex justify-content-between mb-4'>
            <a href='#'>
                <p class='text-decoration-underline'>Delete</p>
            </a>
            <a href='#'>
                <p class='text-decoration-underline'>Edit Item</p>
            </a>
        </div>
        <div class='heading-border d-flex justify-content-between mb-3'></div>
        <!-- item 2 -->
        <div class='d-flex justify-content-between mb-4'>    
            <div class='image-and-text d-flex justify-content-between'>
                <div class='cart-item-container'>
                    <div class='cart-image-cropper-container '>
                        <img class='cart-cropped-image' src='https://res.cloudinary.com/dsysuymw2/image/upload/v1677358240/idm216/optimized%20images/kimchi_ke7ddn.jpg'> 
                    </div>
                    <div class='order-amount'>
                        <p class='accent order-amount-number pt-1'>2</p>
                    </div> 
                </div>
                <div class='ms-3 pt-2'>
                    <h3>Kimchi</h3>
                    <p>Mild</p>
                </div>
            </div>
            <h3 class='pt-2'>$2</h3>
        </div>   
        <div class='d-flex justify-content-between mb-4'>
            <a href='#'>
                <p class='text-decoration-underline'>Delete</p>
            </a>
            <a href='#'>
                <p class='text-decoration-underline'>Edit Item</p>
            </a>
        </div>
        <div class='heading-border d-flex justify-content-between mb-3'></div>
    
        <!-- <div class="heading-border d-flex justify-content-between mb-3"></div> -->
        <h3 class="mb-4 text-center">Want to Include any utensils?</h3>
        <form class="d-flex justify-content-between mb-4">
                <!-- utensil inputs -->
                <input  id="chicken" value="chicken" type="radio" name="protein" class=" input-hidden">
                <label  class="" for="chicken">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/chopsticks.png">
                    </div>
                </label>
                <input  id="beef" type="radio" value="beef" name="protein" class=" input-hidden">
                <label  class="" for="beef">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/fork.png">
                    </div>
                </label>
                <input  id="tofu" type="radio"  value="tofu" name="protein" class=" input-hidden">
                <label  class="" for="tofu">
                    <div class="protein-container d-flex justify-content-center align-items-center">
                        <img class="" src="<?php echo site_url(); ?>/dist/images/napkin.png">
                    </div>
                </label> 
            </form>
            <div class="heading-border d-flex justify-content-between mb-4"></div>
            <a  href="<?php echo site_url(); ?>/pages/login.php" class="checkoutBtn  px-3 mb-5">
            <p  class=" mt-1 text-light">Login to Checkout</p>
            <p  class=" mt-1 text-light">$12</p>
        </a>
   </div>

   <?php include_once __DIR__ . '/../_components/footer.php';
?>