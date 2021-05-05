<?php
// Include config file
include_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$description = "";
//$user_role = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM sys_users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Submit description and user_role
    $description = trim($_POST["description"]);
    //$user_role = trim($_POST["user_role"]);

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO sys_users (username, password, description, enabled_flag, logout_date) VALUES (?, ?, ?, ?, NOW())";
        $enabled_flag = "Y";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_description, $enabled_flag);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_description = $description;
            //$param_user_role = $user_role;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_close($stmt);
                $sql = "SELECT user_id FROM sys_users WHERE username = ?";  

                if($stmt = mysqli_prepare($link, $sql)){
                    //echo "<script type='text/javascript'>alert('$result');</script>";
                    
                    // Bind variables to the prepared statement as parameters

                    mysqli_stmt_bind_param($stmt, "s", $param_username);   
                    
                    // Set parameters
                    $param_username = $username;
                    
                    if(mysqli_stmt_execute($stmt)){
                        // Prepare an insert statement
                        mysqli_stmt_store_result($stmt);
                        mysqli_stmt_bind_result($stmt, $user_id);
                        
                        if(mysqli_stmt_fetch($stmt)){
                        echo "<script type='text/javascript'>alert('$user_id');</script>";
                        $sql = "INSERT INTO sys_user_roles (user_id, resp_id, enabled_flag) VALUES 
                                (?, 1, 'N'),
                                (?, 2, 'N'),
                                (?, 3, 'N'),
                                (?, 4, 'N'),
                                (?, 5, 'N'),
                                (?, 6, 'N')
                                ";

                            if($stmt = mysqli_prepare($link, $sql)){
                                // Bind variables to the prepared statement as parameters
                                mysqli_stmt_bind_param($stmt, "ssssss", $user_id, $user_id, $user_id, $user_id, $user_id, $user_id);

                                // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                    // Redirect to login page
                                    header("location: ../sysadmin/dashboard.php");
                                } else{
                                    echo "Something went wrong. Please try again later.";
                                }
                                // Close statement
                                mysqli_stmt_close($stmt);
                            }
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
        
                    // Close statement
                    mysqli_stmt_close($stmt);
                }

            } else{
                echo "Something went wrong. Please try again later.";
                mysqli_stmt_close($stmt);
            }

            // Close statement
            //mysqli_stmt_close($stmt);
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
    <title>Create User Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="shortcut icon" type="image/x-icon" href="../objects/school.ico" />
    <style type="text/css">
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
            position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
            }
        img { opacity: 0.2;}
        .wrapper{ width: 350px; padding: 20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);}
        .form-control {text-align: center;}
    </style>
</head>
<body>
    <img src="../objects/school_logo.png" width="600" height="600">
    <div class="wrapper">
        <h2>Create User Account</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p><a href="../sysadmin/dashboard.php">Back to User List</a></p>
            <!--<p>Already have an account? <a href="login.php">Login here</a>.</p>-->
        </form>
    </div>    
</body>
</html>