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
$student->username = isset($_GET['username']) ? $_GET['username'] : die();

// read the details of doctor to be edited
$stmt = $student->read_sem_1();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $student_arr=array(
        "sem1_final" => $row['sem1_final']
    );
}
// make it json format
print_r(json_encode($student_arr));
?>