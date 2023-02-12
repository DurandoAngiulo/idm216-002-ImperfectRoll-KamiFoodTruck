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
            <p class="me-2">8$</p>
        </div>
    </div>
    <!-- food slider -->
    <div class="d-flex justify-content-center mb-3">
        <div class="foodType">
            <div class="foodCategories">
                <p class="foodTypeOption meals">Meals</p>
                <p class="foodTypeOption sides">Sides</p>
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
                <h3>10$</h3>
            </div>
            <p>Rice with various vegetables and protein.</p>
            <div class="d-flex justify-content-end mt-2">
                <div class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div> 
        </div>
    </div>
    <div class="menu-item-container mb-3 d-flex">
        <img class="menu-item-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bibimbap_z5qfu8.jpg">
        <div class="menu-item-content-container pt-3 px-2">
            <div class="d-flex justify-content-between mb-2">
                <h3>Bibimbap</h3>
                <h3>10$</h3>
            </div>
            <p>Rice with various vegetables and protein.</p>
            <div class="d-flex justify-content-end mt-2">
                <div class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-container mb-3 d-flex">
        <img class="menu-item-image" src="https://res.cloudinary.com/dsysuymw2/image/upload/v1676062783/idm216/bibimbap_z5qfu8.jpg">
        <div class="menu-item-content-container pt-3 px-2">
            <div class="d-flex justify-content-between mb-2">
                <h3>Bibimbap</h3>
                <h3>10$</h3>
            </div>
            <p>Rice with various vegetables and protein.</p>
            <div class="d-flex justify-content-end mt-2">
                <div class="addButton">
                    <p class="text-light display-6 align-self-center d-inline-block pt-1">+</p>
                </div>
            </div>
        </div>
    </div>
   </div>
    

    <?php include_once __DIR__ . '/../_components/footer.php';
?>