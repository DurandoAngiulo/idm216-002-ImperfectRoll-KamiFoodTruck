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
<?php
    $site_url = site_url();
while ($item = mysqli_fetch_array($cart_items)) {
    
    echo " 

<div class='menu-item-container mb-3 d-flex'>
        <img class='menu-item-image' src='{$item['imageUrl']}'>
        <div class='menu-item-content-container pt-3 px-2 pb-2 d-flex flex-wrap justify-content-end'>
            <div class='d-flex justify-content-between mb-2 w-100'>
                <h3>{$item['name']}</h3>
                <h3 class='w-50 text-end'>$ {$item['price']}</h3>
            </div>
            <p class='w-100'>{$item['description']}</p>
            <div class='d-flex justify-content-end button-container'>
                <div  data-bs-toggle='modal' data-bs-target='#selectionModal-{$item['id']}' class='addButton'>
                    <p class='text-light display-6 align-self-center d-inline-block pt-1'>+</p>
                </div>
            </div> 
        </div>
    </div>
    ";
}?>
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
        <h3 class="mb-4">Add a Note</h3>
        <div class="input-group mb-3">
            <textarea class="form-control modalBackground border-dark" placeholder="Add note..."></textarea>
        </div>
        <div class="d-flex justify-content-between mb-4">
            <p class="text-decoration-underline">Delete</p>
            <p class="text-decoration-underline">Edit Item</p>
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
                        <p class="accent order-amount-number pt-1">1</p>
                    </div> 
                </div>
                <div class="ms-3 pt-2">
                    <h3>Kimchi</h3>
                </div>
            </div>
            <h3 class="pt-2">$2</h3>
        </div>
        <h3 class="mb-4">Add a Note</h3>
        <div class="input-group mb-3">
            <textarea class="form-control modalBackground border-dark" placeholder="Add note..."></textarea>
        </div>
        <div class="d-flex justify-content-between mb-4">
            <p class="text-decoration-underline">Delete</p>
            <p class="text-decoration-underline">Edit Item</p>
        </div>
        <div class="heading-border d-flex justify-content-between mb-3"></div>
        <h3 class="mb-4 text-center">Want to Include any utensils?</h3>
            <div class="d-flex justify-content-between mb-4">
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/chopsticks.png">
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/fork.png">
                </div>
                <div class="protein-container d-flex justify-content-center align-items-center">
                    <img class="" src="<?php echo site_url(); ?>/dist/images/napkin.png">
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