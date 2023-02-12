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

    <!-- wrapper -->
   <h1 class="logoFont text-center mt-5 mb-3">KAMI</h1>
   <div class=" box1 sb8">
    <h3>The wait time is <span class="accent">13 Minutes</span></h3>
   </div>
    

    <?php include_once __DIR__ . '/../_components/footer.php';
?>