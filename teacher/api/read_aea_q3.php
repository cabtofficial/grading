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
$faculty->section = isset($_GET['section']) ? $_GET['section'] : die(); 

// query student
$stmt = $faculty->read_aea_q3();
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
            "last_name" => $last_name,
            "first_name" => $first_name,
            "award" => $award,
            "subject" => $subject
        );
        array_push($grades_arr["grades"], $grades_item);
    }
 
    echo json_encode($grades_arr["grades"]);
}
else{
    echo json_encode(array());
}

?>