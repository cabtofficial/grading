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
$faculty->section = isset($_GET['section']) ? $_GET['section'] : die(); 

// read the details of doctor to be edited
$stmt = $faculty->read_subjects_shs_1();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $faculty_arr=array(
        "sub1" => $row['sub1'],
        "sub2" => $row['sub2'],
        "sub3" => $row['sub3'],
        "sub4" => $row['sub4'],
        "sub5" => $row['sub5'],
        "sub6" => $row['sub6'],
        "sub7" => $row['sub7'],
        "sub8" => $row['sub8'],
        "sub9" => $row['sub9'],
        "sub10" => $row['sub10']
    );
}
// make it json format
print_r(json_encode($faculty_arr));
?>