<?php
// include database and object files
include_once '../config/database.php';
include_once '../settings/settings.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$settings = new Settings($db);

// set ID property of doctor to be edited
//$user->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// read the details of doctor to be edited
$stmt = $settings->read_settings();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "name" => $row['name'],
        "initials" => $row['initials'],
        "website" => $row['website'],
        "color" => $row['color'],
        "scheme" => $row['scheme']
    );
}
// make it json format
print_r(json_encode($user_arr));
?>