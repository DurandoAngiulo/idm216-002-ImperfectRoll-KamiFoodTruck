<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
?>
<body class="backgroundColor">


<div class="animation-content d-flex flex-column justify-content-around">
        <div class="left-squiggle align-self-start">
            <img src="dist/images/red-squiggle.png" alt="Decorative squiggle">
        </div>
        <div>
            
    <div class="confirm-content w-50 m-auto d-flex flex-column align-items-center justify-content-center">
        <div class="noodle-animation">
            <img class="noodle-pull" src="<?php echo site_url(); ?>/dist/images/noodle-pull.png" alt="Ramen chopsticks">
            <img class="noodle-bowl" src="<?php echo site_url(); ?>/dist/images/ramen-bowl.png" alt="Ramen bowl">
        </div>
    <p>Confirming...</p>
    </div>
        </div>
        <div class="left-squiggle align-self-end">
            <img src="dist/images/yellow-squiggle.png" alt="Decorative squiggle">
        </div>
    </div>
<script>
const object = document.querySelector('.kami-spin');

setTimeout(function(){
    console.log("function ran");
    window.location = "<?php echo site_url(); ?>/order-confirmation.php"
}, 3000);

</script>