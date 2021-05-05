<?php
// Initialize the session
session_start();
 
// Include config file
include_once "config.php";

// Update login date/time to Users Table
$sql = "UPDATE sys_users SET logout_date = now() WHERE user_id=".$_SESSION["user_id"];
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>