<?php
// Initialize the session
session_set_cookie_params(0);
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}

// include CABT database and object files
include_once '../config/database.php';
include_once '../sysadmin/user/user.php';
 
$user_resp_value = "";

// get CABT database connection
$database = new Database();
$db = $database->getConnection();

// prepare student object
$student = new User($db);

// set ID property of student to be edited
$student->user_id = $_SESSION["user_id"];

// query student
$cabt_stmt = $student->read_user_resps();
$cabt_num = $cabt_stmt->rowCount();

// student
// check if more than 0 record found
if($cabt_num>0){
 
    // student array
    $students_arr["students"]=array();
 
    while ($cabt_row = $cabt_stmt->fetch(PDO::FETCH_ASSOC)){
        extract($cabt_row);
        $student_item=array(
            "resp_id" => $resp_id,
            "user_responsibility" => $user_responsibility
        );
        array_push($students_arr["students"], $student_item);
    }

    $options = json_encode($students_arr["students"]);

}
else{
    echo json_encode(array());
}

// On Proceed
error_reporting(0);
ini_set('display_errors', 0);
if(isset($_POST['submit'])){
    try {
        foreach ($_POST['user_resp'] as $select)
        {   
            switch ($select) {
                case 1:
                    $_SESSION["user_role"] = 'System Administrator';
                    header("location: ../sysadmin/dashboard.php");
                    break;
                case 2:
                    $_SESSION["user_role"] = 'Developer';
                    header("location: ../sysadmin/index.php");
                    break;
                case 3:
                    $_SESSION["user_role"] = 'School Administrator';
                    header("location: ../admin/index.php?username=".$_SESSION["username"]);
                    break;
                case 4:
                    $_SESSION["user_role"] = 'Teacher';
                    if($_SESSION["user_id"]==244||$_SESSION["user_id"]==241){
                        header("location: ../teacher/profile_shs.php?username=".$_SESSION["username"]);                       
                    } else if ($_SESSION["user_id"]==233||$_SESSION["user_id"]==237||$_SESSION["user_id"]==249||$_SESSION["user_id"]==243){
                        header("location: ../teacher/profile_jhs.php?username=".$_SESSION["username"]);
                    } else {
                        header("location: ../teacher/profile_elem.php?username=".$_SESSION["username"]);
                    }
                    break;
                case 5:
                    $_SESSION["user_role"] = 'Junior High School';
                    header("location: ../student/index_jhs.php?username=".$_SESSION["username"]);
                    break;
                case 6:
                    $_SESSION["user_role"] = 'Accounting';
                    header("location: ../sysadmin/index.php");
                    break;
                case 7:
                    $_SESSION["user_role"] = 'Elementary';
                    header("location: ../student/index_elem.php?username=".$_SESSION["username"]);
                    break;
                case 8:
                    $_SESSION["user_role"] = 'Senior High School';
                    header("location: ../student/index_shs.php?username=".$_SESSION["username"]);
                    break;
                default:
                    echo "Nothing Selected.";
            }
        }
    }
    catch (exception $e) {
        echo "Nothing Selected.";
    }
    finally {
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose Role</title>
    <link rel="shortcut icon" type="image/x-icon" href="../objects/school.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
            position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
            }
        img { opacity: 0.2;}
        .wrapper1{ width: 450px; padding: 20px; position: absolute; top: 30%; left: 50%; transform: translate(-50%,-50%);}
        .wrapper2{ width: 350px; padding: 20px; position: absolute; top: 57%; left: 50%; transform: translate(-50%,-50%);}
    </style>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body onload="populateSelect()">
            
    <img src="../objects/school_logo.png" width="600" height="600">
    <div class="wrapper1">
        <h2>CABT Card Viewing System</h2>
    </div>
    <div class="wrapper2">
        <p>Select role available below:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
            <select name="user_resp[]" id="sel" onchange="show(this)" multiple="multiple" style="width: 250px; height: 150px;"></select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Proceed" style="text-align:center;font-size:14px;">
            </div>
        <p><a href="../login/logout.php">Logout</a></p>
        </form>
    </div>    

<script>
    function populateSelect() {
        // THE JSON ARRAY.
        var user_resp_value = <?php echo $options?>;

        var ele = document.getElementById('sel');
        for (var i = 0; i < user_resp_value.length; i++) {
            // POPULATE SELECT ELEMENT WITH JSON.
            ele.innerHTML = ele.innerHTML +
                '<option value="' + user_resp_value[i]['resp_id'] + '">' + user_resp_value[i]['user_responsibility'] + '</option>';
        }
    }

</script>

</body>
</html>

