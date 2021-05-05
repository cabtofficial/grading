<?php
// include CABT database and object files
include_once '../config/database.php';
include_once '../api/student.php';

// get CABT database connection
$database = new Database();
$db = $database->getConnection();

// prepare student object
$student = new Student($db);

// set ID property of student to be edited
$student->username = isset($_GET['username']) ? $_GET['username'] : die();

// query student
$stmt = $student->read_absences_all();
$num = $stmt->rowCount();

// student
// check if more than 0 record found
if($num>0){
 
    // student array
    $grades_arr=array();
    $grades_arr["grades"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $grades_item=array(
            "name" => $name,
            "student_num" => $student_num,
            "grade_level" => $grade_level,
            "percent_absent" => $percent_absent,
            "absent_count" => $absent_count
        );
        array_push($grades_arr["grades"], $grades_item);
    }
 
    echo json_encode($grades_arr["grades"]);
}
else{
    echo json_encode(array());
}

?>