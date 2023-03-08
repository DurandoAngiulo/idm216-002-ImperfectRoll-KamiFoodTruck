<?php

include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}
$order_id_value = sanitize_value($_POST['order_id']);
$final_price_value = sanitize_value($_POST['final_price']);

    $query = "UPDATE orders SET status = 'archived', final_total = $final_price_value WHERE id = $order_id_value";
    $result = mysqli_query($db_connection, $query);
    if ($result){
        redirect_to('/confirm-animation.php');   
    } else{
        redirect_to('/checkout.php');
    }
    

?>