<?php
// Credentials for the database connection coming from our .env file
$db_host = $APP_CONFIG['database_host'];
$db_user = $APP_CONFIG['database_user'];
$db_pass = $APP_CONFIG['database_pass'];
$db_name = $APP_CONFIG['database_name'];

// Create a database connection with correct credentials
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection is good with no errors
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
      mysqli_connect_error() .
      ' (' . mysqli_connect_errno() . ')'
    );
}
?>