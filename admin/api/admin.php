<?php
class Admin{
 
    // database connection and table name
    private $conn;
    private $table_name = "cabt_student_v";
    private $student_table = "cabt_students";
 
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

    // read all students
    function read(){
    
        // select all query
        $query = "SELECT `student_num`, `subject`, `name`, `first`, `remarks`
            from faculty_grades_v
            where staff_num = '".$this->username."'
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

    function read_absences(){
    
        // select all query
        $query = " select name
                        , aa.student_num
                        , grade_level
                        , count(*)/(select aug+sep+oct+nov+dece+jan+feb from attendance_q1 where student_num = 'DEFAULT')*100 percent_absent
                        , count(*) absent_count
                    from (select distinct student_num, concat(aa.last_name, ', ', aa.first_name) name, RECORD_DATE
                            from attendance_all aa
                            where status = 'Absent'
                            and RECORD_DATE < 20210300) aa
                        , students s
                    where aa.student_num = s.student_num
                    group by name, grade_level
                    order by count(*) desc
                ";


        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
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
    function read_shs_adviser(){
    
        // select all query
        $query = " select (select ATTRIBUTE1 from sys_values where ATTRIBUTE2 = '".$this->username."' order by attribute1 limit 1) as section1
                , (select ATTRIBUTE1 from sys_values where ATTRIBUTE2 = '".$this->username."' order by attribute1 desc limit 1 ) as section2
                from dual
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // get single student data
    function read_list(){
    
        // select all query
        $query = " select last_name, first_name, student_num 
                    from students where attribute1 = '".$this->section."' 
                    order by last_name, first_name
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
                    `faculty_num`, `last_name`, `first_name`, `designation`, `status`, `gender`,`schoology_pic`, `middle_name`, `birthday`, `sss`, `tin`, `pagibig`, `philhealth`, `degree`, `major`, `emergency_contact`, `address`, `contact_num`, date_format(birthday, '%M %d, %Y') birthday, `civil`
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

    // get single student data
    function read_final_grade(){
    
        // select all query
        $query = "SELECT
                    `final`,`remarks`
                FROM
                    grades_final_v
                WHERE
                    lrn= '".$this->lrn."'";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // read all students
    function read_values(){
    
        // select all query
        $query = "SELECT
                   `lrn`,`ATTRIBUTE2`, `first_a`, `second_a`, `third_a`, `fourth_a`,`final_a`
                FROM
                    grades_values_v
                WHERE
                    lrn= '".$this->lrn."'
                ORDER BY
                    attribute3    
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

 

    // read all students
    function read_grades_q1_piety(){
    
        // select all query
        $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
            from grades_q1_piety_v_final
            order by name
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
        function read_grades_q1_fort(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_fort_v_final
                order by name
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
    function read_grades_q1_wis(){
    
        // select all query
        //$query = "SELECT `name`,`student_num`
        //    ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`
        //    from grades_q1_wis_v_final
        //    where faculty_num = '".$this->username."'
         //   ";

        // select all query
        $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`
            from grades_q1_wis_v_final
            order by name
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
        function read_grades_q1_coun(){
    
            // select all query
            //$query = "SELECT `name`,`student_num`
            //,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`
            //    from grades_q1_coun_v_final
            //    where faculty_num = '".$this->username."'
            //    ";

            // select all query
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`deport`,`final`,`award`
                from grades_q1_coun_v_final
                order by name
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
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_10_v_final
                order by name
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
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_9_v_final
                order by name
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
        function read_grades_q1_8(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_8_v_final
                order by name
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
        function read_grades_q1_7(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_7_v_final
                order by name
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
        function read_grades_q1_6(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
            ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_6_v_final
                order by name
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
        function read_grades_q1_5(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_5_v_final
                order by name
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
        function read_grades_q1_4(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_4_v_final
                order by name
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
        function read_grades_q1_3(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_3_v_final
                order by name
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
        function read_grades_q1_2(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_2_v_final
                order by name
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
        function read_grades_q1_1(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`final`,`award`
                from grades_q1_1_v_final
                order by name
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
        function read_grades_q1_kinder(){
    
            // select all query
            $query = "SELECT `name`,`student_num`
                ,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`deport`,`final`,`award`
                from grades_q1_kinder_v_final
                where faculty_num = '".$this->username."'
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