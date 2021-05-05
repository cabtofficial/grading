<?php
class Principal{
 
    // database connection and table name
    private $conn;
 
    // object properties
    public $student_id;
    public $lrn;
    public $student_num;
    public $name;
    public $status;
    public $gender;
    public $level_section;
    public $username;
    public $attribute2;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function read_all(){
    
        // select all query
        $query = "SELECT `student_num`, `subject`, `name`, `first`, `remarks`
            from faculty_grades_v
            order by remarks,subject,first desc,name";

        //where remarks = 'Failed'
        //order by student_num,subject,name,first desc";

        //where staff_num = '".$this->username."'
        //order by remarks,subject,first desc,name";

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
                    `faculty_num`, `last_name`, `first_name`, `designation`, `status`, `gender`,`schoology_pic`
                FROM
                    faculty
                WHERE
                    faculty_num= '".$this->username."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // read all students
    function read_grades_q1_11stem(){
    
        // select all query
        $query = "SELECT `name`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`,`unrounded`
            from grades_q1_piety_v_final
            ";

        //where remarks = 'Failed'
        //order by student_num,subject,name,first desc";

        //where staff_num = '".$this->username."'
        //order by remarks,subject,first desc,name";

        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

        // read all students
        function read_grades_q1_11abm(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`,`unrounded`
                from grades_q1_fort_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

            // read all students
    function read_grades_q1_12stem(){
    
        // select all query
        $query = "SELECT `name`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`,`unrounded`
            from grades_q1_wis_v_final
            ";

        //where remarks = 'Failed'
        //order by student_num,subject,name,first desc";

        //where staff_num = '".$this->username."'
        //order by remarks,subject,first desc,name";

        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

        // read all students
        function read_grades_q1_12abm(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`,`unrounded`
                from grades_q1_coun_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        // read all students
        function read_grades_q1_10(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                ,`music`,`arts`,`pe`,`health`,`unrounded`
                from grades_q1_10_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        // read all students
        function read_grades_q1_9(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                ,`music`,`arts`,`pe`,`health`,`unrounded`
                from grades_q1_9_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_8(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                ,`music`,`arts`,`pe`,`health`,`unrounded`
                from grades_q1_8_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_7(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                ,`music`,`arts`,`pe`,`health`,`unrounded`
                from grades_q1_7_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_1(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_1_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_2(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_2_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_3(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_3_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_4(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_4_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_5(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_5_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_6(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_6_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }

        function read_grades_q1_kinder(){
    
            // select all query
            $query = "SELECT `name`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`deport`,`final`,`award`
                from grades_q1_kinder_v_final
                ";
    
            //where remarks = 'Failed'
            //order by student_num,subject,name,first desc";
    
            //where staff_num = '".$this->username."'
            //order by remarks,subject,first desc,name";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
            return $stmt;
        }
}