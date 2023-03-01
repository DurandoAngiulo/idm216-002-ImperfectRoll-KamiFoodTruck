<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/../_components/navbar-mobile.php';
$cart_items = getCartItems($userOrder['id']);

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

        <?php include __DIR__ . '/../_components/cartItem.php';?>
    
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
            <a  href="<?php echo site_url(); ?>/pages/checkout.php" class="checkoutBtn  px-3 mb-5">
            <p  class=" mt-1 text-light">Checkout</p>
            <p  class=" mt-1 text-light">$12</p>
        </a>
        <a href="<?php echo site_url(); ?>/auth/logout.php" logout> logout</a>    
   </div>

   <?php include_once __DIR__ . '/../_components/footer.php';
?>