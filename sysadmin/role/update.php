<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../role/role.php';
ini_set('display_errors', 0);

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$doctor = new User($db);
 
// set doctor property values
$doctor->user_id = $_POST['user_id'];
 
// Update Role
if ($_POST['sysadmin']!=''){

    $doctor->sysadmin = $_POST['sysadmin'];

	if($doctor->sysadmin_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
if ($_POST['dev']!=''){

    $doctor->dev = $_POST['dev'];

	if($doctor->dev_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
if ($_POST['admin']!=''){

    $doctor->admin = $_POST['admin'];

	if($doctor->admin_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
if ($_POST['teacher']!=''){

    $doctor->teacher = $_POST['teacher'];

	if($doctor->teacher_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
if ($_POST['student']!=''){

    $doctor->student = $_POST['student'];

	if($doctor->student_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
if ($_POST['acctng']!=''){

    $doctor->acctng = $_POST['acctng'];

	if($doctor->acctng_update()){
	    $doctor_arr=array(
	        "status" => true,
	        "message" => "Successfully Updated!"
	    );
	}
	else{
	    $doctor_arr=array(
	        "status" => false,
	        "message" => "Email already exists!"
	    );
	}
	print_r(json_encode($doctor_arr));
}
?>