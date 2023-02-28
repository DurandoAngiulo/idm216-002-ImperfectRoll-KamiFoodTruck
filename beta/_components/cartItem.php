<?php
    $site_url = site_url();
while ($item = mysqli_fetch_array($cart_items)) {
    
    echo " 
<div class='image-and-text d-flex justify-content-between'>
                <div class='cart-item-container'>
                    <div class='cart-image-cropper-container '>
                        <img class='cart-cropped-image' src='{$item['imageUrl']}'> 
                    </div>
                    <div class='order-amount'>
                        <p class='accent order-amount-number pt-1'>1</p>
                    </div> 
                </div>
                <div class='ms-3 pt-2'>
                    <h3>Bibimbap</h3>
                    <p>Medium Spice</p>
                </div>
            </div>
            <h3 class='pt-2'>$10</h3>
        </div>
        <h3 class='mb-4'>Add a Note</h3>
        <div class='input-group mb-3'>
            <textarea class='form-control modalBackground border-dark' placeholder='Add note...'></textarea>
        </div>
        <div class='d-flex justify-content-between mb-4'>
            <p class='text-decoration-underline'>Delete</p>
            <p class='text-decoration-underline'>Edit Item</p>
        </div>
        <div class='heading-border d-flex justify-content-between mb-3'></div>
        ";
    }?>