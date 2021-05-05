<?php
class Student{
 
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
    public $subject;
    public $second;
    public $third;
    public $fourth;
    public $final;
    public $remarks;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all students
    function read_elem(){
    
        // select all query
        $query = "(SELECT
        `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject NOT IN ('Deportment Grade','Music','Arts','Physical Education','Health')
     AND subject NOT LIKE '%VE/CL'
     AND subject NOT LIKE '%MAPEH'
     AND subject NOT LIKE '%Computer')
     UNION
     (SELECT
        `subject`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.6 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.4) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.6 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.4,0))
         ) first
        , `SECOND`, `THIRD`, `FOURTH`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.6 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.4) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.6 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.4,0))
         ) final
        ,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject LIKE '%VE/CL')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject like '%MAPEH')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Music')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Arts')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Physical Education')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Health')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject like '%Computer')
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read all students
    function read_hs(){
    
        // select all query
        $query = "(SELECT
        `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject NOT IN ('Deportment Grade','Music','Arts','Physical Education','Health')
     AND subject NOT LIKE '%VE/CL'
     AND subject NOT LIKE '%MAPEH'
     AND subject NOT LIKE '%Computer')
     UNION
     (SELECT
        `subject`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5,0))
         ) first
        , `SECOND`, `THIRD`, `FOURTH`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5,0))
         ) final
        ,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject LIKE '%VE/CL')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject like '%MAPEH')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Music')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Arts')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Physical Education')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject = 'Health')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->user_id."' AND subject like '%Computer')
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read all students
    function read_shs_1(){
    
        // select all query
        $query = "(SELECT
        `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject <> ('Deportment Grade')
     AND subject NOT LIKE '%VE/CL')
     UNION
     (SELECT
        `subject`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5,0))
         ) first
        , `SECOND`, `THIRD`, `FOURTH`
        , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->user_id."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                 ,(FLOOR((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5) + 1)
                 ,(ROUND((select first from grades_v where student_num= '".$this->user_id."' AND subject LIKE '%VE/CL' )*0.5 
                     + (select first from grades_v where student_num= '".$this->user_id."' AND subject = 'Deportment Grade' )*0.5,0))
         ) final
        ,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->user_id."'
     AND subject LIKE '%VE/CL')
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    function rank(){
    
        // select all query
        $query = "SELECT
                   `quarter`,`award`
                FROM
                    grades_rank_v
                WHERE
                    student_num= '".$this->user_id."'
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    function deportment(){
    
        // select all query
        $query = "SELECT
                   `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`
                FROM
                    deportment_vl
                WHERE
                    student_num= '".$this->user_id."'
                AND subject = 'Deportment Grade'    
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read all students
    function makadiyos_elem(){
    
        // select all query
        $query = "SELECT
                   `student_id`, `value`, `grade`
                FROM
                    deportment_elem_v
                WHERE
                    student_id= '".$this->user_id."'
                AND code like 'MD%' 
                AND quarter = 1
                ";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

        // read all students
        function makatao_elem(){
    
            // select all query
            $query = "SELECT
                       `student_id`, `value`, `grade`
                    FROM
                        deportment_elem_v
                    WHERE
                        student_id= '".$this->user_id."'
                    AND code like 'MT%' 
                    AND quarter = 1
                    ";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
        
            return $stmt;
        }

            // read all students
    function makakalikasan_elem(){
    
        // select all query
        $query = "SELECT
                   `student_id`, `value`, `grade`
                FROM
                    deportment_elem_v
                WHERE
                    student_id= '".$this->user_id."'
                AND code like 'MK%' 
                AND quarter = 1
                ";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

        // read all students
        function makabansa_elem(){
    
            // select all query
            $query = "SELECT
                       `student_id`, `value`, `grade`
                    FROM
                        deportment_elem_v
                    WHERE
                        student_id= '".$this->user_id."'
                    AND code like 'MB%' 
                    AND quarter = 1
                    ";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
        
            return $stmt;
        }

    // read all students
    function makadiyos_hs(){
    
        // select all query
        $query = "SELECT a.student_id, a.value, a.grade first, b.grade second
                    FROM deportment_hs_v a, deportment_hs_v b
                    WHERE a.student_id= '".$this->user_id."'
                    AND a.student_id = b.student_id
                    AND a.code = b.code
                    AND a.code like 'MD%'
                    AND a.quarter = 1
                    AND b.quarter = 2
                ";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

        // read all students
        function makatao_hs(){
    
            // select all query
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second
                        FROM deportment_hs_v a, deportment_hs_v b
                        WHERE a.student_id= '".$this->user_id."'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.code like 'MT%'
                        AND a.quarter = 1
                        AND b.quarter = 2
                    ";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
        
            // execute query
            $stmt->execute();
        
            return $stmt;
        }

            // read all students
    function makakalikasan_hs(){
    
        // select all query
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second
                        FROM deportment_hs_v a, deportment_hs_v b
                        WHERE a.student_id= '".$this->user_id."'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.code like 'MK%'
                        AND a.quarter = 1
                        AND b.quarter = 2
                ";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

        // read all students
        function makabansa_hs(){
    
            // select all query
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second
                        FROM deportment_hs_v a, deportment_hs_v b
                        WHERE a.student_id= '".$this->user_id."'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.code like 'MB%'
                        AND a.quarter = 1
                        AND b.quarter = 2
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
                    `lrn`, `student_num`, `name`, `status`, `email_address`, `level_section`, `emergency_contact`, `contact_email`, `adviser`, `schoology_pic`
                FROM
                    students_vl
                WHERE
                    student_num= '".$this->user_id."'";
    
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
    function attendance(){
    
        // select all query
        $query = "Select description, aug, sep, oct, nov, dece, (aug+sep+oct+nov+dece) total from attendance_q1 where student_num = 'DEFAULT' UNION
        Select description, aug, sep, oct, nov, dece, (aug+sep+oct+nov+dece) total from attendance_q1 where description = 'DAYS PRESENT' and student_num = '".$this->user_id."' UNION
        Select description, aug, sep, oct, nov, dece, (aug+sep+oct+nov+dece) total from attendance_q1 where description = 'DAYS ABSENT' and student_num = '".$this->user_id."' UNION
        Select description, aug, sep, oct, nov, dece, (aug+sep+oct+nov+dece) total from attendance_q1 where description = 'DAYS TARDY' and student_num = '".$this->user_id."'          
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

}