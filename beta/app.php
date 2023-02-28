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
$isPageThatStartsWithPages = strpos($_SERVER['REQUEST_URI'], '/pages') !== false; 
$isLoginPage= strpos($_SERVER['REQUEST_URI'], '/auth/login') !== false;
$sessionUserId = $_SESSION['user']['id'];
$user = get_user_by_id($sessionUserId);
if($isPageThatStartsWithPages) {
    echo 'tesbduebut';
    if (!is_user_logged_in()) {
       
        redirect_to('/auth/login.php');
    }
}else if($isLoginPage){
    if (is_user_logged_in()) {
       
        redirect_to('/pages/home.php');
    }

} else if(!isset($sessionUserId)){
    redirect_to('/auth/login.php');

} else if(!$user){
    redirect_to('/auth/login.php');
}



// TODO query databse and get user
$currentUserOrder = getOrderByUserId($user['id']);
$userOrder= mysqli_fetch_array($currentUserOrder);
