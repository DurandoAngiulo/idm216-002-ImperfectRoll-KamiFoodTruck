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
?>