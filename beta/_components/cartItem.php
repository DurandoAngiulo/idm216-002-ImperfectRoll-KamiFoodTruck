<?php
    $site_url = site_url();
while ($item = mysqli_fetch_array($cart_items)) {
    
    echo " 
<div class='d-flex justify-content-between mb-4'>    
    <div class='image-and-text d-flex justify-content-between'>
        <div class='cart-item-container'>
            <div class='cart-image-cropper-container '>
                <img class='cart-cropped-image' src='{$item['imageUrl']}'> 
            </div>
            <div class='order-amount'>
                <p class='accent order-amount-number pt-1'>{$item['quantity']}</p>
            </div> 
        </div>
        <div class='ms-3 pt-2'>
            <h3>{$item['name']}</h3>
            <p>{$item['spice_level']}</p>
        </div>
    </div>
    <h3 class='pt-2'>$ {$item['price']}</h3>
</div>   
    
    <div class='d-flex justify-content-between mb-4'>
    <a href='#'>
    <p class='text-decoration-underline'>Delete</p>
    </a>
    <a href='#'>
    <p class='text-decoration-underline'>Edit Item</p>
    </a>
    </div>
    <div class='heading-border d-flex justify-content-between mb-3'></div>
        ";
    }?>
    