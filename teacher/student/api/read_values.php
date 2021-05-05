
<?php
// include CABT database and object files
include_once '../config/database.php';
include_once '../api/student.php';

// get CABT database connection
$database = new Database();
$db = $database->getConnection();

// prepare student object
$values = new Student($db);

// set ID property of student to be edited
$values->lrn = isset($_GET['lrn']) ? $_GET['lrn'] : die();

// query student
$stmt = $values->read_values();
$num = $stmt->rowCount();

// student
// check if more than 0 record found
if($num>0){
 
    // student array
    $values_arr=array();
    $values_arr["values"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $item=array(
            "lrn" => $lrn
            //"first_a" => $first_a,
            //"second_a" => $second_a
            //"third_a" => $third_a,
            //"fourth_a" => $fourth_a,
            //"final_a" => $final_a
        );
        array_push($values_arr["values"], $item);
    }
 
    echo json_encode($values_arr["values"]);
}
else{
    echo json_encode(array());
}

?>