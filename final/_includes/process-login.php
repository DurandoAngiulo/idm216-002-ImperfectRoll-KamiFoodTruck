<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$email = sanitize_value($_POST['email']);
$password = sanitize_value($_POST['password']);
$newUser = get_user_by_email_and_password($email, $password);


// Check there are no errors with our SQL statement
if ($newUser) {
    
    TODO:
    //update current user order, replace id with newuser id 
    $query = "UPDATE orders SET user_id = {$newUser['id']} WHERE id = {$userOrder['id']}";
    $result = mysqli_query($db_connection, $query);
    delete_user_by_id($user['id']);
    $_SESSION['user'] = [
        'id' => $newUser['id'],
    ];
   
    redirect_to('/checkout.php');   
} else {
    $error_message = 'User was not logged in: ' . mysqli_error($db_connection);
    redirect_to('/auth/login.php?error=' . $error_message);
}