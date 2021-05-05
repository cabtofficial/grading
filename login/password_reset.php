<?php
// Initialize the session
session_set_cookie_params(0);
session_start();
 
// Include config file
include_once "config.php";
 
// Define variables and initialize with empty values
$old_password = $new_password = $confirm_new_password = $username = "";
$old_password_err = $new_password_err = $confirm_new_password_err = $username_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    

    // Check if old password is empty
    if(empty(trim($_POST["old_password"]))){
        $old_password_err = "Please enter old password.";
    } else{
        $old_password = trim($_POST["old_password"]);
    }
    
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter a new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Check if confirm new password is empty
    if(empty(trim($_POST["confirm_new_password"]))){
        $confirm_new_password_err = "Please enter confirm your new password.";
    } else{
        $confirm_new_password = trim($_POST["confirm_new_password"]);
    }

    // Validate confirm new password
    if(empty(trim($_POST["confirm_new_password"]))){
        $confirm_new_password_err = "Please confirm new password.";     
    } else{
        $confirm_new_password = trim($_POST["confirm_new_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_new_password)){
            $confirm_new_password_err = "Passwords did not match.";
        }
    }

    // Validate credentials
    if(empty($old_password_err) && empty($new_password_err) && empty($confirm_new_password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, username, password, description, DATE_FORMAT(start_date_active,'%M. %Y'), enabled_flag, last_updated_by FROM sys_users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            $param_new_password = password_hash($new_password, PASSWORD_DEFAULT);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $user_id, $username, $hashed_password, $description, $start_date_active, $enabled_flag, $last_updated_by);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($old_password, $hashed_password)){
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
                                
                                    // Update login date/time to Users Table
                                    $sql = "UPDATE sys_users SET login_date = now(), logout_date = null, password='".$param_new_password."', last_updated_by=".$user_id." WHERE user_id=".$user_id;
                                    if(mysqli_query($link, $sql)){
                                        echo "Records were updated successfully.";
                                    } else {
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }                      

                                    // Redirect user to welcome page
                                    header("location: ../login/forms.php");
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
        .wrapper1{ width: 350px; padding: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);}
    </style>
</head>
<body>
    <img src="../objects/school_logo.png" width="600" height="600">
    <div class="wrapper1">
        <h2>Change Password</h2>
        <p>Password has recently been reset.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $_SESSION["username"]; ?>" readonly style="text-align:center;">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($old_password_err)) ? 'has-error' : ''; ?>">
                <label>Old Password</label>
                <input type="password" name="old_password" class="form-control" style="text-align:center;">
                <span class="help-block"><?php echo $old_password_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" style="text-align:center;">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($confirm_new_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm New Password</label>
                <input type="password" name="confirm_new_password" class="form-control" style="text-align:center;">
                <span class="help-block"><?php echo $confirm_new_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <!--<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>-->
            <p><a href="../login/logout.php">Logout</a></p>
        </form>
    </div>    
</body>
</html>