

<?php 
//TODO:create a function called getUser() (make dynamic)
function getUser() {
    $user = [
        'id'=> '1'
    ];
    return $user;
}

//TODO:
//return order array from database. only active orders(status active)
function createNewOrderByUserId($userId){
    global $db_connection;
    $query = "INSERT INTO orders";
    $query .="(user_id)";
    $query .= "VALUES('{$userId}')";
    $result = mysqli_query($db_connection, $query);
    if(!$result){
        //TODO create error message
    }
    return $result;
}

function getOrderByUserId($userId){
    global $db_connection;
    $query= "SELECT * FROM orders WHERE user_id = {$userId} AND status = 'active' LIMIT 1";
    $result = mysqli_query($db_connection, $query);
    var_dump($result);
    if($result->num_rows === 1){
    return mysqli_fetch_assoc($result);
    } else{ 
        return createNewOrderByUserId($userId);
        

    }
//first check if current user. has an order. if yes,then return that order. other
//if not create a new order. pass in user id. return order
}

//TODO:get cart by order id. 





//TODO: get cart count