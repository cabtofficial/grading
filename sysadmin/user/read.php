<?php
// include CABT database and object files
include_once '../config/database.php';
include_once '../user/user.php';
 
// get CABT database connection
$database = new Database();
$db = $database->getConnection();

// prepare student object
$user = new User($db);
 
// query student
$stmt = $user->read();
$num = $stmt->rowCount();

// student
// check if more than 0 record found
if($num>0){
 
    // student array
    $users_arr=array();
    $users_arr["users"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $item=array(
            "user_id" => $user_id,
            "username" => $username,
            "full_name" => $full_name,
            "start_date_active" => $start_date_active,
            "status" => $status
            //"created" => $created
        );
        array_push($users_arr["users"], $item);
    }
 
    echo json_encode($users_arr["users"]);
}
else{
    echo json_encode(array());
}

?>