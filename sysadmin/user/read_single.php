<?php
// include database and object files
include_once '../config/database.php';
include_once '../user/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$user = new User($db);

// set ID property of doctor to be edited
$user->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// read the details of doctor to be edited
$stmt = $user->read_single();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "user_id" => $row['user_id'],
        "username" => $row['username'],
        "password" => password_hash($row['password'], PASSWORD_DEFAULT),
        "description" => $row['description'],
        "enabled_flag" => $row['enabled_flag'],
        "email" => $row['email'],
        "phone" => $row['phone'],
        "fb_id" => $row['fb_id']
        //"start_date_active" => $row['start_date_active'],
        //"end_date_active" => $row['end_date_active']
    );
}
// make it json format
print_r(json_encode($user_arr));
?>