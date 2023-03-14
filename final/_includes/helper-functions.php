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

function is_user_logged_in()
{
    
    return isset($_SESSION['user']);
}

function getCartItems($orderId){
    global $db_connection;
    $query ="SELECT * FROM cart_item INNER JOIN menu ON cart_item.menu_id = menu.id 
    WHERE cart_item.order_id = '{$orderId}'";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function getOrderItems($userId){
    global $db_connection;
    $query ="SELECT 
    orders.id, 
    orders.user_id, 
    MAX(orders.status) AS status, 
    orders.final_total, 
    GROUP_CONCAT(DISTINCT CONCAT(menu.name, ' (', cart_item.quantity, ')', ' - $', menu.price)) AS items_ordered
    FROM orders 
    LEFT JOIN cart_item ON orders.id = cart_item.order_id 
    LEFT JOIN menu ON cart_item.menu_id = menu.id
    WHERE orders.user_id = '{$userId}' AND orders.status = 'completed'
    GROUP BY orders.id;";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>