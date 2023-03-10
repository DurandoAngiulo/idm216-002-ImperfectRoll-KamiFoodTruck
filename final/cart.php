<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/_components/navbar-mobile.php';
($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;
$cart_items = getCartItems($userOrder['id']);

?>
<div class="container">
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

        <?php include __DIR__ . '/_components/cartItem.php';?>
        <div class="d-flex justify-content-between mb-3">
            <h2>Total</h2>
            <h2>$ <?php echo(number_format((float)$total_price, 2, '.', '')); ?></h2>
        </div>
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
            <a  href="<?php echo site_url(); ?>/checkout.php" class="checkoutBtn  px-3 mb-5">
            <p  class=" mt-1 text-light">Checkout</p>
            <p  class=" mt-1 text-light">$<?php echo(number_format((float)$total_price, 2, '.', '')); ?></p>
        </a>
        <a href="<?php echo site_url(); ?>/auth/logout.php"> logout</a>    
   </div>

   <?php include_once __DIR__ . '/_components/footer.php'; ?>
   </div>

