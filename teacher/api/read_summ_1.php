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
$stmt = $faculty->read_summ_1();
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
            "sub1" => $sub1,
            "sub2" => $sub2,
            "sub3" => $sub3,
            "sub4" => $sub4,
            "sub5" => $sub5,
            "sub6" => $sub6,
            "sub7" => $sub7,
            "sub8" => $sub8,
            "sub9" => $sub9,
            "sub10" => $sub10,
            "sub11" => $sub11,
            "sub12" => $sub12,
            "sub13" => $sub13,
            "sub14" => $sub14,
            "unrounded" => $unrounded,
            "rounded" => $rounded,
            "award" => $award
        );
        array_push($grades_arr["grades"], $grades_item);
    }
 
    echo json_encode($grades_arr["grades"]);
}
else{
    echo json_encode(array());
}

?>