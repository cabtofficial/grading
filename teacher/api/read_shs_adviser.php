<?php
// include database and object files
include_once '../config/database.php';
include_once '../api/faculty.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare student object
$faculty = new Faculty($db);

// set ID property of student to be edited
$faculty->username = isset($_GET['username']) ? $_GET['username'] : die();

// read the details of doctor to be edited
$stmt = $faculty->read_shs_adviser();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $faculty_arr=array(
        "section1" => $row['section1'],
        "section2" => $row['section2']
    );
}
// make it json format
print_r(json_encode($faculty_arr));
?>