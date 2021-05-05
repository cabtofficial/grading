<?php
class Settings{

    // database connection and table name
    private $conn;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // get single student data
    function read_settings(){
    
        // select all query
        $query = "SELECT
                    `name`, `initials`, `website`, `color`, `scheme`
                FROM
                    sys_settings
                ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // update user 
    function update(){
    
        // query to insert record
        $query = "UPDATE
                    sys_settings
                SET
                    name='".$this->name."', initials='".$this->initials."', website='".$this->website."', color='".$this->color."', scheme='".$this->scheme."', last_updated_by='".$this->last_updated_by."', last_updated_date=now()
                ";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>