<?php
include __DIR__ . '/../app.php';
if (!$_POST) {
    var_dump($_POST);
    die('Unauthorized');
}
// Store $_POST data to variables for readability
$note_value = sanitize_value($_POST['note']);
$spice_level_value = sanitize_value($_POST['spice_level']);
$protein_value = sanitize_value($_POST['protein']);
$order_id_value = sanitize_value($_POST['order_id']);
$menu_id_value = sanitize_value($_POST['menu_id']);
// TODO: validate form request
// Create a SQL statement to insert the data into the database
$query = "INSERT INTO cart_item";
$query .=" (note, spice_level, protein, order_id, menu_id)";
$query .= " VALUES('{$note_value}', '{$spice_level_value}', '{$protein_value}', '{$order_id_value}', '{$menu_id_value}')";

var_dump($query);
// Run the SQL statement
$result = mysqli_query($db_connection, $query);
var_dump($result);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/pages/home.php');
    echo("success");
} 

else {
    $error_message = 'Sorry there was an error creating the user: ' . mysqli_error($db_connection);
    
// die;
    redirect_to('/pages/services?error=' . $error_message);
}