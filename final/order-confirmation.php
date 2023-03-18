<?php
include_once __DIR__ . '/app.php';
$page_title = 'Order Confirmation | KAMI Food Truck';
include_once __DIR__ . '/_components/header-kami.php';
$order_items = getOrderItems($user['id']);
?>
<body class="backgroundColor">

<div class="container">
<button onclick="window.location.href = '<?php echo site_url(); ?>/index.php';"type="button" 
class="btn-close m-3 position-absolute top-0" aria-label="Close"></button>

<h2 class="logoFontSm text-center mt-3">KAMI</h2>
<div class="page mx-3">
   <h2 class="text-center mt-3 mb-3">Thank you!</h2>
   <?php include __DIR__ . '/_components/archivedOrders.php'; ?>
   
</div>
</div>