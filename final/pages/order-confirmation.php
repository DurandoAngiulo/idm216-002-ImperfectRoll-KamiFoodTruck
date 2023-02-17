<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Order Confirmation | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">
<style><?php 
include_once __DIR__ . '/../dist/styles/order-confirmation.css';
?></style>

<button onclick="window.location.href = '<?php echo site_url(); ?>/pages/home.php';"type="button" 
class="btn-close m-3 position-absolute top-0 end-0" aria-label="Close"></button>

<h2 class="logoFontSm text-center mt-3">KAMI</h2>
<div class="page mx-3">
   <h2 class="text-center mt-3 mb-3">Thank you!</h2>
   
   <p class="text-center">PICKUP TIME</p>
   <h1 class="text-center big-text mt-1 mb-3">12:30pm</h1>
   <p class="text-center">ORDER NUMBER</p>
   <h1 class="text-center big-text mt-1">123456</h1>

   <img class="image mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/ProgressTracker.png">
   <img class="image mx-auto d-block" src="<?php echo site_url(); ?>/dist/images/QR-code.png">
   <p class="text-center mx-4 mb-2">Present the QR code at KAMI to recieve your food!</p>

    <h3 class="align-self-end">Jervo's Order</h3>
    <hr class="heading-border mt-0 opacity-100">
    <div class="d-flex justify-content-between">
    <h2 class="">Total</h2>
    <h2 class="">$14.16</h2>
    </div>
   <div class="mb-3 d-flex flex-row justify-content-between align-items-start">
      <div class=" d-flex flex-row justify-content-start align-items-start">
         <img class="image-sm d-block me-3" src="<?php echo site_url(); ?>/dist/images/Bulgogi-numbered.png">
         <div>
            <h3 class="mt-2">Bibimbap</h3>
            <p>Medium spice</p>
         </div>
      </div>  
      <h3 class="mt-2">$10</h3> 
   </div>
   <div class="mb-3 pb-4 d-flex flex-row justify-content-between align-items-center">
      <div class=" d-flex flex-row justify-content-start align-items-center">
         <img class="image-sm d-block me-3" src="<?php echo site_url(); ?>/dist/images/Kimchi-numbered.png">
         <div>
            <h3 class="">Kimchi</h3>
         </div>
      </div>  
      <h3 class="">$2</h3> 
   </div>
</div>