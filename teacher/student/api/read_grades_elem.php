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
$student->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();

// query student
$stmt = $student->read_elem();
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
            "subject" => $subject,
            "first" => $first,
            "second" => $second,
            "third" => $third,
            "fourth" => $fourth,
            "final" => $final,
            "remarks" => $remarks
        );
        array_push($grades_arr["grades"], $grades_item);
    }
 
    echo json_encode($grades_arr["grades"]);
}
else{
    echo json_encode(array());
}

?>