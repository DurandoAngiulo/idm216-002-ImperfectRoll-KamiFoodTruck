<?php
    $site_url = site_url();
    $total_price=0;
while ($item = mysqli_fetch_array($cart_items)) {
    // var_dump($cart_items['id']);
    // die;
   
   $item_plus_quanity= $item['price']*$item['quantity'];
   $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
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
    <h3 class='pt-2'>$ {$item_plus_quanity}</h3>
</div>   
    
    <div class='d-flex justify-content-between mb-4'>
    <form action='{$site_url}/_includes/deleteCartItem.php' method='POST''>
    <input name='cart_item' value='{$item['cart_item_id']}' type='hidden'/>
    <button type='submit'>
    <p class='text-decoration-underline'>Delete</p>
    </button>
    </form>
    </a>
    <a href='#'>
    <p class='text-decoration-underline'>Edit Item</p>
    </a>
    </div>
    <div class='heading-border d-flex justify-content-between mb-3'></div>
        ";
        
        $total_price += $item_plus_quanity;
        $item_plus_quanity= 0;
    }?>
    