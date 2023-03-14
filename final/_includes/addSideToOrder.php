<?php
include __DIR__ . '/../app.php';
if (!$_POST) {
    die('Unauthorized');
}
// Store $_POST data to variables for readability
$note_value = sanitize_value($_POST['note']);
$quantity_value =sanitize_value($_POST['quantity']);
$order_id_value = sanitize_value($_POST['order_id']);
$menu_id_value = sanitize_value($_POST['menu_id']);

$query = "INSERT INTO cart_item";
$query .=" (note, quantity, order_id, menu_id)";
$query .= " VALUES('{$note_value}', '{$quantity_value}', '{$order_id_value}', '{$menu_id_value}')";

$result = mysqli_query($db_connection, $query);

if ($result) {
   
    redirect_to('/index.php');
    echo("success");
} 

else {
    $error_message = 'Sorry there was an error in adding this item to cart: ' . mysqli_error($db_connection);
    
// die;
    redirect_to('/index/services?error=' . $error_message);
}