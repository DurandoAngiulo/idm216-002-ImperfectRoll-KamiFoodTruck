<?php
    $site_url = site_url();
    $total_price=0;
while ($item = mysqli_fetch_array($cart_items)) {
    echo " 
    <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
        <p>{$item['quantity']} {$item['name']}</p>
        <p>$ {$item['price']}</p>
    </div>
        ";
        $total_price += $item['price'];
    }?>