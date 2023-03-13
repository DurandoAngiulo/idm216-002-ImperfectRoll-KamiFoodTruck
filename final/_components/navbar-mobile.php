<div class="alert-container">
    <div class="item-added-alert">
        <h6 class="item-added-text">(PHP ECHO ITEM NAME) Was added to your cart</h6>
    </div>
</div>
<div class=" mobile-navbar d-flex w-100 px-5">
    <a class="py-1 d-inline-block" href="<?php echo site_url(); ?>/index.php">
        <div class="d-flex flex-wrap justify-content-center"> 
            <img class="mobile-nav-image" src="<?php echo site_url(); ?>/dist/images/icons/Home.png">
        </div>
        <p class="text-center">Home</p>
    </a>
    <a class="pt-1 d-inline-block" href="<?php echo site_url(); ?>/order-confirmation.php">
        <div class="d-flex justify-content-center"> 
            <img class="mobile-nav-image" src="<?php echo site_url(); ?>/dist/images/icons/Orders.png">
        </div>
        <p class="text-center">Orders</p>
    </a>
    <a class="pt-1 d-inline-block" href="<?php echo site_url(); ?>/cart.php">
        <div class="d-flex flex-wrap justify-content-center"> 
        <div class="cart-amount"></div>
            <img class="mobile-nav-image cart-image" src="<?php echo site_url(); ?>/dist/images/icons/Cart.png">
        </div>
        <p class="text-center">Cart</p>
    </a>
</div>
