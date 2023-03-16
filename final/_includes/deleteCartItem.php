<?php
include __DIR__ . '/../app.php';
if (!$_POST) {
    die('Unauthorized');
}
$cart_item_id = sanitize_value($_POST['cart_item']);
// var_dump($cart_item_id);
// die;
global $db_connection;
    $query = "DELETE FROM cart_item WHERE id = '{$cart_item_id}'";
    // var_dump($query);
    // die;
    $result = mysqli_query($db_connection, $query);
    redirect_to('/cart.php');
    echo("success");
// else {
//     $error_message = 'Sorry there was an error in adding this item to cart: ' . mysqli_error($db_connection);
    
// // die;
//     redirect_to('/index/services?error=' . $error_message);
// }