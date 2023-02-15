<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Intro | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-kami.php';
?>
<style><?php 
include_once __DIR__ . '/../dist/styles/intro.css';
?></style>

<body class="backgroundColor">
    <div class="animation-content d-flex flex-column justify-content-around">
        <div class="left-squiggle align-self-start">
            <img src="../dist/images/red-squiggle.png" alt="Decorative squiggle">
        </div>
        <div>
            <div class="h-20 kami-spin">
                <img src="../dist/images/kami-logo.png" alt="Kami logo">
            </div>
                <h1 class="text-center m-3"><a class="start-link" href="<?php echo site_url(); ?>/pages/home.php">Start Demo</a></h1>
        </div>
        <div class="left-squiggle align-self-end">
            <img src="../dist/images/yellow-squiggle.png" alt="Decorative squiggle">
        </div>
    </div>
