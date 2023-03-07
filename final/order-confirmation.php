<?php
include_once __DIR__ . '/app.php';
$page_title = 'Order Confirmation | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
?>
<body class="backgroundColor">


<button onclick="window.location.href = '<?php echo site_url(); ?>/index.php';"type="button" 
class="btn-close m-3 position-absolute top-0 end-0" aria-label="Close"></button>

<h2 class="logoFontSm text-center mt-3">KAMI</h2>
<div class="page mx-3">
   <h2 class="text-center mt-3 mb-3">Thank you!</h2>
   
   <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h1 class="big-text text-center my-0">Order #123456</h1>
        <p class="text-center mb-2"> Status: <strong class="green">READY</strong> </p>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>PICKUP TIME</p>
            <p>12:30pm</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>Total</p>
            <p>$14.16</p>
        </div>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>1 Bibimbap</p>
            <p>$10</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>2 Kimchi</p>
            <p>$2</p>
        </div>
        <button onclick="" type="button" class="btn btn-primary p-2">View QR Code</button>

    </div>

    <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h1 class="big-text text-center my-0">Order #008392</h1>
        <p class="text-center mb-2"> Status: <strong>COMPLETED</strong> </p>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>PICKUP TIME</p>
            <p>1:06pm</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>Total</p>
            <p>$17</p>
        </div>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>1 Kimchi Fried Rice</p>
            <p>$10</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>1 Fried Dumplings</p>
            <p>$5</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>1 Instant Hot Coffee</p>
            <p>$3</p>
        </div>
        <button onclick="window.location.href = '<?php echo site_url(); ?>/pages/cart.php';" type="button" class=" btn btn-outline-primary p-2">Order Again</button>

    </div>

    <div class="container-b mx-auto py-3 px-4 mb-4 d-flex flex-column" >
        <h1 class="big-text text-center my-0">Order #000544</h1>
        <p class="text-center mb-2"> Status: <strong>COMPLETED</strong> </p>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>PICKUP TIME</p>
            <p>2:16pm</p>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>Total</p>
            <p>$8</p>
        </div>

        <div class="heading-border d-flex justify-content-between mb-3"></div>

        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
            <p>1 Kimchi Fried Rice</p>
            <p>$8</p>
        </div>

        <button onclick="window.location.href = '<?php echo site_url(); ?>/pages/cart.php';" type="button" class=" btn btn-outline-primary p-2">Order Again</button>
      </div>
</div>