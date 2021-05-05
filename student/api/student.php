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
        $query = "                (SELECT
        `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`,`remarks`
     FROM
         grades_v
     WHERE
         student_num= '".$this->username."'
     AND subject NOT IN ('Deportment Grade','Music','Arts','Physical Education','Health')
     AND subject NOT LIKE '%MAPEH'
     AND subject NOT LIKE '%Computer')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject like '%MAPEH')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Music')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Arts')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Physical Education')
     UNION (SELECT CONCAT('*',repeat(' ',20),`subject`), first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Health')
     UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject like '%Computer')
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
        $query = "SELECT
                        `display_name`, `first`, `SECOND`, `third`, `fourth`, `FINAL`, `remarks`
                    FROM
                        grades_v gv, subjects sub
                    WHERE
                        student_num= '".$this->username."'
                        and sub.subject = gv.subject
                    AND gv.subject <> 'Deportment Grade'
                    order by subj_order
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
        $query = "SELECT
                        `display_name`, `first`, `second`
			, (
			CASE
				WHEN (`first`+`second`)%2 = 1 then FLOOR((`first`+`second`)/2)+1
				ELSE FLOOR((`first`+`second`)/2)
			END) AS final
			,`remarks`
                    FROM
                        grades_v gv, subjects sub
                    WHERE
                        student_num= '".$this->username."'
                        and sub.subject = gv.subject
                    AND gv.subject <> ('Deportment Grade')
                    and first <> ' '
                    and SECOND <> ' '
                    order by subj_order
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read all students
    function read_shs_2(){
    
        // select all query
        $query = "SELECT
                        `display_name`,`third`,`fourth`
			, (
			CASE
				WHEN (`third`+`fourth`)%2 = 1 then FLOOR((`third`+`fourth`)/2)+1
				ELSE FLOOR((`third`+`fourth`)/2)
			END) AS final
			,`remarks`
                    FROM
                        grades_v gv, subjects sub
                    WHERE
                        student_num= '".$this->username."'
                        and sub.subject = gv.subject
                    AND gv.subject <> ('Deportment Grade')
                    and third <> ' '
                    order by subj_order
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }


        // read all students
        function read_sem_1(){
    
            // select all query
            $query = "SELECT
                            round(avg(final),0) sem1_final
                        FROM
                            grades_v gv, subjects sub
                        WHERE
                            student_num= '".$this->username."'
                            and sub.subject = gv.subject
                        AND gv.subject <> ('Deportment Grade')
                        and gv.subject not like ('% - VE/CL')
                        and first <> ' '
                        order by subj_order
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
                   `subject`, `first`, `second`, `sem1_A`, `THIRD`, `FOURTH`, `sem2_A`, `final`
                FROM
                    deportment_vl
                WHERE
                    student_num= '".$this->username."'
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
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, c.grade third
                        FROM deportment_elem_v a, deportment_elem_v b, deportment_elem_v c
                        WHERE a.student_id= '".$this->username."'
                        AND a.code like 'MD%'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.student_id = c.student_id
                        AND a.code = c.code
                        AND a.quarter = 1
                        AND b.quarter = 2
                        AND c.quarter = 3
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
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, c.grade third
                        FROM deportment_elem_v a, deportment_elem_v b, deportment_elem_v c
                        WHERE a.student_id= '".$this->username."'
                        AND a.code like 'MT%'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.student_id = c.student_id
                        AND a.code = c.code
                        AND a.quarter = 1
                        AND b.quarter = 2
                        AND c.quarter = 3
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
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, c.grade third
                        FROM deportment_elem_v a, deportment_elem_v b, deportment_elem_v c
                        WHERE a.student_id= '".$this->username."'
                        AND a.code like 'MK%'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.student_id = c.student_id
                        AND a.code = c.code
                        AND a.quarter = 1
                        AND b.quarter = 2
                        AND c.quarter = 3
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
            $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, c.grade third
                        FROM deportment_elem_v a, deportment_elem_v b, deportment_elem_v c
                        WHERE a.student_id= '".$this->username."'
                        AND a.code like 'MB%'
                        AND a.student_id = b.student_id
                        AND a.code = b.code
                        AND a.student_id = c.student_id
                        AND a.code = c.code
                        AND a.quarter = 1
                        AND b.quarter = 2
                        AND c.quarter = 3
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
        $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, b.grade third
                    FROM deportment_hs_v a, deportment_hs_v b, deportment_hs_v c
                    WHERE a.student_id= '".$this->username."'
                    AND a.code like 'MD%'
                    AND a.student_id = b.student_id
                    AND a.code = b.code
                    AND a.student_id = c.student_id
                    AND a.code = c.code
                    AND a.quarter = 1
                    AND b.quarter = 2
                    AND c.quarter = 3
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
        $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, b.grade third
                    FROM deportment_hs_v a, deportment_hs_v b, deportment_hs_v c
                    WHERE a.student_id= '".$this->username."'
                    AND a.code like 'MT%'
                    AND a.student_id = b.student_id
                    AND a.code = b.code
                    AND a.student_id = c.student_id
                    AND a.code = c.code
                    AND a.quarter = 1
                    AND b.quarter = 2
                    AND c.quarter = 3
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
        $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, b.grade third
                    FROM deportment_hs_v a, deportment_hs_v b, deportment_hs_v c
                    WHERE a.student_id= '".$this->username."'
                    AND a.code like 'MK%'
                    AND a.student_id = b.student_id
                    AND a.code = b.code
                    AND a.student_id = c.student_id
                    AND a.code = c.code
                    AND a.quarter = 1
                    AND b.quarter = 2
                    AND c.quarter = 3
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
        $query = "SELECT a.student_id, a.value, a.grade first, b.grade second, b.grade third
                    FROM deportment_hs_v a, deportment_hs_v b, deportment_hs_v c
                    WHERE a.student_id= '".$this->username."'
                    AND a.code like 'MB%'
                    AND a.student_id = b.student_id
                    AND a.code = b.code
                    AND a.student_id = c.student_id
                    AND a.code = c.code
                    AND a.quarter = 1
                    AND b.quarter = 2
                    AND c.quarter = 3
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
                    `lrn`, `student_num`, `name`, `status`, `email_address`, `level_section`, `emergency_contact`, `contact_email`, `adviser`, `schoology_pic`,`track`,`strand`
                FROM
                    students_vl
                WHERE
                    student_num= '".$this->username."'";
    
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
        $query = "Select description, aug, sep, oct, nov, dece, jan, feb, (aug+sep+oct+nov+dece+jan+feb) total from attendance_q1 where student_num = 'DEFAULT' UNION
        Select description, aug, sep, oct, nov, dece, jan, feb, (aug+sep+oct+nov+dece+jan+feb) total from attendance_q1 where description = 'DAYS PRESENT' and student_num = '".$this->username."' UNION
        Select description, aug, sep, oct, nov, dece, jan, feb, (aug+sep+oct+nov+dece+jan+feb) total from attendance_q1 where description = 'DAYS ABSENT' and student_num = '".$this->username."' UNION
        Select description, aug, sep, oct, nov, dece, jan, feb, (aug+sep+oct+nov+dece+jan+feb) total from attendance_q1 where description = 'DAYS TARDY' and student_num = '".$this->username."'          
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    // read all students
    function subj_absences(){
    
        // select all query
        $query = "Select a.student_num, display_name, count(*) subject_absences, (count(*)/(aug+sep+oct+nov+dece+jan+feb))*100 percent_absent
                    from attendance_all a, attendance_q1 b, subjects c
                    where status = 'ABSENT'
                    and a.student_num = b.student_num
                    and a.student_num = '".$this->username."'
                    and a.subject = c.subject
                    and b.description = 'DAYS ABSENT'
                    group by a.student_num, c.subj_order        
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }
    
    function read_absences_all(){
    
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

    function read_tardy_all(){
    
        // select all query
        $query = " select name
                        , aa.student_num
                        , grade_level
                        , count(*)/(select aug+sep+oct+nov+dece+jan+feb from attendance_q1 where student_num = 'DEFAULT')*100 percent_absent
                        , count(*) absent_count
                    from (select distinct student_num, concat(aa.last_name, ', ', aa.first_name) name, RECORD_DATE
                            from attendance_all aa
                            where status = 'Late'
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

    function rank(){
    
        // select all query
        $query = "SELECT
                   `quarter`,`award`
                FROM
                    grades_rank_v
                WHERE
                    student_num= '".$this->username."'
                ";
                
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }


}