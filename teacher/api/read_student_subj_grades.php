<?php
// include CABT database and object files
include_once '../config/database.php';
include_once '../api/faculty.php';

// get CABT database connection
$database = new Database();
$db = $database->getConnection();

// prepare student object
$faculty = new Faculty($db);

// set ID property of student to be edited
$faculty->username = isset($_GET['username']) ? $_GET['username'] : die();

// query student
$stmt = $faculty->read_student_subj_grades();
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
            "subject_id" => $subject_id,
            "subject" => $subject,
            "name" => $name,
            "first" => $first,
            "second" => $second,
            "third" => $third,
            "fourth" => $fourth,
            "final" => $final
        );
        array_push($grades_arr["grades"], $grades_item);
    }
 
    echo json_encode($grades_arr["grades"]);
}
else{
    echo json_encode(array());
}

?>