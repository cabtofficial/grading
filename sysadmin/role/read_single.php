<?php
// include database and object files
include_once '../config/database.php';
include_once '../role/role.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$doctor = new User($db);

// set ID property of doctor to be edited
$doctor->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// read the details of doctor to be edited
$stmt = $doctor->role_single();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $doctor_arr=array(
        "user_id" => $row['user_id'],
        "username" => $row['username'],
        "sysadmin" => $row['sysadmin'],
        "dev" => $row['dev'],
        "admin" => $row['admin'],
        "teacher" => $row['teacher'],
        "student" => $row['student'],
        "acctng" => $row['acctng']
        //"start_date_active" => $row['start_date_active'],
        //"end_date_active" => $row['end_date_active']
    );
}
// make it json format
print_r(json_encode($doctor_arr));
?>