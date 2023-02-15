<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<body class="backgroundColor">


<div class="animation-content d-flex flex-column justify-content-around">
        <div class="left-squiggle align-self-start">
            <img src="../dist/images/red-squiggle.png" alt="Decorative squiggle">
        </div>
        <div>
            
    <div class="confirm-content w-50 m-auto d-flex flex-column align-items-center justify-content-center">
    <img src="../dist/images/noodle-bowl.png" alt="Ramen bowl">
    <p>Confirming...</p>
    <h1 class="text-center m-3"><a class="start-link" href="<?php echo site_url(); ?>/pages/order-confirmation.php">Advance to next screen</a></h1>
    </div>
        </div>
        <div class="left-squiggle align-self-end">
            <img src="../dist/images/yellow-squiggle.png" alt="Decorative squiggle">
        </div>
    </div>
<style><?php 
include_once __DIR__ . '/../dist/styles/confirm-animation.css';
?></style>