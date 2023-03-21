<?php
/**
 * This file is used store all the business
 * logic for the application.
 */
session_start();
// An array of values that will determine if you're working locally or on a production server.
// @link https://stackoverflow.com/questions/2053245/how-can-i-detect-if-the-user-is-on-localhost-in-php
$whitelist_host = ['127.0.0.1', '::1'];
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist_host)) {
    // You are in the Local environment. Pull in the correct .env file.
    if (file_exists(__DIR__ . '/vars/.env.local.php')) {
        include_once __DIR__ . '/vars/.env.local.php';
    } else {
        die('Please make sure you have a .env.local.php file');
    }
} else {
    // You are in the Production environment. Pull in the correct .env file.
    if (file_exists(__DIR__ . '/vars/.env.production.php')) {
        // holds global variables for the entire application
        include_once __DIR__ . '/vars/.env.production.php';
    } else {
        // if the file does not exist, throw an error
        die('Please make sure you have a .env.production.php file');
    }
}

// Include the database connection. Order matters and should always be first
include_once __DIR__ . '/_includes/database.php';
include_once __DIR__ . '/_includes/helper-functions.php';
include_once __DIR__ . '/_includes/user-functions.php';
include_once __DIR__ . '/_includes/users.php';
$isLoginPage= strpos($_SERVER['REQUEST_URI'], '/auth/login') !== false;
$sessionUserId = $_SESSION['user']['id'] ?? null;



// var_dump($sessionUserId, "session id");
$user = $sessionUserId ? get_user_by_id($sessionUserId) : create_guest_user();
// var_dump($user, "user");

$userOrder = null;
if ($user) {

$currentUserOrder = getOrderByUserId($user['id']);
$userOrder= mysqli_fetch_array($currentUserOrder);
}

