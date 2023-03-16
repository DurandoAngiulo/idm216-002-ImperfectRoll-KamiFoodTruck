<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
?>
<body class="backgroundColor">
<?php 
include_once __DIR__ . '/_components/navbar-mobile.php';
?>
<?php 
$query ='SELECT * FROM menu WHERE category = "side" ORDER BY name';
$result = mysqli_query($db_connection, $query);


?>
   <div class="container">
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
            <img class="tpIcon me-2" src="<?php echo site_url(); ?>/dist/images/icons/stars.png">
            <p class="align-self-center pt-1 pe-2">Today's Pick</p>
        </div>
        <div class="tp-name d-flex justify-content-between p-2 pb-1">
            <p class="ms-2">Tteok Bok Ki</p>
            <p class="me-2">$8</p>
        </div>
    </div>
    <!-- food slider -->
    <div class="d-flex justify-content-center mb-3">
        <div class="foodType">
            <div class="foodCategories">
                <p class="foodTypeOption meals meals-js">Meals</p>
                <p class="foodTypeOption sides sides-js">Sides</p>
                <p class="foodTypeOption drinks drinks-js">Drinks</p>
            </div>
            <div class="foodTypeUnderbar justify-content-center">
            <div class="foodTypeSlider"></div>
            </div>
        </div>
    </div>
    <!-- menu items -->
    <?php include __DIR__ . '/_components/sideItem.php'; ?>
   </div>

   <script>

const slider = document.querySelector('.foodTypeSlider');
const meals = document.querySelector('.meals-js');
const sides = document.querySelector('.sides-js');
const drinks = document.querySelector('.drinks-js');

    //Food type slider functions
meals.addEventListener('mouseup', function(){
    slider.classList.add('sliderPos4');

    setTimeout(function(){
    console.log("function ran");
    window.location = "<?php echo site_url(); ?>/index.php"
    }, 250);


});
drinks.addEventListener('mouseup', function(){
    slider.classList.add('sliderPos2');

  setTimeout(function(){
    console.log("function ran");
    window.location = "<?php echo site_url(); ?>/home-drinks.php"
    }, 250);

});
</script>

<div class="py-3"></div>

    <?php include_once __DIR__ . '/_components/footer.php'; ?>
</div>