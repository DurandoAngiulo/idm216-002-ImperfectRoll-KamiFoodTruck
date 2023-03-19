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
        <div class="d-flex flex-wrap justify-content-center cart-container"> 
        <div class="cart-amount"></div>
            <img class="mobile-nav-image cart-image" src="<?php echo site_url(); ?>/dist/images/icons/Cart.png">
        </div>
        <p class="text-center ms-3">Cart</p>
    </a>
</div>
<?php 
if($userOrder['id']){
$cart_items = getCartItems($userOrder['id']);
if ($cart_items->num_rows > 0){
    echo"
    <script>
    setTimeout(function () {
        notif.classList.add('cart-add-anim');
      }, 600);
    </script>
    ";
}
}
?>

