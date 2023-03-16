<?php
    $site_url = site_url();
    $total_price=0.00;
while ($item = mysqli_fetch_array($cart_items)) {
    $item_plus_quanity= $item['price']*$item['quantity'];
    $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
    echo " 
    <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
        <p>{$item['quantity']} {$item['name']}</p>
        <p>$ {$item_plus_quanity}</p>
    </div>
        ";
        $total_price += $item_plus_quanity;
        $item_plus_quanity= 0;
       
    }?>