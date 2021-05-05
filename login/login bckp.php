<?php
// Initialize the session
session_set_cookie_params(0);
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../login/forms.php");
    exit;
}
 
// Include config file
include_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, username, password, description, DATE_FORMAT(start_date_active,'%M. %Y'), enabled_flag, last_updated_by, fb_id, lrn, staff_num FROM sys_users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $user_id, $username, $hashed_password, $description, $start_date_active, $enabled_flag, $last_updated_by, $fb_id, $lrn, $staff_num);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Check if Account is Enabled -- CABTLM1
                            if($enabled_flag == "Y"){

                                $sql = "select * from sys_user_roles_v WHERE user_id=".$user_id;
                                if ($result=mysqli_query($link,$sql))
                                {
                                // Return the number of rows in result set
                                $rowcount=mysqli_num_rows($result);
                                }
                                
                                // Check if user has responsibility
                                if($rowcount>0){
                                    // Password is correct, so start a new session
                                    session_start();
                                
                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["user_id"] = $user_id;
                                    $_SESSION["username"] = $username; 
                                    $_SESSION["description"] = $description;
                                    $_SESSION["start_date_active"] = $start_date_active;
                                    $_SESSION["enabled_flag"] = $enabled_flag;
                                    $_SESSION["fb_id"] = $fb_id;
                                    $_SESSION["lrn"] = $lrn;
                                    $_SESSION["staff_num"] = $staff_num;
                                
                                    // Update login date/time to Users Table
                                    $sql = "UPDATE sys_users SET login_date = now(), logout_date = null WHERE user_id=".$user_id;
                                    if(mysqli_query($link, $sql)){
                                        echo "Records were updated successfully.";
                                    } else {
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }       

                                    if($user_id==$last_updated_by){
                                        // Redirect user to forms page
                                        header("location: ../login/forms.php");
                                    } else {
                                        // Redirect user to password reset page
                                        $GLOBALS['login_username'] = $username;
                                        header("location: ../login/password_reset.php");
                                    }  
                                }
                                else {
                                    $username_err =  "No Active Role. ". PHP_EOL ." Contact the System Administrator.";
                                    $username_err = nl2br($username_err);
                                }
                            }
                            else {
                                $username_err =  "User Account Disabled. ". PHP_EOL ." Contact the System Administrator.";
                                $username_err = nl2br($username_err);
                                //header("location: ../login/logout.php");
                            }
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../objects/school.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
            position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
            }
        img { opacity: 0.2;}
        .wrapper1{ width: 450px; padding: 20px; position: absolute; top: 30%; left: 50%; transform: translate(-50%,-50%);}
        .wrapper2{ width: 350px; padding: 20px; position: absolute; top: 55%; left: 50%; transform: translate(-50%,-50%);}
    </style>
</head>
<body>
    <img src="../objects/school_logo.png" width="600" height="600">
    <div class="wrapper1">
        <h2>School Administration System</h2>
    </div>
    <div class="wrapper2">
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" style="text-align:center;">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" style="text-align:center;">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <!--<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>-->
        </form>
    </div>
</body>
</html>