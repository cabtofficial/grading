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
$student->lrn = isset($_GET['lrn']) ? $_GET['lrn'] : die();

// read the details of doctor to be edited
$stmt = $student->read_final_grade();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $student_arr=array(
        "final" => $row['final'],
        "remarks" => $row['remarks']
    );
}
// make it json format
print_r(json_encode($student_arr));
?>