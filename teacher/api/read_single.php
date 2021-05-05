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
$faculty->username = isset($_GET['username']) ? $_GET['username'] : die();

// read the details of doctor to be edited
$stmt = $faculty->read_single();
$stmt->rowCount();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $faculty_arr=array(
        "faculty_num" => $row['faculty_num'],
        "last_name" => $row['last_name'],
        "first_name" => $row['first_name'],
        "designation" => $row['designation'],
        "status" => $row['status'],
        "gender" => $row['gender'],
        "middle_name" => $row['middle_name'],
        "birthday" => $row['birthday'],
        "sss" => $row['sss'],
        "tin" => $row['tin'],
        "pagibig" => $row['pagibig'],
        "philhealth" => $row['philhealth'],
        "degree" => $row['degree'],
        "major" => $row['major'],
        "emergency_contact" => $row['emergency_contact'],
        "address" => $row['address'],
        "contact_num" => $row['contact_num'],
        "birthday" => $row['birthday'],
        "civil" => $row['civil'],
        "schoology_pic" => $row['schoology_pic']
    );
}
// make it json format
print_r(json_encode($faculty_arr));
?>