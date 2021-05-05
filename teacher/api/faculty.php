<?php
class Faculty{
 
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

    function read_summ_1(){
    
        // select all query
        $query = " select a.name `name`
                    , a.display_name `sub1`
                    , b.display_name `sub2`
                    , c.display_name `sub3`
                    , d.display_name `sub4`
                    , e.display_name `sub5`
                    , f.display_name `sub6`
                    , g.display_name `sub7`
                    , h.display_name `sub8`
                    , i.display_name `sub9`
                    , j.display_name `sub10`
                    , k.display_name `sub11`
                    , l.display_name `sub12`
                    , m.display_name `sub13`
                    , n.display_name `sub14`
                    , x.display_name `unrounded`
                    , y.display_name `rounded`
                    , z.display_name `award`
                    from 
                ((select '*Student Name' as name, display_name from subjects where subj_order = 1 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 1 and grade_level = '".$this->section."'))) a
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 2 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 2 and grade_level = '".$this->section."'))) b
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 3 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 3 and grade_level = '".$this->section."'))) c
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 4 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 4 and grade_level = '".$this->section."'))) d
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 5 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 5 and grade_level = '".$this->section."'))) e
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 6 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 6 and grade_level = '".$this->section."'))) f
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 7 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 7 and grade_level = '".$this->section."'))) g
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 8 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 8 and grade_level = '".$this->section."'))) h
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 9 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 9 and grade_level = '".$this->section."'))) i
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 10 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 10 and grade_level = '".$this->section."'))) j
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 11 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 11 and grade_level = '".$this->section."'))) k
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 12 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 12 and grade_level = '".$this->section."'))) l
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 13 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 13 and grade_level = '".$this->section."'))) m
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 14 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 14 and grade_level = '".$this->section."'))) n
                , ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
                , ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
                , ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
                where a.name = b.name
                and a.name = c.name
                and a.name = d.name
                and a.name = e.name
                and a.name = f.name
                and a.name = g.name
                and a.name = h.name
                and a.name = i.name
                and a.name = j.name
                and a.name = k.name
                and a.name = l.name
                and a.name = m.name
                and a.name = n.name
                and a.name = x.name
                and a.name = y.name
                and a.name = z.name
                order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    // get single student data
    function read_summ_2(){
    
        // select all query
        $query = " select a.name `name`
                    , a.display_name `sub1`
                    , b.display_name `sub2`
                    , c.display_name `sub3`
                    , d.display_name `sub4`
                    , e.display_name `sub5`
                    , f.display_name `sub6`
                    , g.display_name `sub7`
                    , h.display_name `sub8`
                    , i.display_name `sub9`
                    , j.display_name `sub10`
                    , k.display_name `sub11`
                    , l.display_name `sub12`
                    , m.display_name `sub13`
                    , n.display_name `sub14`
                    , x.display_name `unrounded`
                    , y.display_name `rounded`
                    , z.display_name `award`
                    from 
                ((select '*Student Name' as name, display_name from subjects where subj_order = 1 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 1 and grade_level = '".$this->section."'))) a
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 2 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 2 and grade_level = '".$this->section."'))) b
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 3 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 3 and grade_level = '".$this->section."'))) c
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 4 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 4 and grade_level = '".$this->section."'))) d
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 5 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 5 and grade_level = '".$this->section."'))) e
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 6 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 6 and grade_level = '".$this->section."'))) f
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 7 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 7 and grade_level = '".$this->section."'))) g
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 8 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 8 and grade_level = '".$this->section."'))) h
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 9 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 9 and grade_level = '".$this->section."'))) i
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 10 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 10 and grade_level = '".$this->section."'))) j
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 11 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 11 and grade_level = '".$this->section."'))) k
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 12 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 12 and grade_level = '".$this->section."'))) l
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 13 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 13 and grade_level = '".$this->section."'))) m
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 14 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 14 and grade_level = '".$this->section."'))) n
                , ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
                , ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
                , ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
                where a.name = b.name
                and a.name = c.name
                and a.name = d.name
                and a.name = e.name
                and a.name = f.name
                and a.name = g.name
                and a.name = h.name
                and a.name = i.name
                and a.name = j.name
                and a.name = k.name
                and a.name = l.name
                and a.name = m.name
                and a.name = n.name
                and a.name = x.name
                and a.name = y.name
                and a.name = z.name
                order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }
        
    // get single student data
    function read_summ_3(){
    
        // select all query
        $query = " select a.name `name`
                    , a.display_name `sub1`
                    , b.display_name `sub2`
                    , c.display_name `sub3`
                    , d.display_name `sub4`
                    , e.display_name `sub5`
                    , f.display_name `sub6`
                    , g.display_name `sub7`
                    , h.display_name `sub8`
                    , i.display_name `sub9`
                    , j.display_name `sub10`
                    , k.display_name `sub11`
                    , l.display_name `sub12`
                    , m.display_name `sub13`
                    , n.display_name `sub14`
                    , x.display_name `unrounded`
                    , y.display_name `rounded`
                    , z.display_name `award`
                    from 
                ((select '*Student Name' as name, display_name from subjects where subj_order = 1 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 1 and grade_level = '".$this->section."'))) a
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 2 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 2 and grade_level = '".$this->section."'))) b
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 3 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 3 and grade_level = '".$this->section."'))) c
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 4 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 4 and grade_level = '".$this->section."'))) d
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 5 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 5 and grade_level = '".$this->section."'))) e
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 6 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 6 and grade_level = '".$this->section."'))) f
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 7 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 7 and grade_level = '".$this->section."'))) g
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 8 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 8 and grade_level = '".$this->section."'))) h
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 9 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 9 and grade_level = '".$this->section."'))) i
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 10 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 10 and grade_level = '".$this->section."'))) j
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 11 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 11 and grade_level = '".$this->section."'))) k
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 12 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 12 and grade_level = '".$this->section."'))) l
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 13 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 13 and grade_level = '".$this->section."'))) m
                , ((select '*Student Name' as name, display_name from subjects where subj_order = 14 and grade_level = '".$this->section."' order by subj_order) 
                    union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subjects where subj_order = 14 and grade_level = '".$this->section."'))) n
                , ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
                , ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
                , ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
                    union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
                where a.name = b.name
                and a.name = c.name
                and a.name = d.name
                and a.name = e.name
                and a.name = f.name
                and a.name = g.name
                and a.name = h.name
                and a.name = i.name
                and a.name = j.name
                and a.name = k.name
                and a.name = l.name
                and a.name = m.name
                and a.name = n.name
                and a.name = x.name
                and a.name = y.name
                and a.name = z.name
                order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_summ_1_shs(){
    
        // select all query
        $query = " select a.name `name`
				, a.display_name `sub1`
				, b.display_name `sub2`
				, c.display_name `sub3`
				, d.display_name `sub4`
				, e.display_name `sub5`
				, f.display_name `sub6`
				, g.display_name `sub7`
				, h.display_name `sub8`
				, i.display_name `sub9`
				, j.display_name `sub10`
				, x.display_name `unrounded`
				, y.display_name `rounded`
				, z.display_name `award`
				from 
			((select '*Student Name' as name, display_name from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '1'))) a
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '1'))) b
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '1'))) c
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '1'))) d
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '1'))) e
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '1'))) f
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '1'))) g
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '1'))) h
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '1'))) i
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '1'))) j
			, ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
			, ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
			, ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q1_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
			where a.name = b.name
			and a.name = c.name
			and a.name = d.name
			and a.name = e.name
			and a.name = f.name
			and a.name = g.name
			and a.name = h.name
			and a.name = i.name
			and a.name = j.name
			and a.name = x.name
			and a.name = y.name
			and a.name = z.name
			order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_summ_2_shs(){
    
        // select all query
        $query = " select a.name `name`
				, a.display_name `sub1`
				, b.display_name `sub2`
				, c.display_name `sub3`
				, d.display_name `sub4`
				, e.display_name `sub5`
				, f.display_name `sub6`
				, g.display_name `sub7`
				, h.display_name `sub8`
				, i.display_name `sub9`
				, j.display_name `sub10`
				, x.display_name `unrounded`
				, y.display_name `rounded`
				, z.display_name `award`
				from 
			((select '*Student Name' as name, display_name from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '1'))) a
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '1'))) b
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '1'))) c
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '1'))) d
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '1'))) e
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '1'))) f
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '1'))) g
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '1'))) h
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '1'))) i
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '1' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, second from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '1'))) j
			, ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
			, ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
			, ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q2_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
			where a.name = b.name
			and a.name = c.name
			and a.name = d.name
			and a.name = e.name
			and a.name = f.name
			and a.name = g.name
			and a.name = h.name
			and a.name = i.name
			and a.name = j.name
			and a.name = x.name
			and a.name = y.name
			and a.name = z.name
			order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_summ_3_shs(){
    
        // select all query
        $query = " select a.name `name`
				, a.display_name `sub1`
				, b.display_name `sub2`
				, c.display_name `sub3`
				, d.display_name `sub4`
				, e.display_name `sub5`
				, f.display_name `sub6`
				, g.display_name `sub7`
				, h.display_name `sub8`
				, i.display_name `sub9`
				, j.display_name `sub10`
				, x.display_name `unrounded`
				, y.display_name `rounded`
				, z.display_name `award`
				from 
			((select '*Student Name' as name, display_name from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 1 and grade_level = '".$this->section."' and sem = '2'))) a
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 2 and grade_level = '".$this->section."' and sem = '2'))) b
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 3 and grade_level = '".$this->section."' and sem = '2'))) c
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 4 and grade_level = '".$this->section."' and sem = '2'))) d
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 5 and grade_level = '".$this->section."' and sem = '2'))) e
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 6 and grade_level = '".$this->section."' and sem = '2'))) f
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 7 and grade_level = '".$this->section."' and sem = '2'))) g
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 8 and grade_level = '".$this->section."' and sem = '2'))) h
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 9 and grade_level = '".$this->section."' and sem = '2'))) i
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '2' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, third from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 10 and grade_level = '".$this->section."' and sem = '2'))) j
			, ((select '*Student Name' as name, 'Unrounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(unrounded,DOUBLE) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) x
			, ((select '*Student Name' as name, 'Rounded' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(final,DOUBLE) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) y
			, ((select '*Student Name' as name, 'AEA' as display_name from DUAL)
				union (select concat(last_name,', ',first_name) as name, convert(award,CHAR) from grades_q3_rank_v gr, students st where gr.student_num = st.student_num and gr.section = '".$this->section."')) z
			where a.name = b.name
			and a.name = c.name
			and a.name = d.name
			and a.name = e.name
			and a.name = f.name
			and a.name = g.name
			and a.name = h.name
			and a.name = i.name
			and a.name = j.name
			and a.name = x.name
			and a.name = y.name
			and a.name = z.name
			order by name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q1(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject
                    from grades_q1_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN first between 98 and 100 THEN 'With Highest Honors'
                            WHEN first between 95 and 97 THEN 'With High Honors'
                            WHEN first between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                    from subjects s, grades g, students s2 
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q2(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject
                    from grades_q2_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN second between 98 and 100 THEN 'With Highest Honors'
                            WHEN second between 95 and 97 THEN 'With High Honors'
                            WHEN second between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                    from subjects s, grades g, students s2 
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q3(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject
                    from grades_q3_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN third between 98 and 100 THEN 'With Highest Honors'
                            WHEN third between 95 and 97 THEN 'With High Honors'
                            WHEN third between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                    from subjects s, grades g, students s2 
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q1_shs(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject, '1' sem
                    from grades_q1_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN first between 98 and 100 THEN 'With Highest Honors'
                            WHEN first between 95 and 97 THEN 'With High Honors'
                            WHEN first between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                                , s.sem
                    from subject_shs s, grades g, students s2
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q2_shs(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject, '1' sem
                    from grades_q2_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN second between 98 and 100 THEN 'With Highest Honors'
                            WHEN second between 95 and 97 THEN 'With High Honors'
                            WHEN second between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                                , s.sem
                    from subject_shs s, grades g, students s2
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_aea_q3_shs(){
    
        // select all query
        $query = " select last_name, first_name, CONVERT(award USING utf8) AS award, 'Final' subject, '2' sem
                    from grades_q2_rank_v gqrv, students s2
                    where gqrv.section = '".$this->section."'
                    and gqrv.student_num = s2.STUDENT_NUM
                    union
                    select s2.last_name, s2.first_name, 
                            (CASE 
                            WHEN third between 98 and 100 THEN 'With Highest Honors'
                            WHEN third between 95 and 97 THEN 'With High Honors'
                            WHEN third between 90 and 94 THEN 'With Honors'
                            ELSE ''
                            END) award
                                , concat('sub',subj_order)
                                , s.sem
                    from subject_shs s, grades g, students s2
                    where s.grade_level = s2.attribute1 
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    and s.grade_level = '".$this->section."'
                    and s.subject = g.subject
                    order by last_name, first_name
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_subjects(){
    
        // select all query
        $query = " select * from 
                    (select display_name sub1 from subjects where subj_order = 1 and grade_level = '".$this->section."') sub1
                    , (select display_name sub2 from subjects where subj_order = 2 and grade_level = '".$this->section."') sub2
                    , (select display_name sub3 from subjects where subj_order = 3 and grade_level = '".$this->section."') sub3
                    , (select display_name sub4 from subjects where subj_order = 4 and grade_level = '".$this->section."') sub4
                    , (select display_name sub5 from subjects where subj_order = 5 and grade_level = '".$this->section."') sub5
                    , (select display_name sub6 from subjects where subj_order = 6 and grade_level = '".$this->section."') sub6
                    , (select display_name sub7 from subjects where subj_order = 7 and grade_level = '".$this->section."') sub7
                    , (select display_name sub8 from subjects where subj_order = 8 and grade_level = '".$this->section."') sub8
                    , (select display_name sub9 from subjects where subj_order = 9 and grade_level = '".$this->section."') sub9
                    , (select display_name sub10 from subjects where subj_order = 10 and grade_level = '".$this->section."') sub10
                    , (select display_name sub11 from subjects where subj_order = 11 and grade_level = '".$this->section."') sub11
                    , (select display_name sub12 from subjects where subj_order = 12 and grade_level = '".$this->section."') sub12
                    , (select display_name sub13 from subjects where subj_order = 13 and grade_level = '".$this->section."') sub13
                    , (select display_name sub14 from subjects where subj_order = 14 and grade_level = '".$this->section."') sub14
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_subjects_shs_1(){
    
        // select all query
        $query = " select * from 
                    (select display_name sub1 from subject_shs where subj_order = 1 and sem = 1 and grade_level = '".$this->section."') sub1
                    , (select display_name sub2 from subject_shs where subj_order = 2 and sem = 1 and grade_level = '".$this->section."') sub2
                    , (select display_name sub3 from subject_shs where subj_order = 3 and sem = 1 and grade_level = '".$this->section."') sub3
                    , (select display_name sub4 from subject_shs where subj_order = 4 and sem = 1 and grade_level = '".$this->section."') sub4
                    , (select display_name sub5 from subject_shs where subj_order = 5 and sem = 1 and grade_level = '".$this->section."') sub5
                    , (select display_name sub6 from subject_shs where subj_order = 6 and sem = 1 and grade_level = '".$this->section."') sub6
                    , (select display_name sub7 from subject_shs where subj_order = 7 and sem = 1 and grade_level = '".$this->section."') sub7
                    , (select display_name sub8 from subject_shs where subj_order = 8 and sem = 1 and grade_level = '".$this->section."') sub8
                    , (select display_name sub9 from subject_shs where subj_order = 9 and sem = 1 and grade_level = '".$this->section."') sub9
                    , (select display_name sub10 from subject_shs where subj_order = 10 and sem = 1 and grade_level = '".$this->section."') sub10
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_subjects_shs_2(){
    
        // select all query
        $query = " select * from 
                    (select display_name sub1 from subject_shs where subj_order = 1 and sem = 2 and grade_level = '".$this->section."') sub1
                    , (select display_name sub2 from subject_shs where subj_order = 2 and sem = 2 and grade_level = '".$this->section."') sub2
                    , (select display_name sub3 from subject_shs where subj_order = 3 and sem = 2 and grade_level = '".$this->section."') sub3
                    , (select display_name sub4 from subject_shs where subj_order = 4 and sem = 2 and grade_level = '".$this->section."') sub4
                    , (select display_name sub5 from subject_shs where subj_order = 5 and sem = 2 and grade_level = '".$this->section."') sub5
                    , (select display_name sub6 from subject_shs where subj_order = 6 and sem = 2 and grade_level = '".$this->section."') sub6
                    , (select display_name sub7 from subject_shs where subj_order = 7 and sem = 2 and grade_level = '".$this->section."') sub7
                    , (select display_name sub8 from subject_shs where subj_order = 8 and sem = 2 and grade_level = '".$this->section."') sub8
                    , (select display_name sub9 from subject_shs where subj_order = 9 and sem = 2 and grade_level = '".$this->section."') sub9
                    , (select display_name sub10 from subject_shs where subj_order = 10 and sem = 2 and grade_level = '".$this->section."') sub10
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_student_subj_grades(){
    
        // select all query
        $query = " select s.subject_id, g.subject, concat(s2.last_name,', ',s2.first_name) name, first, second, third, '' fourth, '' final 
                    from grades g, subjects s, students s2 
                    where g.subject = s.subject
                    and staff_num = '".$this->username."'
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    order by g.subject, concat(s2.last_name,', ',s2.first_name)
                ";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function read_subj_grades(){
    
        // select all query
        $query = " select distinct s.subject_id, g.subject
                    from grades g, subjects s, students s2 
                    where g.subject = s.subject
                    and staff_num = '".$this->username."'
                    and s2.STUDENT_NUM = g.ATTRIBUTE4
                    order by g.subject
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