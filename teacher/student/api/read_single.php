<?php
// include database and object files
include_once '../config/database.php';
include_once '../api/student.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare student object
$student = new Student($db);

// set ID property of student to be edited
$student->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// read the details of doctor to be edited
$stmt = $student->read_single();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $student_arr=array(
        "lrn" => $row['lrn'],
        "student_num" => $row['student_num'],
        "name" => $row['name'],
        "status" => $row['status'],
        "email_address" => $row['email_address'],
        "level_section" => $row['level_section'],
        "emergency_contact" => $row['emergency_contact'],
        "contact_email" => $row['contact_email'],
        "adviser" => $row['adviser'],
        "schoology_pic" => $row['schoology_pic']
    );
}
// make it json format
print_r(json_encode($student_arr));
?>