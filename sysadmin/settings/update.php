<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../settings/settings.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$settings = new Settings($db);
 
// set doctor property values
$settings->name = $_POST['name'];
$settings->initials = $_POST['initials'];
$settings->website = $_POST['website'];
$settings->color = $_POST['color'];
$settings->scheme = $_POST['scheme'];
$settings->last_updated_by = $_POST['last_updated_by'];
 
// create the doctor
if($settings->update()){
    $settings_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $settings_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($settings_arr));

?>