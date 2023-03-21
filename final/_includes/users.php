

<?php 
function getUser() {
    $user = [
        'id'=> '1'
    ];
    return $user;
}


//return order array from database. only active orders(status active)
function createNewOrderByUserId($userId){
    global $db_connection;
    $query = "INSERT INTO orders";
    $query .="(user_id)";
    $query .= " VALUES('{$userId}')";
    // var_dump($query);
    // die;
    $result = mysqli_query($db_connection, $query);
    // die;
    if(!$result){
        //TODO create error message
    }
    return $result;
}

function getOrderByUserId($userId){
    global $db_connection;
    $query= "SELECT * FROM orders WHERE user_id = {$userId} AND status = 'active' LIMIT 1";
    $result = mysqli_query($db_connection, $query);
    if($result->num_rows === 1){
    return $result;
    } else{ 
        createNewOrderByUserId($userId);
        $query= "SELECT * FROM orders WHERE user_id = {$userId} AND status = 'active' LIMIT 1";
        $result = mysqli_query($db_connection, $query);
        return $result;
    }
}

