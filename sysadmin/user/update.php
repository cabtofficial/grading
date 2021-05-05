<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../user/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$user = new User($db);
 
// set doctor property values
$user->user_id = $_POST['user_id'];
$user->username = $_POST['username'];
$user->description = $_POST['description'];
$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$user->phone = $_POST['phone'];
$user->enabled_flag = $_POST['enabled_flag'];
$user->email = $_POST['email'];
$user->last_updated_by = $_POST['last_updated_by'];
$user->fb_id = $_POST['fb_id'];
 
// create the doctor
if($user->update()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($user_arr));
?>