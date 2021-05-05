<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "sys_users";
    private $read_table = "sys_users_v";
    private $role_table = "sys_user_resps_vl";
    private $role_update = "sys_user_roles";
 
    // object properties
    public $user_id;
    public $username;
    public $password;
    public $description;
    public $phone;
    public $enabled_flag;
    public $email;
    public $start_date_active;
    public $logout_date;
    public $full_name;
    public $status;
    public $sysadmin;
    public $dev;
    public $admin;
    public $teacher;
    public $student;
    public $acctng;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all students
    function read_user_resps(){
    
        // select all query
        $query = "SELECT
                   `resp_id`, `user_responsibility`
                FROM
                    sys_user_roles_v
                WHERE
                    user_id= '".$this->user_id."'
                ORDER BY
                    user_responsibility";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }    

    // read all students
    function read(){
    
        // select all query
        $query = "SELECT
                   `user_id`, `username`, `full_name`, `start_date_active`, `status`
                FROM
                    sys_users_v
                ORDER BY
                    status desc, user_id
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // get single student data
    function read_single(){
    
        // select all query
        $query = "SELECT
                    `user_id`, `username`, `password`, `description`, `enabled_flag`, `email`, `phone`, `fb_id`
                FROM
                    sys_users 
                WHERE
                    user_id= ".$this->user_id."
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // get single role data
    function role_single(){
    
        // select all query
        $query = "SELECT
                    `user_id`, `username`, `sysadmin`, `dev`, `admin`, `teacher`, `student`, `acctng`
                FROM
                    " . $this->role_table . " 
                WHERE
                    user_id= ".$this->user_id."
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // create doctor
    function create(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        
        // query to insert record
        $query = "INSERT INTO  ". $this->table_name ." 
                        (`name`, `email`, `password`, `phone`, `gender`, `specialist`, `created`) , `start_date_active`, `end_date_active`
                  VALUES
                        ('".$this->name."', '".$this->email."', '".$this->password."', '".$this->phone."', '".$this->gender."', '".$this->specialist."', '".$this->created."')";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;
    }

    // update user 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    sys_users
                SET
                    username='".$this->username."', description='".$this->description."', password='".$this->password."', phone='".$this->phone."', enabled_flag='".$this->enabled_flag."', email='".$this->email."', fb_id='".$this->fb_id."', last_updated_by='".$this->last_updated_by."'
                WHERE
                    user_id='".$this->user_id."'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update sysadmin user role
    function sysadmin_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->sysadmin."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 1";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update dev user role
    function dev_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->dev."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 2";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update admin user role
    function admin_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->admin."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 3";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update teacher user role
    function teacher_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->teacher."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 4";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update student user role
    function student_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->student."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 5";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // update acctng user role
    function acctng_update(){
    
        // query to insert record
        $query = "UPDATE
                    " . $this->role_update . "
                SET
                    enabled_flag='".$this->acctng."'
                WHERE 
                    user_id='".$this->user_id."' AND resp_id = 6";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    
    // delete doctor
    function delete(){
        
        // query to insert record
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    id= '".$this->id."'";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
        
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                email='".$this->email."'";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}