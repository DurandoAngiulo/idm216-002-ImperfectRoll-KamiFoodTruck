<?php
function site_url()
{
    global $APP_CONFIG;
    return $APP_CONFIG['site_url'];
}

function redirect_to($path)
{
    $full_url = site_url() . $path;
    // Bluehost doesn't like when you use header() to redirect so we'll use JS instead
    // header('Location: ' . $full_url);
    echo "<script>window.location = '$full_url';</script>";
    exit;
}
function project_root()
{
    return dirname(__FILE__);
}

function getFormattedDateTime()
{
    return  date('Y-m-d H:i:s');
}

function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM meals';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function sanitize_value($value)
{
    global $db_connection;
    return mysqli_real_escape_string($db_connection, $value);
}
?>