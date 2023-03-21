<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}


// Store $_POST data to variables for readability
$first_name_value = sanitize_value($_POST['first_name']);
$last_name_value = sanitize_value($_POST['last_name']);
$email_value = sanitize_value($_POST['email']);
$password_value = sanitize_value($_POST['password']);
$password_2_value = sanitize_value($_POST['password2']);

if ($password_value != $password_2_value) {
    $error_message = 'Password does not match';
    redirect_to('/auth/login?error=' . $error_message);

}

$result = add_user($first_name_value, $last_name_value, $email_value, $password_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/auth/login.php');
} else {
    $error_message = 'Sorry there was an error creating the user ' . mysqli_error($db_connection);
    redirect_to('/auth/login.php?error=' . $error_message);
}
