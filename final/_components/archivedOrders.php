<?php
    $site_url = site_url();
    $total_price=0;
while ($item = mysqli_fetch_array($order_items)) {
    // $item_plus_quanity= $item['price']*$item['quantity'];
    // $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
//     var_dump($item);
// die;
if($item['items_ordered']!= null){
    echo " 
<div class='container-b mx-auto py-3 px-4 mb-4 d-flex flex-column' >
        <h1 class='big-text text-center my-0'>Order #123456</h1>
        <p class='text-center mb-2'> Status: <strong class='green'>{$item['status']}</strong> </p>

        <div class='heading-border d-flex justify-content-between mb-3'></div>

        <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
            <p>PICKUP TIME</p>
            <p>12:30pm</p>
        </div>
        <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
            <p>Total</p>";
            echo"<p>$";echo"{$item['final_total']}</p>
        </div>";
        include __DIR__ . '/../_components/orderConfirmationItem.php';
        echo "
        <button onclick='' type='button' class='btn btn-primary p-2'>View QR Code</button>
    </div>
    ";
}}?>