-- 1. Application Users Table
CREATE TABLE sys_users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    ENABLED_FLAG VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255),
    PHONE VARCHAR(255),
    login_date DATETIME,
    logout_date DATETIME,
    attribute1 VARCHAR(255),
    start_date_active DATETIME DEFAULT CURRENT_TIMESTAMP,
    end_date_active DATETIME,
    last_updated_by VARCHAR(255),
    staff_id VARCHAR(255),
    student_id VARCHAR(255),
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO sys_users (`user_id`,`username`,`description`,`enabled_flag`,`fb_id`,`staff_num`)
VALUES
(11,'CABTEF1','Eddie F. Fernandez','Y','100006380494453','2019-091'),
(12,'CABTAG1','Angelica D. Gabo','Y','100001261115455','2019-092'),
(13,'CABTCP1','Charles Rodyl A. Policar','Y','100000023146754','2019-093'),
(14,'CABTXR1','Xerces Alexis L. Ramirez','Y','100004299249377','2019-094'),
(15,'CABTOU1','Odessa Nica R. Ubana','Y','','2018-088'),
(16,'CABTGM1','Gilbert D. Macalindong','Y','100008819565731','2018-083'),
(17,'CABTJL2','Jhonalyn C. Luna','Y','100007401034738','2018-082'),
(18,'CABTAP1','Angelie O. Poniente','Y','100001454769596','2017-073'),
(19,'CABTLP1','Lydia A. Policar','Y','100000617044043','2015-058'),
(20,'CABTRN1','Rufino P. Ngo, Jr.','Y','1528537047','2015-056'),
(21,'CABTAD1','Angeline D. Hernandez','Y','100001915150533','2015-052'),
(22,'CABTMC1','Marichelle D. Canonce','Y','100001167892170','2012-010'),
(23,'CABTJM1','Jay Gregory M. Maquiñana','Y','100001220341029','2012-020'),
(24,'CABTJP1','Jim Albert C. Parin','Y','1591360546','2012-023')
;


-- 1.a. Create Active Users List View
    CREATE VIEW sys_users_v AS
    SELECT cu.user_id
        , cu.username
        , cu.DESCRIPTION full_name
        , cu.start_date_active
        ,   (
            CASE
                WHEN cu.logout_date is null then 'Online'
                ELSE 'Offline'
            END) AS status
    FROM  sys_users cu
    WHERE   cu.ENABLED_FLAG = 'Y'
    UNION
    SELECT cu.user_id
        , cu.username
        , cu.DESCRIPTION full_name
        , cu.start_date_active
        , 'Disabled' status
    FROM  sys_users cu
    WHERE   cu.ENABLED_FLAG = 'N'
    ;

-- 2. Application Responsibilities Table
CREATE TABLE sys_roles (
    RESP_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    RESP_NAME VARCHAR(50) NOT NULL UNIQUE,
    DESCRIPTION VARCHAR(255) NOT NULL,
    location VARCHAR(255),
    start_date_active DATETIME DEFAULT CURRENT_TIMESTAMP,
    end_date_active DATETIME,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

    -- 2.a. Application Responsibility Data
    INSERT INTO sys_roles (`RESP_ID`,`RESP_NAME`,`DESCRIPTION`,`location`) VALUES
    (1,'SYSADMIN','System Administrator','../sysadmin/index.php'),
    (2,'DEV','Developer','../sysadmin/index.php'),
    (3,'ADMIN','School Administrator','../sysadmin/index.php'),
    (4,'TEACHER','Teacher','../sysadmin/index.php'),
    (5,'STUDENT','Student','../sysadmin/index.php'),
    (6,'ACCTNG','Accounting','../sysadmin/index.php')
    ;

-- 3. User Responsibility Table
CREATE TABLE sys_user_roles (
    USER_RESP_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    USER_ID VARCHAR(50) NOT NULL,
    RESP_ID VARCHAR(255) NOT NULL,
    ENABLED_FLAG VARCHAR(255) NOT NULL,
    start_date_active DATETIME DEFAULT CURRENT_TIMESTAMP,
    end_date_active DATETIME,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

    -- 3.a. User Responsibility Data
    INSERT INTO sys_user_roles (`USER_RESP_ID`,`USER_ID`,`RESP_ID`,`ENABLED_FLAG`) VALUES
    (1,1,1,'Y'),
    (2,1,2,'N'),
    (3,1,3,'N'),
    (4,1,4,'N'),
    (5,1,5,'N'),
    (6,1,6,'N')
    ;

    -- 3.b. User Role View
    CREATE VIEW sys_user_roles_v AS
    SELECT cur.USER_RESP_ID
        , cur.user_id
        , cur.resp_id
        , cu.username
        , cu.DESCRIPTION full_name
        , cr.RESP_NAME
        , cr.description user_responsibility
    FROM  sys_users cu
        , sys_roles cr
        , sys_user_roles cur
    WHERE   cu.user_id = cur.user_id AND
            cr.resp_id = cur.resp_id AND
            cur.enabled_flag = 'Y';

    -- 3.c. User Role availability View
    CREATE VIEW sys_user_resps_vl AS
    SELECT DISTINCT cur.user_id, cu.username
        , (select enabled_flag from sys_user_roles where resp_id = 1 and user_id = cur.user_id) as SYSADMIN
        , (select enabled_flag from sys_user_roles where resp_id = 2 and user_id = cur.user_id) as DEV
        , (select enabled_flag from sys_user_roles where resp_id = 3 and user_id = cur.user_id) as ADMIN
        , (select enabled_flag from sys_user_roles where resp_id = 4 and user_id = cur.user_id) as TEACHER
        , (select enabled_flag from sys_user_roles where resp_id = 5 and user_id = cur.user_id) as JHS
        , (select enabled_flag from sys_user_roles where resp_id = 6 and user_id = cur.user_id) as ACCTNG
        , (select enabled_flag from sys_user_roles where resp_id = 7 and user_id = cur.user_id) as ELEM
        , (select enabled_flag from sys_user_roles where resp_id = 8 and user_id = cur.user_id) as SHS
    FROM  sys_user_roles cur
        , sys_users cu
    WHERE cu.user_id = cur.user_id;

-- 4. Settings Table
CREATE TABLE sys_settings (
    setting_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    initials VARCHAR(50) NOT NULL,
    website VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    scheme VARCHAR(255) NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_updated_by VARCHAR(50) NOT NULL,
    last_updated_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

    -- 4.a. Settings Data
    INSERT INTO sys_settings (`setting_id`,`name`,`initials`,`website`,`color`,`scheme`,`last_updated_by`) VALUES
    (1,'Default','Default','default@email.com','purple','light','1')
    ;

-- 5. Students Table
CREATE TABLE students (
    STUDENT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    LRN VARCHAR(255),
    STUDENT_NUM VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255),
    year INT NOT NULL,
    status VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    admission_date DATETIME,
    birthdate DATETIME,
    grade_level VARCHAR(255) NOT NULL,
    previous_school VARCHAR(255),
    emergency_contact VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(255),
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 5.a. CABT Students Data
INSERT INTO students (`STUDENT_ID`,`LRN`,`STUDENT_NUM`,`last_name`,`first_name`,`middle_name`,`year`,`status`,`gender`,`admission_date`,`birthdate`,`grade_level`,`previous_school`,`emergency_contact`,`address`,`phone`)
VALUES
(1,424500150111,'8-031-2019-2020','Salavaria','Ariana','',2020,'E','F','','','11 ABM','CABT','Analee D. Salavaria','114 Vibora St., City Of General Trias Cavite','09177302859'),
(2,107949080088,'8-032-2019-2020','Semanez','Ershelle Mae','',2020,'E','F','','','11 ABM','CABT','Efren Semanez','Purok 1, Brgy. Panungyanan, City Of General Trias Cavite','09125140695'),
(3,107949080090,'8-033-2019-2020','Soria','Rochelle Mae','',2020,'E','F','','','11 ABM','CABT','Edna Soria','Javalera Phase 1B , City Of General Trias, Cavite','09276802839'),
(4,107947080054,'8-017-2019-2020','Candare','Aries Mark ','',2020,'E','M','','','11 STEM','CABT','Angelito O. Candare','346 San Juan Ii, City Of General Trias Cavite','09203754847'),
(5,424500150092,'8-018-2019-2020','Canlas','Yul Guiller','Quion',2020,'E','M','','','11 STEM','CABT','Rowena P. Canlas','601 A San Juan I, City Of General Trias Cavite','09991007401'),
(6,424500150093,'8-019-2019-2020','Dela Cruz','Chris Jamil','',2020,'E','M','','','11 STEM','CABT','Maria Sheba A. Dela Cruz','Block 5 Lot 4 Birmingham Subd., Sampalucan, City Of General Trias Cavite','09776794399'),
(7,107960090106,'8-059-2019-2020','Macalalad','Summer','Najito',2020,'E','F','','','10','CABT','Grace N. Macalalad','253 Brgy. San Juan II, City of General Trias Cavite','09077465462')
;

-- 5.b. CABT Students View
    DROP VIEW students_vl;
    CREATE VIEW students_vl AS
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        , CONCAT(cs.last_name, ", ", cs.first_name) name
        , cv2.description status
        , "" gender
        , CONCAT(cs.grade_level, " - ", cs.section) level_section
        , DATE_FORMAT(cs.birthdate,'%M %d, %Y') birthdate
        , cs.address
        , cs.emergency_contact
        , cs.previous_school
        , cs.phone
        , cs.track
        , cs.strand
        , cs.email_address
        , cs.contact_email
        , cs.adviser
        , cs.schoology_pic
    FROM  students cs
        , sys_values cv2
    WHERE   
            cv2.value_set_name = 'CABT_ENROLL_STATUS' AND
            cv2.value_name = cs.status;

-- 5.b. CABT Students View
    CREATE VIEW cabt_student_v AS
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        ,   (
            CASE
                WHEN cs.middle_name = '' then CONCAT(cs.last_name, ", ", cs.first_name)
                ELSE CONCAT(cs.last_name, ", ", cs.first_name, " ", SUBSTRING(cs.middle_name, 1, 1), ".")
            END) AS name
        , cv2.description status
        , cv1.description gender
        , CONCAT(cv3.value_name, " - ", cv3.description) level_section
    FROM  cabt_students cs
        , cabt_values cv1
        , cabt_values cv2
        , cabt_values cv3
    WHERE   cv1.value_set_name = 'CABT_GENDER' AND
            cv1.value_name = cs.gender AND
            cv2.value_set_name = 'CABT_ENROLL_STATUS' AND
            cv2.value_name = cs.status AND
            cv3.value_set_name = 'CABT_GR_LEVEL' AND
            cv3.value_name = cs.grade_level;

-- 6. Value Sets
CREATE TABLE sys_values (
    VALUE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    VALUE_SET_NAME VARCHAR(50) NOT NULL,
    VALUE_NAME VARCHAR(255) NOT NULL,
    ENABLED_FLAG VARCHAR(255) NOT NULL,
    DESCRIPTION VARCHAR(255) NOT NULL,
    ATTRIBUTE1 VARCHAR(255),
    ATTRIBUTE2 VARCHAR(255),
    ATTRIBUTE3 VARCHAR(255),
    ATTRIBUTE4 VARCHAR(255),
    ATTRIBUTE5 VARCHAR(255),
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 7. Grades Table
CREATE TABLE grades (
    GRADE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    SUBJECT VARCHAR(255) NOT NULL,
    FIRST INT,
    SECOND INT,
    THIRD INT,
    FOURTH INT,
    ATTRIBUTE1 VARCHAR(255),
    ATTRIBUTE2 VARCHAR(255),
    ATTRIBUTE3 VARCHAR(255),
    ATTRIBUTE4 VARCHAR(255),
    ATTRIBUTE5 VARCHAR(255),
    last_updated_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_updated_by VARCHAR(255) NOT NULL
);

-- 7.a Grades Data
INSERT INTO grades (`GRADE_ID`,`SUBJECT`,`FIRST`,`SECOND`,`THIRD`,`FOURTH`,`ATTRIBUTE1`,`last_updated_by`)
VALUES
(1,'Filipino 10',97,99,99,99,'',1),
(2,'English 10',99,95,98,96,'',1),
(3,'Mathematics 10',99,99,98,97,'',1),
(4,'Science 10',90,95,94,96,'',1),
(5,'Araling Panlipunan (AP) 10',97,98,99,98,'',1),
(7,'Music',96,98,97,97,'MAPEH',1),
(8,'Arts',91,96,98,97,'MAPEH',1),
(9,'Physical Education',97,100,97,97,'MAPEH',1),
(10,'Health',96,89,100,96,'MAPEH',1),
(11,'Technology and Livelihood Education (TLE) 10',97,94,97,95,'',1),
(12,'Values Education and Christian Living (VE/CL) 10',93,91,93,93,'',1),
(13,'Elective 10 (Trigonometry)',98,97,99,98,'',1),
(14,'Computer 10',99,100,100,99,'',1)
;

-- 7.b. Student Link
alter table grades add student_id int;
update grades set student_id = 7;

-- 7.c. Grades View
--ROUND((nvl(cg.FIRST,0)+nvl(cg.SECOND,0)+nvl(cg.THIRD,0)+nvl(cg.FOURTH,0))/4,0) 
        , (
            CASE
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks

    CREATE VIEW grades_v AS
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        , cg.subject
        , nvl(cg.FIRST,'') first
        , nvl(cg.SECOND,'') second
        , nvl(cg.THIRD,'') third
        , nvl(cg.FOURTH,'') fourth
        , ROUND((nvl(cg.FIRST,0)+nvl(cg.SECOND,0))/2,0) final
        , (
            CASE
                WHEN ROUND((nvl(cg.FIRST,0)+nvl(cg.SECOND,0))/2,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  students cs
        , grades cg
    WHERE cs.student_num = cg.attribute4
    --AND cg.attribute4 = 'CABT-2020-1030-SA'

    --AND cg.attribute1 not in ('MAPEH','Computer')
    
    UNION
    SELECT cs.student_id 
        , cs.lrn
        , 'MAPEH' subject
        , ROUND(avg(cg.FIRST),0) FIRST
        , ROUND(avg(cg.SECOND),0) SECOND
        , ROUND(avg(cg.THIRD),0) THIRD
        , ROUND(avg(cg.FOURTH),0) FOURTH
        , ROUND((ROUND(avg(cg.FIRST),0)+ROUND(avg(cg.SECOND),0)+ROUND(avg(cg.THIRD),0)+ROUND(avg(cg.FOURTH),0))/4,0) FINAL
        , (
            CASE
                WHEN ROUND((ROUND(avg(cg.FIRST),0)+ROUND(avg(cg.SECOND),0)+ROUND(avg(cg.THIRD),0)+ROUND(avg(cg.FOURTH),0))/4,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  students cs
        , grades cg
    WHERE cs.student_id = cg.student_id
    AND cg.attribute1 = 'MAPEH'
    group by cs.student_id, cs.lrn
    UNION
    SELECT cs.student_id 
        , cs.lrn
        , cs.username
        , cg.subject
        , cg.FIRST
        , cg.SECOND
        , cg.THIRD
        , cg.FOURTH
        , ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) FINAL
        , (
            CASE
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  students cs
        , grades cg
    WHERE cs.student_id = cg.student_id
    AND cg.attribute1 = 'MAPEH'
    UNION
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        , cg.subject
        , cg.FIRST
        , cg.SECOND
        , cg.THIRD
        , cg.FOURTH
        , ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) FINAL
        , (
            CASE
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  students cs
        , grades cg
    WHERE cs.student_num = cg.attribute4
    AND cg.subject = 'Computer'
    ;

-- 7.d. Final Grades View

    CREATE VIEW grades_final_v AS
    SELECT cg.student_id 
        , cg.lrn
        , ROUND(AVG(cg.final),0) final
        , (
            CASE
                WHEN ROUND(AVG(cg.final),0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  grades_v cg
    WHERE subject not in ('Computer','MAPEH')
    group by cg.student_id, cg.lrn
    ;

-- 7.e. Values Grade Table
INSERT INTO grades (`GRADE_ID`,`SUBJECT`,`ATTRIBUTE1`,`ATTRIBUTE2`,`STUDENT_ID`,`FIRST`,`SECOND`,`THIRD`,`FOURTH`,`ATTRIBUTE3`,`last_updated_by`)
VALUES
(15,'Values','Maka-Diyos','Love of God / Faith in Divine Providence','7',89,90,90,90,'1',1),
(16,'Values','Maka-Diyos','Religious Tolerance','7',89,89,90,90,'2',1),
(17,'Values','Makatao','Physical and Mental Health','7',89,90,90,90,'3',1),
(18,'Values','Makatao','Creativity','7',89,90,90,90,'4',1),
(19,'Values','Makatao','Self-Discipline','7',89,89,89,89,'5',1),
(20,'Values','Makatao','Respect for Human Rights','7',89,89,89,89,'6',1),
(21,'Values','Makatao','Peaceful Involvement with Others','7',89,89,90,90,'7',1),
(22,'Values','Makakalikasan','Care for the Environment','7',89,90,90,89,'8',1),
(23,'Values','Makakalikasan','Proper Use of Resources','7',89,89,90,89,'9',1),
(24,'Values','Makabansa','Honesty and Integrity','7',89,89,89,89,'10',1),
(25,'Values','Makabansa','Freedom and Responsibility','7',89,90,90,89,'11',1),
(26,'Values','Makabansa','Leadership Qualities','7',89,90,90,89,'12',1),
(27,'Values','Makabansa','Pride as a Trinitarian','7',89,90,90,90,'13',1);

-- 7.f. Values Grade View
    CREATE VIEW grades_values_v AS       
    SELECT cs.student_id 
        , cs.lrn
        , cg.attribute1
        , cg.ATTRIBUTE2
        , cg.attribute3
        , cg.FIRST
        , (
            CASE
                WHEN cg.FIRST > 95 then "A"
                WHEN cg.FIRST between 90 and 94 then "A-"
                WHEN cg.FIRST between 85 and 89 then "B+"
                WHEN cg.FIRST between 80 and 84 then "B"
                WHEN cg.FIRST between 75 and 79 then "B-"
                ELSE "C"
            END) AS FIRST_A
        , cg.SECOND
        , (
            CASE
                WHEN cg.SECOND > 95 then "A"
                WHEN cg.SECOND between 90 and 94 then "A-"
                WHEN cg.SECOND between 85 and 89 then "B+"
                WHEN cg.SECOND between 80 and 84 then "B"
                WHEN cg.SECOND between 75 and 79 then "B-"
                ELSE "C"
            END) AS SECOND_A
        , cg.THIRD
        , (
            CASE
                WHEN cg.THIRD > 95 then "A"
                WHEN cg.THIRD between 90 and 94 then "A-"
                WHEN cg.THIRD between 85 and 89 then "B+"
                WHEN cg.THIRD between 80 and 84 then "B"
                WHEN cg.THIRD between 75 and 79 then "B-"
                ELSE "C"
            END) AS THIRD_A
        , cg.FOURTH
        , (
            CASE
                WHEN cg.FOURTH > 95 then "A"
                WHEN cg.FOURTH between 90 and 94 then "A-"
                WHEN cg.FOURTH between 85 and 89 then "B+"
                WHEN cg.FOURTH between 80 and 84 then "B"
                WHEN cg.FOURTH between 75 and 79 then "B-"
                ELSE "C"
            END) AS FOURTH_A
        , ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) FINAL
        , (
            CASE
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) > 95 then "A"
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) between 90 and 94 then "A-"
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) between 85 and 89 then "B+"
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) between 80 and 84 then "B"
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) between 75 and 79 then "B-"
                ELSE "C"
            END) AS FINAL_A
        , (
            CASE
                WHEN ROUND((cg.FIRST+cg.SECOND+cg.THIRD+cg.FOURTH)/4,0) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
    FROM  students cs
        , grades cg
    WHERE cs.student_id = cg.student_id
    AND cg.subject = 'Values'
    ;

----------------------------------------------------------------------------------
--OLD
    -- 4.a. CABT Value Set Table

INSERT INTO  sys_values  (`VALUE_ID`,`VALUE_SET_NAME`,`VALUE_NAME`,`ENABLED_FLAG`,`DESCRIPTION`) VALUES
(1,'CABT_GR_LEVEL','7','Y','Transfiguration'),
(2,'CABT_GR_LEVEL','8','Y','Assumption'),
(3,'CABT_GR_LEVEL','9','Y','Coronation'),
(4,'CABT_GR_LEVEL','10','Y','Holy Trinity'),
(5,'CABT_GR_LEVEL','11 STEM','Y','Piety'),
(6,'CABT_GR_LEVEL','11 ABM','Y','Fortitude'),
(7,'CABT_GR_LEVEL','12 STEM','Y','Wisdom'),
(8,'CABT_GR_LEVEL','12 ABM','Y','Counsel'),
(9,'CABT_SUBJ_CODE','ORALCOM','Y','Oral Communication in Context'),
(10,'CABT_SUBJ_CODE','GENMATH','Y','General Mathematics'),
(11,'CABT_SUBJ_CODE','KPSWKP','Y','Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino'),
(12,'CABT_SUBJ_CODE','ENLSCI','Y','Earth and Life Science'),
(13,'CABT_SUBJ_CODE','PERDEV','Y','Personal Development'),
(14,'CABT_SUBJ_CODE','PEH','Y','Physical Education and Health'),
(15,'CABT_SUBJ_CODE','PHILO','Y','introduction to Philosophy'),
(16,'CABT_SUBJ_CODE','RESDL1','Y','Research in Daily Life 1'),
(17,'CABT_SUBJ_CODE','ORGMAN','Y','Organization and Management'),
(18,'CABT_SUBJ_CODE','RWS','Y','Reading and Writing Skills'),
(19,'CABT_SUBJ_CODE','PPIITTP','Y','Pagbasa at Pagsusuri ng Iba\'T Ibang Teksto Tungo sa Pananaliksik'),
(20,'CABT_SUBJ_CODE','PHYSCI','Y','Physical Science'),
(21,'CABT_SUBJ_CODE','RESDL2','Y','Research in Daily Life 2'),
(22,'CABT_SUBJ_CODE','EMTECH','Y','Empowerment Technologies'),
(23,'CABT_SUBJ_CODE','FABM1','Y','Fundamentals of Accountancy, Business and Management 1 '),
(24,'CABT_SUBJ_CODE','UCSP','Y','Understanding Culture, Society and Politics'),
(25,'CABT_SUBJ_CODE','LARANG','Y','Filipino sa Piling Larang'),
(26,'CABT_SUBJ_CODE','ENTREP','Y','Entrepreneurship'),
(27,'CABT_SUBJ_CODE','BUSMATH','Y','Business Mathematics'),
(28,'CABT_SUBJ_CODE','FABM2','Y','Fundamental of Accountancy, Business and Management 2'),
(29,'CABT_SUBJ_CODE','BUSMKTG','Y','Principles of Marketing'),
(30,'CABT_SUBJ_CODE','BUSFIN','Y','Business Finance'),
(31,'CABT_SUBJ_CODE','VECL','Y','Values Education and Christian Living'),
(32,'CABT_SUBJ_CODE','MIL','Y','Media and information Literacy'),
(33,'CABT_SUBJ_CODE','21STLIT','Y','21st Century Literature from the Philippines and the World'),
(34,'CABT_SUBJ_CODE','CONTEMP','Y','Contemporary Philippine Arts from the Regions'),
(35,'CABT_SUBJ_CODE','PRACRES2','Y','Practical Research 2'),
(36,'CABT_SUBJ_CODE','BUSESR','Y','Business Ethics and Social Responsibility'),
(37,'CABT_SUBJ_CODE','APPECON','Y','Applied Economics'),
(38,'CABT_SUBJ_CODE','IMMERS','Y','Work Immersion'),
(39,'CABT_SUBJ_CODE','ESCI','Y','Earth Science'),
(40,'CABT_SUBJ_CODE','STATPROB','Y','Statistics and Probability'),
(41,'CABT_SUBJ_CODE','PRACRES1','Y','Practical Research 1'),
(42,'CABT_SUBJ_CODE','PRECALC','Y','Pre - Calculus'),
(43,'CABT_SUBJ_CODE','EAPP','Y','English For Academic and Professional Purposes'),
(44,'CABT_SUBJ_CODE','GENCHEM1','Y','General Chemistry 1'),
(45,'CABT_SUBJ_CODE','BCALC','Y','Basic Calculus'),
(46,'CABT_SUBJ_CODE','RESPROJ','Y','Research Project'),
(47,'CABT_SUBJ_CODE','GENCHEM2','Y','General Chemistry 2'),
(48,'CABT_SUBJ_CODE','GENBIO1','Y','General Biology 1'),
(49,'CABT_SUBJ_CODE','GENPHY1','Y','General Physics 1'),
(50,'CABT_SUBJ_CODE','DRRR','Y','Disaster Readiness and Risk Reduction'),
(51,'CABT_SUBJ_CODE','GENBIO2','Y','General Biology 2'),
(52,'CABT_SUBJ_CODE','GENPHY2','Y','General Physics 2'),
(53,'CABT_ENROLL_STATUS','E','Y','Enrolled'),
(54,'CABT_ENROLL_STATUS','P','Y','Promoted'),
(55,'CABT_ENROLL_STATUS','R','Y','Retained'),
(56,'CABT_ENROLL_STATUS','T','Y','Transferred'),
(57,'CABT_GENDER','F','Y','Female'),
(58,'CABT_GENDER','M','Y','Male'),
(59,'CABT_YESORNO','Y','Y','Yes'),
(60,'CABT_YESORNO','N','Y','No'),
(61,'CABT_SCHOOLS','CABT','Y','Centennial Academy of the Blessed Trinity'),
(62,'CABT_SCHOOLS','ASJ','Y','Academy of Saint John'),
(63,'CABT_SCHOOLS','FLA','Y','Fiat Lux Academe'),
(64,'CABT_SCHOOLS','CSF','Y','Colegio de San Francisco'),
(65,'CABT_PERIOD_STATUS','C','Y','Closed'),
(66,'CABT_PERIOD_STATUS','O','Y','Open'),
(67,'CABT_PERIOD_STATUS','F','Y','Future Period')
;

-- 5. CABT Calendar
CREATE TABLE cabt_calendar (
    PERIOD_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    PERIOD_YEAR INT NOT NULL,
    PERIOD_NUM INT NOT NULL,
    PERIOD_NAME VARCHAR(255) NOT NULL,
    START_DATE DATETIME NOT NULL,
    END_DATE DATETIME NOT NULL,
    NON_WORK_DAYS INT,
    CLASS_MONTH VARCHAR(255) NOT NULL,
    WORK_MONTH VARCHAR(255) NOT NULL,
    SEMESTER VARCHAR(255) NOT NULL,
    QUARTER VARCHAR(255) NOT NULL,
    PERIOD_STATUS VARCHAR(255) NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 5.a. CABT Calender Values
INSERT INTO cabt_calendar (`PERIOD_ID`,`PERIOD_YEAR`,`PERIOD_NUM`,`PERIOD_NAME`,`START_DATE`,`END_DATE`,`CLASS_MONTH`,`WORK_MONTH`,`SEMESTER`,`QUARTER`,`PERIOD_STATUS`)
VALUES
(1,2019,1,'Jun-2018','2018-06-01','2018-06-30','Y','Y','1','1','C'),
(2,2019,2,'Jul-2018','2018-07-01','2018-07-31','Y','Y','1','1','C'),
(3,2019,3,'Aug-2018','2018-08-01','2018-08-31','Y','Y','1','2','C'),
(4,2019,4,'Sep-2018','2018-09-01','2018-09-30','Y','Y','1','2','C'),
(5,2019,5,'Oct-2018','2018-10-01','2018-10-31','Y','Y','1','3','C'),
(6,2019,6,'Nov-2018','2018-11-01','2018-11-30','Y','Y','2','3','C'),
(7,2019,7,'Dec-2018','2018-12-01','2018-12-31','Y','Y','2','3','C'),
(8,2019,8,'Jan-2019','2019-01-01','2019-01-31','Y','Y','2','4','C'),
(9,2019,9,'Feb-2019','2019-02-01','2019-02-28','Y','Y','2','4','C'),
(10,2019,10,'Mar-2019','2019-03-01','2019-03-31','Y','Y','2','4','C'),
(11,2019,11,'Apr-2019','2019-04-01','2019-04-30','N','Y','N','N','C'),
(12,2019,12,'May-2019','2019-05-01','2019-05-31','N','Y','N','N','C'),
(13,2020,1,'Jun-2019','2019-06-01','2019-06-30','Y','Y','1','1','C'),
(14,2020,2,'Jul-2019','2019-07-01','2019-07-31','Y','Y','1','1','C'),
(15,2020,3,'Aug-2019','2019-08-01','2019-08-31','Y','Y','1','2','C'),
(16,2020,4,'Sep-2019','2019-09-01','2019-09-30','Y','Y','1','2','C'),
(17,2020,5,'Oct-2019','2019-10-01','2019-10-31','Y','Y','1','3','C'),
(18,2020,6,'Nov-2019','2019-11-01','2019-11-30','Y','Y','2','3','C'),
(19,2020,7,'Dec-2019','2019-12-01','2019-12-31','Y','Y','2','3','C'),
(20,2020,8,'Jan-2020','2020-01-01','2020-01-31','Y','Y','2','4','C'),
(21,2020,9,'Feb-2020','2020-02-01','2020-02-29','Y','Y','2','4','C'),
(22,2020,10,'Mar-2020','2020-03-01','2020-03-31','Y','Y','2','4','C'),
(23,2020,11,'Apr-2020','2020-04-01','2020-04-30','N','Y','N','N','C'),
(24,2020,12,'May-2020','2020-05-01','2020-05-31','N','Y','N','N','O'),
(25,2021,1,'Jun-2020','2020-06-01','2020-06-30','Y','Y','1','1','F'),
(26,2021,2,'Jul-2020','2020-07-01','2020-07-31','Y','Y','1','1','F'),
(27,2021,3,'Aug-2020','2020-08-01','2020-08-31','Y','Y','1','2','F'),
(28,2021,4,'Sep-2020','2020-09-01','2020-09-30','Y','Y','1','2','F'),
(29,2021,5,'Oct-2020','2020-10-01','2020-10-31','Y','Y','1','3','F'),
(30,2021,6,'Nov-2020','2020-11-01','2020-11-30','Y','Y','2','3','F'),
(31,2021,7,'Dec-2020','2020-12-01','2020-12-31','Y','Y','2','3','F'),
(32,2021,8,'Jan-2021','2021-01-01','2021-01-31','Y','Y','2','4','F'),
(33,2021,9,'Feb-2021','2021-02-01','2021-02-28','Y','Y','2','4','F'),
(34,2021,10,'Mar-2021','2021-03-01','2021-03-31','Y','Y','2','4','F'),
(35,2021,11,'Apr-2021','2021-04-01','2021-04-30','N','Y','N','N','F'),
(36,2021,12,'May-2021','2021-05-01','2021-05-31','N','Y','N','N','F'),
(37,2022,1,'Jun-2021','2021-06-01','2021-06-30','Y','Y','1','1','F'),
(38,2022,2,'Jul-2021','2021-07-01','2021-07-31','Y','Y','1','1','F'),
(39,2022,3,'Aug-2021','2021-08-01','2021-08-31','Y','Y','1','2','F'),
(40,2022,4,'Sep-2021','2021-09-01','2021-09-30','Y','Y','1','2','F'),
(41,2022,5,'Oct-2021','2021-10-01','2021-10-31','Y','Y','1','3','F'),
(42,2022,6,'Nov-2021','2021-11-01','2021-11-30','Y','Y','2','3','F'),
(43,2022,7,'Dec-2021','2021-12-01','2021-12-31','Y','Y','2','3','F'),
(44,2022,8,'Jan-2022','2022-01-01','2022-01-31','Y','Y','2','4','F'),
(45,2022,9,'Feb-2022','2022-02-01','2022-02-28','Y','Y','2','4','F'),
(46,2022,10,'Mar-2022','2022-03-01','2022-03-31','Y','Y','2','4','F'),
(47,2022,11,'Apr-2022','2022-04-01','2022-04-30','N','Y','N','N','F'),
(48,2022,12,'May-2022','2022-05-01','2022-05-31','N','Y','N','N','F');

-- 6. CABT Staff Table
CREATE TABLE cabt_staff (
    STAFF_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    EMPLOYEE_NUM VARCHAR(255) NOT NULL,
    LAST_NAME VARCHAR(255) NOT NULL,
    FIRST_NAME VARCHAR(255) NOT NULL,
    MIDDLE_NAME VARCHAR(255),
    DESIGNATION VARCHAR(255) NOT NULL,
    STATUS VARCHAR(255) NOT NULL,
    YEAR INT NOT NULL,
    GENDER VARCHAR(255) NOT NULL,
    BIRTHDATE DATETIME NOT NULL,
    EMERGENCY_CONTACT VARCHAR(255),
    Address VARCHAR(255),
    phone VARCHAR(255),
    SSS VARCHAR(255),
    PHILHEALTH VARCHAR(255),
    PAG_IBIG VARCHAR(255),
    TIN VARCHAR(255),
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 6.a. CABT Staff Table
INSERT INTO cabt_staff (`STAFF_ID`,`EMPLOYEE_NUM`,`LAST_NAME`,`FIRST_NAME`,`MIDDLE_NAME`,`DESIGNATION`,`STATUS`,`YEAR`,`GENDER`,`BIRTHDATE`,`EMERGENCY_CONTACT`,`Address`,`phone`)
VALUES
(1,'2018-083','Macalindong','Gilbert','','Teacher','E',2020,'M','1997-08-31','Irine Macalindong','Blk. 8 Lot 40 ACM Paramount, Navarro, General Trias City, Cavite','09481304302'),
(2,'2013-039','Maclang','Lyle Kenneth','Clamor','Teacher','E',2020,'M','1992-08-24','Aurora C. Maclang','B8 L21 Kensington 2, Lancaster New City, Navarro City Of Gen. Trias, Cavite','09175511438'),
(3,'2012-007','Lozares','Marie Jill','Maclang','Registrar','E',2020,'F','1976-02-19','Rodel M. Lozares','B62 L21 Grand Riverside Subd. Pasong Camachile City Of Gen. Trias, Cavite','09178859932'),
(4,'2012-031','Abueg','Gilbert Joseph','','Assistant to the Principal','E',2020,'M','1978-03-19','Aurora C. Maclang','B8 L21 Kensington 2, Lancaster New City, Navarro City Of Gen. Trias, Cavite','(046) 450-0805'),
(5,'2012-020','Maquiñana','Jay Gregory','','Teacher','E',2020,'M','1984-10-07','Aurora C. Maclang','B8 L21 Kensington 2, Lancaster New City, Navarro City Of Gen. Trias, Cavite','09175511438')
;

-- 6.b. Add Staff Status to Value Set
INSERT INTO  cabt_values  (`VALUE_ID`,`VALUE_SET_NAME`,`VALUE_NAME`,`ENABLED_FLAG`,`DESCRIPTION`)
VALUES
(68,'CABT_STAFF_STATUS','E','Y','Employed'),
(69,'CABT_STAFF_STATUS','R','Y','Resigned'),
(70,'CABT_STAFF_STATUS','T','Y','Terminated')
;

-- 6.c. Staff View
    CREATE VIEW cabt_staff_v AS
    SELECT cs.staff_id
        , cs.employee_num
        ,   (
            CASE
                WHEN cs.middle_name = '' then CONCAT(cs.last_name, ", ", cs.first_name)
                ELSE CONCAT(cs.last_name, ", ", cs.first_name, " ", SUBSTRING(cs.middle_name, 1, 1), ".")
            END) AS name
        , cs.designation
        , cv2.description status
        , cv1.description gender
    FROM  cabt_staff cs
        , cabt_values cv1
        , cabt_values cv2
    WHERE   cv1.value_set_name = 'CABT_GENDER' AND
            cv1.value_name = cs.gender AND
            cv2.value_set_name = 'CABT_STAFF_STATUS' AND
            cv2.value_name = cs.status;

-- 8. CABT Grade Levels Table
CREATE TABLE cabt_grade_levels (
    GR_LEVEL_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    GR_LEVEL_VALUE VARCHAR(255) NOT NULL,
    TRACK VARCHAR(255),
    STRAND VARCHAR(255),
    ADVISER_ID INT NOT NULL,
    PERIOD_YEAR INT NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 8.a. CABT Grade Levels Data
INSERT INTO cabt_grade_levels (`GR_LEVEL_ID`,`GR_LEVEL_VALUE`,`TRACK`,`STRAND`,`ADVISER_ID`,`PERIOD_YEAR`)
VALUES
(1,'11 STEM','ACAD','STEM',1,2020),
(2,'11 ABM','ACAD','ABM',1,2020),
(3,'12 STEM','ACAD','STEM',5,2020),
(4,'12 ABM','ACAD','ABM',5,2020)
;

-- 8.b. Add Track and Strand to Value Set
INSERT INTO  cabt_values  (`VALUE_ID`,`VALUE_SET_NAME`,`VALUE_NAME`,`ENABLED_FLAG`,`DESCRIPTION`)
VALUES
(71,'CABT_STRAND','STEM','Y','Science, Technology, Engineering, and Mathematics'),
(72,'CABT_STRAND','ABM','Y','Accountancy, Business and Management'),
(73,'CABT_STRAND','GAS','Y','General Academic Strand'),
(74,'CABT_STRAND','HUMSS','Y','Sports'),
(75,'CABT_STRAND','SPORTS','Y','Arts and Design'),
(76,'CABT_STRAND','ARTS','Y','Humanities and Social Sciences'),
(77,'CABT_STRAND','FISHERY','Y','Agri-Fishery Arts'),
(78,'CABT_STRAND','HOME ECO','Y','Home Economics'),
(79,'CABT_STRAND','INDUSTRY','Y','Industrial Arts'),
(80,'CABT_STRAND','ICT','Y','Information and Communications Technology'),
(81,'CABT_TRACK','ACAD','Y','Academic'),
(82,'CABT_TRACK','TVL','Y','Technical-Vocational-Livelihood'),
(83,'CABT_TRACK','SPORTS','Y','Sports'),
(84,'CABT_TRACK','ARTS','Y','Arts and Design')
;

-- 9. CABT Subjects Table
CREATE TABLE cabt_subjects (
    SUBJECT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    YEAR INT NOT NULL,
    SEM INT NOT NULL,
    GR_LEVEL_VALUE VARCHAR(255) NOT NULL,
    SUBJECT_CODE VARCHAR(255) NOT NULL,
    SUBJECT_TYPE VARCHAR(255) NOT NULL,
    SUBJECT_LEVEL VARCHAR(255) NOT NULL,
    TRACK VARCHAR(255) NOT NULL,
    STRAND VARCHAR(255) NOT NULL,
    start_time VARCHAR(255),
    end_time VARCHAR(255),
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- 9.a. CABT Subjects Data
INSERT INTO cabt_subjects (`SUBJECT_ID`,`YEAR`,`SEM`,`GR_LEVEL_VALUE`,`SUBJECT_CODE`,`SUBJECT_TYPE`,`SUBJECT_LEVEL`,`TRACK`,`STRAND`)
VALUES
(1,2020,2,'12 ABM','21STLIT','Core','SHS','ACAD','ABM'),
(2,2020,2,'12 STEM','21STLIT','Core','SHS','ACAD','STEM'),
(3,2020,2,'12 ABM','APPECON','Specialized','SHS','ACAD','ABM'),
(4,2020,2,'11 STEM','BCALC','Specialized','SHS','ACAD','STEM'),
(5,2020,2,'12 ABM','BUSESR','Specialized','SHS','ACAD','ABM'),
(6,2020,1,'12 ABM','BUSFIN','Specialized','SHS','ACAD','ABM'),
(7,2020,1,'12 ABM','BUSMKTG','Specialized','SHS','ACAD','ABM'),
(8,2020,1,'12 ABM','BUSMATH','Specialized','SHS','ACAD','ABM'),
(9,2020,2,'12 ABM','CONTEMP','Core','SHS','ACAD','ABM'),
(10,2020,2,'12 STEM','CONTEMP','Core','SHS','ACAD','STEM'),
(11,2020,2,'12 STEM','DRRR','Core','SHS','ACAD','STEM'),
(12,2020,1,'11 ABM','ENLSCI','Core','SHS','ACAD','ABM'),
(13,2020,1,'11 STEM','ESCI','Core','SHS','ACAD','STEM'),
(14,2020,2,'11 ABM','EMTECH','Applied','SHS','ACAD','ABM'),
(15,2020,2,'11 STEM','EMTECH','Applied','SHS','ACAD','STEM'),
(16,2020,2,'11 ABM','EAPP','Applied','SHS','ACAD','ABM'),
(17,2020,2,'11 STEM','EAPP','Applied','SHS','ACAD','STEM'),
(18,2020,1,'12 ABM','ENTREP','Applied','SHS','ACAD','ABM'),
(19,2020,1,'12 STEM','ENTREP','Applied','SHS','ACAD','STEM'),
(20,2020,1,'12 ABM','LARANG','Applied','SHS','ACAD','ABM'),
(21,2020,1,'12 STEM','LARANG','Applied','SHS','ACAD','STEM'),
(22,2020,1,'12 ABM','FABM2','Specialized','SHS','ACAD','ABM'),
(23,2020,2,'11 ABM','FABM1','Specialized','SHS','ACAD','ABM'),
(24,2020,1,'12 STEM','GENBIO1','Specialized','SHS','ACAD','STEM'),
(25,2020,2,'12 STEM','GENBIO2','Specialized','SHS','ACAD','STEM'),
(26,2020,2,'11 STEM','GENCHEM1','Specialized','SHS','ACAD','STEM'),
(27,2020,1,'12 STEM','GENCHEM2','Specialized','SHS','ACAD','STEM'),
(28,2020,1,'11 ABM','GENMATH','Core','SHS','ACAD','ABM'),
(29,2020,1,'11 STEM','GENMATH','Core','SHS','ACAD','STEM'),
(30,2020,1,'12 STEM','GENPHY1','Specialized','SHS','ACAD','STEM'),
(31,2020,2,'12 STEM','GENPHY2','Specialized','SHS','ACAD','STEM'),
(32,2020,1,'11 ABM','PHILO','Core','SHS','ACAD','ABM'),
(33,2020,1,'11 STEM','PHILO','Core','SHS','ACAD','STEM'),
(34,2020,1,'11 ABM','KPSWKP','Core','SHS','ACAD','ABM'),
(35,2020,1,'11 STEM','KPSWKP','Core','SHS','ACAD','STEM'),
(36,2020,2,'12 ABM','MIL','Core','SHS','ACAD','ABM'),
(37,2020,2,'12 STEM','MIL','Core','SHS','ACAD','STEM'),
(38,2020,1,'11 STEM','ORALCOM','Core','SHS','ACAD','STEM'),
(39,2020,1,'11 ABM','ORALCOM','Core','SHS','ACAD','ABM'),
(40,2020,1,'11 ABM','ORGMAN','Specialized','SHS','ACAD','ABM'),
(41,2020,2,'11 ABM','PPIITTP','Core','SHS','ACAD','ABM'),
(42,2020,2,'11 STEM','PPIITTP','Core','SHS','ACAD','STEM'),
(43,2020,1,'11 ABM','PERDEV','Core','SHS','ACAD','ABM'),
(44,2020,1,'11 STEM','PERDEV','Core','SHS','ACAD','STEM'),
(45,2020,2,'11 ABM','PEH','Core','SHS','ACAD','ABM'),
(46,2020,1,'12 STEM','PEH','Core','SHS','ACAD','STEM'),
(47,2020,1,'11 ABM','PEH','Core','SHS','ACAD','ABM'),
(48,2020,1,'12 ABM','PEH','Core','SHS','ACAD','ABM'),
(49,2020,2,'12 ABM','PEH','Core','SHS','ACAD','ABM'),
(50,2020,1,'11 STEM','PEH','Core','SHS','ACAD','STEM'),
(51,2020,2,'11 STEM','PEH','Core','SHS','ACAD','STEM'),
(52,2020,2,'12 STEM','PEH','Core','SHS','ACAD','STEM'),
(53,2020,2,'11 ABM','PHYSCI','Core','SHS','ACAD','ABM'),
(54,2020,1,'11 STEM','PRACRES1','Applied','SHS','ACAD','STEM'),
(55,2020,2,'12 ABM','PRACRES2','Applied','SHS','ACAD','ABM'),
(56,2020,2,'11 STEM','PRACRES2','Applied','SHS','ACAD','STEM'),
(57,2020,1,'11 STEM','PRECALC','Specialized','SHS','ACAD','STEM'),
(58,2020,2,'11 STEM','RWS','Core','SHS','ACAD','STEM'),
(59,2020,2,'11 ABM','RWS','Core','SHS','ACAD','ABM'),
(60,2020,1,'11 ABM','RESDL1','Applied','SHS','ACAD','ABM'),
(61,2020,2,'11 ABM','RESDL2','Applied','SHS','ACAD','ABM'),
(62,2020,1,'12 STEM','RESPROJ','Applied','SHS','ACAD','STEM'),
(63,2020,1,'11 ABM','STATPROB','Core','SHS','ACAD','ABM'),
(64,2020,1,'11 STEM','STATPROB','Core','SHS','ACAD','STEM'),
(65,2020,1,'12 STEM','UCSP','Core','SHS','ACAD','STEM'),
(66,2020,1,'12 ABM','UCSP','Core','SHS','ACAD','ABM'),
(67,2020,2,'11 ABM','VECL','Other_Subjects','SHS','ACAD','ABM'),
(68,2020,1,'12 STEM','VECL','Other_Subjects','SHS','ACAD','STEM'),
(69,2020,2,'12 STEM','VECL','Other_Subjects','SHS','ACAD','STEM'),
(70,2020,1,'12 ABM','VECL','Other_Subjects','SHS','ACAD','ABM'),
(71,2020,2,'12 ABM','VECL','Other_Subjects','SHS','ACAD','ABM'),
(72,2020,2,'11 STEM','VECL','Other_Subjects','SHS','ACAD','STEM'),
(73,2020,2,'12 ABM','IMMERS','Specialized','SHS','ACAD','ABM'),
(74,2020,2,'12 STEM','IMMERS','Specialized','SHS','ACAD','STEM')
;

-- 9.b. Add Subject Levels to Value Set
INSERT INTO  cabt_values  (`VALUE_ID`,`VALUE_SET_NAME`,`VALUE_NAME`,`ENABLED_FLAG`,`DESCRIPTION`)
VALUES
(85,'CABT_SUBJ_LVL','SHS','Y','Senior High School'),
(86,'CABT_SUBJ_LVL','JHS','Y','Junior High School'),
(87,'CABT_SUBJ_LVL','ELEM','Y','Elementary')
;

-- 9.c. CABT Subjects View
    CREATE VIEW cabt_subjects_v AS
    SELECT cs.subject_id 
        , CONCAT(cv1.value_name, " - ", cv1.description) level_section
        , cv2.description subject_name
        , cs.start_time
        , cs.end_time
    FROM  cabt_subjects cs
        , cabt_values cv1
        , cabt_values cv2
    WHERE   cv1.value_set_name = 'CABT_GR_LEVEL' AND
            cv1.value_name = cs.gr_level_value AND
            cv2.value_set_name = 'CABT_SUBJ_CODE' AND
            cv2.value_name = cs.subject_code;
        
alter table cabt_users add column last_updated_by VARCHAR(255);
alter table cabt_users add column staff_id VARCHAR(255);
alter table cabt_users add column student_id VARCHAR(255);
alter table cabt_users add column attribute1 VARCHAR(255);
update cabt_users set last_updated_by = 1 where user_id = 1;

-- 10. Database Health Check
create view cabt_db_check_v as
SELECT concat(table_schema) 'Database Name',
concat(round(SUM(data_length/power(1024,2)),2),'M') DATA,
concat(round(SUM(index_length/power(1024,2)),2),'M') 'INDEX',
concat(round(SUM(data_free/power(1024,2)),2),'M') 'DATA FREE',
concat(round(sum(data_free)/(SUM(data_length+index_length))*100,2)) '% FRAGMENTED',
concat(round(SUM(data_length+index_length)/power(1024,2),2),'M') TOTAL
FROM information_schema.TABLES
WHERE table_schema IN ('cabttest1')
GROUP BY table_schema;



-- 5.b. CABT Students View
    CREATE VIEW students_vl AS
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        , CONCAT(cs.last_name, ", ", cs.first_name) name
        , cv2.description status
        , cs.email_address
        , CONCAT(cs.grade_level, " - ", cs.section) level_section
        , cs.emergency_contact
        , cs.contact_email
        , cs.adviser
        , cs.schoology_pic
    FROM  students cs
        , sys_values cv2
    WHERE   cv2.value_set_name = 'CABT_ENROLL_STATUS' AND
            cv2.value_name = cs.status;



<p><iframe src="https://docs.google.com/spreadsheets/d/1Pan1o4uIdDL6Z8Jx_hcDcpqf02nPiJm-PlgJoUa6hwE/edit?usp=sharing&amp;headers=false" width="890" height="668"></iframe></p>
<p><span style="font-size: 18px;">External Link for updating via Google Sheets:&nbsp;<a href="https://docs.google.com/spreadsheets/d/1Pan1o4uIdDL6Z8Jx_hcDcpqf02nPiJm-PlgJoUa6hwE/edit?usp=sharing">Click here</a></span></p>

https://docs.google.com/spreadsheets/d/1Pan1o4uIdDL6Z8Jx_hcDcpqf02nPiJm-PlgJoUa6hwE/edit?usp=sharing


CREATE TABLE deportment_hs (
    DEPORTMENT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    STUDENT_ID VARCHAR(255) NOT NULL,
    QUARTER INT NOT NULL,
    MD1 FLOAT,
    MD2 FLOAT,
    MT1 FLOAT,
    MT2 FLOAT,
    MT3 FLOAT,
    MT4 FLOAT,
    MT5 FLOAT,
    MK1 FLOAT,
    MK2 FLOAT,
    MB1 FLOAT,
    MB2 FLOAT,
    MB3 FLOAT,
    MB4 FLOAT,
    UR FLOAT,
    R INT,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE deportment_elem(
    DEPORTMENT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    STUDENT_ID VARCHAR(255) NOT NULL,
    QUARTER INT NOT NULL,
    MD1 FLOAT,
    MD2 FLOAT,
    MT1 FLOAT,
    MT2 FLOAT,
    MT3 FLOAT,
    MT4 FLOAT,
    MK1 FLOAT,
    MB1 FLOAT,
    MB2 FLOAT,
    MB3 FLOAT,
    MB4 FLOAT,
    MB5 FLOAT,
    MB6 FLOAT,
    UR FLOAT,
    R INT,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

drop view deportment_elem_v;
create view deportment_elem_v as
(select student_id, quarter, 'MD1' code, 'Love of God / Faith in Divine Providence' value, (CASE WHEN MD1 >= 95  then 'A' WHEN MD1 between 90 and 94 then 'A-' WHEN MD1 between 85 and 89 then 'B+' WHEN MD1 between 80 and 84 then 'B' WHEN MD1 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MD2' code, 'Religious Tolerance' value, (CASE WHEN MD2 >= 95  then 'A' WHEN MD2 between 90 and 94 then 'A-' WHEN MD2 between 85 and 89 then 'B+' WHEN MD2 between 80 and 84 then 'B' WHEN MD2 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MT1' code, 'Helpfulness and Cooperation' value, (CASE WHEN MT1 >= 95  then 'A' WHEN MT1 between 90 and 94 then 'A-' WHEN MT1 between 85 and 89 then 'B+' WHEN MT1 between 80 and 84 then 'B' WHEN MT1 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MT2' code, 'Honesty and Truthfulness' value, (CASE WHEN MT2 >= 95  then 'A' WHEN MT2 between 90 and 94 then 'A-' WHEN MT2 between 85 and 89 then 'B+' WHEN MT2 between 80 and 84 then 'B' WHEN MT2 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MT3' code, 'Resourcefulness and Creativity' value, (CASE WHEN MT3 >= 95  then 'A' WHEN MT3 between 90 and 94 then 'A-' WHEN MT3 between 85 and 89 then 'B+' WHEN MT3 between 80 and 84 then 'B' WHEN MT3 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MT4' code, 'Sportsmanship and Humility' value, (CASE WHEN MT4 >= 95  then 'A' WHEN MT4 between 90 and 94 then 'A-' WHEN MT4 between 85 and 89 then 'B+' WHEN MT4 between 80 and 84 then 'B' WHEN MT4 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MK1' code, 'Cleanliness' value, (CASE WHEN MK1 >= 95  then 'A' WHEN MK1 between 90 and 94 then 'A-' WHEN MK1 between 85 and 89 then 'B+' WHEN MK1 between 80 and 84 then 'B' WHEN MK1 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB1' code, 'Love of Country and Patriotism' value, (CASE WHEN MB1 >= 95  then 'A' WHEN MB1 between 90 and 94 then 'A-' WHEN MB1 between 85 and 89 then 'B+' WHEN MB1 between 80 and 84 then 'B' WHEN MB1 between 75 and 79 then 'B-' WHEN MB1 < 75 then 'C' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB2' code, 'Industry' value, (CASE WHEN MB2 >= 95  then 'A' WHEN MB2 between 90 and 94 then 'A-' WHEN MB2 between 85 and 89 then 'B+' WHEN MB2 between 80 and 84 then 'B' WHEN MB2 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB3' code, 'Obedience' value, (CASE WHEN MB3 >= 95  then 'A' WHEN MB3 between 90 and 94 then 'A-' WHEN MB3 between 85 and 89 then 'B+' WHEN MB3 between 80 and 84 then 'B' WHEN MB3 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB4' code, 'Respect and Courtesy' value, (CASE WHEN MB4 >= 95  then 'A' WHEN MB4 between 90 and 94 then 'A-' WHEN MB4 between 85 and 89 then 'B+' WHEN MB4 between 80 and 84 then 'B' WHEN MB4 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB5' code, 'Promptness and Punctuality' value, (CASE WHEN MB5 >= 95  then 'A' WHEN MB5 between 90 and 94 then 'A-' WHEN MB5 between 85 and 89 then 'B+' WHEN MB5 between 80 and 84 then 'B' WHEN MB5 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
UNION (select student_id, quarter, 'MB6' code, 'Pride as a Trinitarian' value, (CASE WHEN MB6 >= 95  then 'A' WHEN MB6 between 90 and 94 then 'A-' WHEN MB6 between 85 and 89 then 'B+' WHEN MB6 between 80 and 84 then 'B' WHEN MB6 between 75 and 79 then 'B-' ELSE '' END) AS grade from deportment_elem)
;

create view deportment_hs_v as
(select student_id, quarter, 'MD1' code, 'Love of God / Faith in Divine Providence' value, (CASE WHEN md1 >= 95  then "A" WHEN md1 between 90 and 94 then "A-" WHEN md1 between 85 and 89 then "B+" WHEN md1 between 80 and 84 then "B" WHEN md1 between 75 and 79 then "B-" ELSE "C" END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MD2' code, 'Religious Tolerance' value, (CASE WHEN MD2 >= 95  then 'A' WHEN MD2 between 90 and 94 then 'A-' WHEN MD2 between 85 and 89 then 'B+' WHEN MD2 between 80 and 84 then 'B' WHEN MD2 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MT1' code, 'Physical and Mental Health' value, (CASE WHEN MT1 >= 95  then 'A' WHEN MT1 between 90 and 94 then 'A-' WHEN MT1 between 85 and 89 then 'B+' WHEN MT1 between 80 and 84 then 'B' WHEN MT1 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MT2' code, 'Creativity' value, (CASE WHEN MT2 >= 95  then 'A' WHEN MT2 between 90 and 94 then 'A-' WHEN MT2 between 85 and 89 then 'B+' WHEN MT2 between 80 and 84 then 'B' WHEN MT2 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MT3' code, 'Self-Discipline' value, (CASE WHEN MT3 >= 95  then 'A' WHEN MT3 between 90 and 94 then 'A-' WHEN MT3 between 85 and 89 then 'B+' WHEN MT3 between 80 and 84 then 'B' WHEN MT3 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MT4' code, 'Respect for Human Rights' value, (CASE WHEN MT4 >= 95  then 'A' WHEN MT4 between 90 and 94 then 'A-' WHEN MT4 between 85 and 89 then 'B+' WHEN MT4 between 80 and 84 then 'B' WHEN MT4 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MT5' code, 'Peaceful Involvement with Others' value, (CASE WHEN MT5 >= 95  then 'A' WHEN MT5 between 90 and 94 then 'A-' WHEN MT5 between 85 and 89 then 'B+' WHEN MT5 between 80 and 84 then 'B' WHEN MT5 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MK1' code, 'Care for the Environment' value, (CASE WHEN MK1 >= 95  then 'A' WHEN MK1 between 90 and 94 then 'A-' WHEN MK1 between 85 and 89 then 'B+' WHEN MK1 between 80 and 84 then 'B' WHEN MK1 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MK2' code, 'Proper Use of Resources' value, (CASE WHEN MK2 >= 95  then 'A' WHEN MK2 between 90 and 94 then 'A-' WHEN MK2 between 85 and 89 then 'B+' WHEN MK2 between 80 and 84 then 'B' WHEN MK2 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MB1' code, 'Honesty and Integrity' value, (CASE WHEN MB1 >= 95  then 'A' WHEN MB1 between 90 and 94 then 'A-' WHEN MB1 between 85 and 89 then 'B+' WHEN MB1 between 80 and 84 then 'B' WHEN MB1 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MB2' code, 'Freedom and Responsibility' value, (CASE WHEN MB2 >= 95  then 'A' WHEN MB2 between 90 and 94 then 'A-' WHEN MB2 between 85 and 89 then 'B+' WHEN MB2 between 80 and 84 then 'B' WHEN MB2 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MB3' code, 'Leadership Qualities' value, (CASE WHEN MB3 >= 95  then 'A' WHEN MB3 between 90 and 94 then 'A-' WHEN MB3 between 85 and 89 then 'B+' WHEN MB3 between 80 and 84 then 'B' WHEN MB3 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
UNION (select student_id, quarter, 'MB4' code, 'Pride as a Trinitarian' value, (CASE WHEN MB4 >= 95  then 'A' WHEN MB4 between 90 and 94 then 'A-' WHEN MB4 between 85 and 89 then 'B+' WHEN MB4 between 80 and 84 then 'B' WHEN MB4 between 75 and 79 then 'B-' ELSE 'C' END) AS grade from deportment_hs)
;

select t1.student_id, t1.value, nvl(t1.grade,'') as '1st', nvl(t2.grade,'') as '2nd' 
from deportment_v t1,
deportment_v t2
where t1.quarter = 1
and t2.quarter(+) = 2
;
and t1.student_id = t2.student_id(+)
and t1.value = t2.value

(select student_id, value, nvl(grade,'') as '1st' from deportment_v where quarter = 1)
UNION ALL (select student_id, value, nvl(grade,'') as '2nd' from deportment_v where quarter = 2)

,
(select student_id, value, nvl(grade,'') as '3rd' from deportment_v where quarter = 3) as t3,
(select student_id, value, nvl(grade,'') as '4th' from deportment_v where quarter = 4) as t4;

, nvl(t2.2nd,null), nvl(t3.3rd,null), nvl(t4.4th,null), 'final' FROM

CREATE TABLE deport_type (
    DEPORT_TYPE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CODE VARCHAR(255) NOT NULL,
    DESCRIPTION VARCHAR(255) NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

DROP VIEW deportment_vl;
CREATE VIEW deportment_vl AS
    SELECT cs.student_id 
        , cs.lrn
        , cs.student_num
        , cg.subject
        , nvl(cg.attribute6,'') first
        , nvl(cg.attribute7,'') second
        , ROUND((cg.first+cg.second)/2,0) sem1
        , (
            CASE
                WHEN ROUND((cg.first+cg.second)/2,0) >= 95 then "A"
                WHEN ROUND((cg.first+cg.second)/2,0) between 90 and 94 then "A-"
                WHEN ROUND((cg.first+cg.second)/2,0) between 85 and 89 then "B+"
                WHEN ROUND((cg.first+cg.second)/2,0) between 80 and 84 then "B"
                WHEN ROUND((cg.first+cg.second)/2,0) between 75 and 79 then "B-"
                ELSE "C"
            END) AS sem1_A
        , nvl(cg.attribute8,'') third
        , nvl(cg.attribute9,'') fourth
        , ROUND((cg.third+cg.fourth)/2,0) sem2
        , (
            CASE
                WHEN ROUND((cg.third+cg.fourth)/2,0) >= 95 then "A"
                WHEN ROUND((cg.third+cg.fourth)/2,0) between 90 and 94 then "A-"
                WHEN ROUND((cg.third+cg.fourth)/2,0) between 85 and 89 then "B+"
                WHEN ROUND((cg.third+cg.fourth)/2,0) between 80 and 84 then "B"
                WHEN ROUND((cg.third+cg.fourth)/2,0) between 75 and 79 then "B-"
                ELSE "C"
            END) AS sem2_A
        , "" final
    FROM  students cs
        , grades cg
    WHERE cs.student_num = cg.attribute4
    and subject = 'Deportment Grade'
    ;

select *
from sys_values where value_set_name = 'CABT_SCHOOL_DAYS'

update sys_values set attribute1 = '5', attribute2 = 'AUG', attribute3 = '1', attribute4 = '2020', attribute5 = "202008" where value_id = 88;
update sys_values set attribute1 = '24', attribute2 = 'SEP', attribute3 = '1', attribute4 = '2020', attribute5 = "202009" where value_id = 89; 
update sys_values set attribute1 = '12', attribute2 = 'OCT', attribute3 = '1', attribute4 = '2020', attribute5 = "202010" where value_id = 90;

UNION
select "DAYS PRESENT" type,
    (select sum(attribute1) from sys_values where attribute2 = 'AUG' and attribute4 = '2020') AUG,
    (select sum(attribute1) from sys_values where attribute2 = 'SEP' and attribute4 = '2020') SEP,
    (select sum(attribute1) from sys_values where attribute2 = 'OCT' and attribute4 = '2020') OCT,
    (select sum(attribute1) from sys_values where attribute4 = '2020') total
FROM DUAL
UNION
select "DAYS ABSENT" type,
    (select student_id, count(*) from attendance where date like '202008%' and quarter = 1 and status = 'Absent' group by student_id) AUG,
    (select count(*) from attendance where date like '202009%' and quarter = 1) SEP,
    (select count(*) from attendance where date like '202010%' and quarter = 1) OCT,
    (select sum(attribute1) from sys_values where attribute4 = '2020') total
FROM DUAL
UNION
select "DAYS TARDY" type,
    (select student_id, count(*) from attendance where date like '202008%' and quarter = 1 and status = 'Late' group by student_id) AUG,
    (select sum(attribute1) from sys_values where attribute2 = 'SEP' and attribute4 = '2020') SEP,
    (select sum(attribute1) from sys_values where attribute2 = 'OCT' and attribute4 = '2020') OCT,
    (select sum(attribute1) from sys_values where attribute4 = '2020') total
FROM DUAL
;

CREATE TABLE attendance (
    ATTENDANCE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    STUDENT_ID VARCHAR(255) NOT NULL,
    DATE VARCHAR(255) NOT NULL,
    STATUS VARCHAR(255) NOT NULL,
    QUARTER INT NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE attendance_all (
    ATTENDANCE_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    STUDENT_NUM VARCHAR(255) NOT NULL,
    FIRST_NAME VARCHAR(255) NOT NULL,
    LAST_NAME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    SUBJECT VARCHAR(255) NOT NULL,
    SUBJECT_CODE VARCHAR(255) NOT NULL,
    SECTION_NAME VARCHAR(255),
    SECTION_CODE VARCHAR(255),
    SECTION_SCHOOL_CODE VARCHAR(255),
    SCHOOL_ID INT,
    SCHOOL_TITLE VARCHAR(255) NOT NULL,
    RECORD_DATE INT,
    STATUS VARCHAR(255) NOT NULL,
    update_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

TRUNCATE attendance_all;
="INSERT INTO attendance_all (STUDENT_NUM, FIRST_NAME, LAST_NAME, EMAIL, SUBJECT, SUBJECT_CODE, SECTION_NAME, SECTION_CODE, SCHOOL_ID, SCHOOL_TITLE, RECORD_DATE, STATUS) VALUES "
="('"&A2&"','"&B2&"','"&C2&"','"&D2&"','"&E2&"','"&F2&"','"&H2&"','"&I2&"',"&K2&",'"&L2&"',"&M2&",'"&N2&"'),"

Select a.student_num, display_name, count(*) subject_absences, (count(*)/(aug+sep+oct+nov+dece+jan+feb))*100 percent_absent
from attendance_all a, attendance_q1 b, subjects c
where status = 'ABSENT'
and a.student_num = b.student_num
and a.student_num = 'CABT-2020-1171-CA'
and a.subject = c.subject
and b.description = 'DAYS ABSENT'
group by a.student_num, c.subj_order

select student_id
    , (
    CASE
        WHEN SUBSTRING(attendance_date,1,6) = '202008' then "AUG"
        WHEN SUBSTRING(attendance_date,1,6) = '202009' then "SEP"
        WHEN SUBSTRING(attendance_date,1,6) = '202010' then "OCT"
    END) as month
    , count(*) as count
from attendance
where status = 'Late'
group by student_id, SUBSTRING(attendance_date,1,6)
order by student_id, SUBSTRING(attendance_date,1,6)
;

select * from (
select distinct student_num, 'AUG' month, 
((select attribute1 from sys_values where value_set_name = 'CABT_SCHOOL_DAYS' and attribute5 = '202008') - nvl(b.count,0)) as count
from students a
LEFT OUTER JOIN (
select student_id
    , SUBSTRING(attendance_date,1,6)
    , nvl(count(*),0) as count
from attendance
where status = 'Absent'
and SUBSTRING(attendance_date,1,6) like '202008%'
group by student_id, SUBSTRING(attendance_date,1,6)
order by student_id, SUBSTRING(attendance_date,1,6)
) b on a.student_num = b.student_id
UNION
select distinct student_num, 'SEP' month, 
((select attribute1 from sys_values where value_set_name = 'CABT_SCHOOL_DAYS' and attribute5 = '202009') - nvl(b.count,0)) as count
from students a
LEFT OUTER JOIN (
select student_id
    , SUBSTRING(attendance_date,1,6)
    , nvl(count(*),0) as count
from attendance
where status = 'Absent'
and SUBSTRING(attendance_date,1,6) like '202009%'
group by student_id, SUBSTRING(attendance_date,1,6)
order by student_id, SUBSTRING(attendance_date,1,6)
) b on a.student_num = b.student_id
UNION
select distinct student_num, 'OCT' month, 
((select attribute1 from sys_values where value_set_name = 'CABT_SCHOOL_DAYS' and attribute5 = '202010') - nvl(b.count,0)) as count
from students a
LEFT OUTER JOIN (
select student_id
    , SUBSTRING(attendance_date,1,6)
    , nvl(count(*),0) as count
from attendance
where status = 'Absent'
and SUBSTRING(attendance_date,1,6) like '202010%'
group by student_id, SUBSTRING(attendance_date,1,6)
order by student_id, SUBSTRING(attendance_date,1,6)
) b on a.student_num = b.student_id
) a WHERE student_num = 'CABT-2020-1173-CG'
;

-- SCHOOL DAYS
select student_num, "SCHOOL DAYS" type,
    (select sum(attribute1) from sys_values where attribute2 = 'AUG' and attribute4 = '2020') AUG,
    (select sum(attribute1) from sys_values where attribute2 = 'SEP' and attribute4 = '2020') SEP,
    (select sum(attribute1) from sys_values where attribute2 = 'OCT' and attribute4 = '2020') OCT,
    (select sum(attribute1) from sys_values where attribute4 = '2020') total
from students
;

-- DAYS PRESENT
create view days_present as
select student_id
    , (
    CASE
        WHEN SUBSTRING(attendance_date,1,6) = '202008' then "AUG"
        WHEN SUBSTRING(attendance_date,1,6) = '202009' then "SEP"
        WHEN SUBSTRING(attendance_date,1,6) = '202010' then "OCT"
    END) as month
    , count(*) as count
from attendance
where status = 'Absent'
group by student_id, SUBSTRING(attendance_date,1,6)
order by student_id, SUBSTRING(attendance_date,1,6)
;

select student_num, "DAYS ABSENT" type,
    (select sum(count) from days_present where month = 'AUG') AUG,
    (select sum(count) from days_present where month = 'SEP') SEP,
    (select sum(count) from days_present where month = 'OCT') OCT,
    (select sum(attribute1) from sys_values where attribute4 = '2020') total

;

update students set schoology_pic = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1200px-No_image_available.svg.png" where schoology_pic is null;
update sys_users set fb_id = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1200px-No_image_available.svg.png" where fb_id is null;
update faculty set schoology_pic = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1200px-No_image_available.svg.png" where schoology_pic is null;


                

                (SELECT
                   `subject`, `first`, `SECOND`, `THIRD`, `FOURTH`,`FINAL`,`remarks`
                FROM
                    grades_v
                WHERE
                    student_num= '".$this->username."'
                AND subject NOT IN ('Deportment Grade','Music','Arts','Physical Education','Health')
                AND subject NOT LIKE '%VE/CL'
                AND subject NOT LIKE '%MAPEH'
                AND subject NOT LIKE '%Computer')
                UNION
                (SELECT
                   `subject`
                   , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->username."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                            ,(ROUND((select first from grades_v where student_num= '".$this->username."' AND subject LIKE '%VE/CL' )*0.5 
                                + (select first from grades_v where student_num= '".$this->username."' AND subject = 'Deportment Grade' )*0.5,0) + 1)
                            ,(ROUND((select first from grades_v where student_num= '".$this->username."' AND subject LIKE '%VE/CL' )*0.5 
                                + (select first from grades_v where student_num= '".$this->username."' AND subject = 'Deportment Grade' )*0.5,0))
                    ) first
                   , `SECOND`, `THIRD`, `FOURTH`
                   , IF(((select convert(mod(avg(first),1)*10,SIGNED) from grades_v where student_num= '".$this->username."' AND (subject LIKE '%VE/CL' OR subject = 'Deportment Grade')) >= 5)
                            ,(ROUND((select first from grades_v where student_num= '".$this->username."' AND subject LIKE '%VE/CL' )*0.5 
                                + (select first from grades_v where student_num= '".$this->username."' AND subject = 'Deportment Grade' )*0.5,0) + 1)
                            ,(ROUND((select first from grades_v where student_num= '".$this->username."' AND subject LIKE '%VE/CL' )*0.5 
                                + (select first from grades_v where student_num= '".$this->username."' AND subject = 'Deportment Grade' )*0.5,0))
                    ) final
                   ,`remarks`
                FROM
                    grades_v
                WHERE
                    student_num= '".$this->username."'
                AND subject LIKE '%VE/CL')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject like '%MAPEH')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Music')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Arts')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Physical Education')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Health')
                UNION (SELECT `subject`, first, `SECOND`, `THIRD`, `FOURTH`, final, `remarks` FROM grades_v WHERE student_num= '".$this->username."' AND subject = 'Computer')
                ;

CREATE TABLE subjects(
    SUBJECT_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    staff_num VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    level VARCHAR(255) NOT NULL,
    section VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE faculty(
    faculty_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    FACULTY_NUM VARCHAR(255) NOT NULL,
    LAST_NAME VARCHAR(255) NOT NULL,
    FIRST_NAME VARCHAR(255) NOT NULL,
    MIDDLE_NAME VARCHAR(255),
    DESIGNATION VARCHAR(255) NOT NULL,
    STATUS VARCHAR(255) NOT NULL,
    YEAR VARCHAR(255) NOT NULL,
    GENDER VARCHAR(255) NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

drop view faculty_grades_q1_v;
create view faculty_grades_q1_v as
select a.grade_id, b.student_num student_num, c.staff_num staff_num,a.subject subject, concat(b.last_name,', ',b.first_name) name
, (
            CASE
                WHEN ROUND(a.first) > 74 then ROUND(a.first)
                ELSE "70"
            END) AS first
, (
            CASE
                WHEN ROUND(a.first) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
, CONCAT(c.first_name,' ',c.last_name) subject_teacher
, b.grade_level
, b.section
from grades a, students b, subjects c
where a.subject = c.subject 
and a.attribute4 = b.student_num
;

drop view faculty_grades_q2_v;
create view faculty_grades_q2_v as
select a.grade_id, b.student_num student_num, c.staff_num staff_num,a.subject subject, concat(b.last_name,', ',b.first_name) name
, (
            CASE
                WHEN ROUND(a.second) > 74 then ROUND(a.second)
                ELSE "70"
            END) AS second
, (
            CASE
                WHEN ROUND(a.second) > 74 then "Passed"
                ELSE "Failed"
            END) AS remarks
, CONCAT(c.first_name,' ',c.last_name) subject_teacher
, b.grade_level
, b.section
from grades a, students b, subjects c
where a.subject = c.subject 
and a.attribute4 = b.student_num
;

and c.staff_num = 'CABT-2020-0012-ML'


delete from grades where subject NOT IN ('Deportment Grade'),'Music','Arts','Physical Education','Health')
                AND subject NOT LIKE '%MAPEH'
                ;

SELECT `student_num`, `subject`, `name`, `first`, `remarks`
            from faculty_grades_v
            where remarks = 'Failed'
            order by name,subject,first;

drop view grades_q1_piety_v;
create view grades_q1_piety_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Pre-Calculus') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - General Mathematics') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Oral Communication in Context') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - Earth Science') then first else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Empowerment Technologies') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Personal Development') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino') then first else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Filipino sa Piling Larang') then first else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then first else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Piety'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q1_piety_v_final;
create view grades_q1_piety_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09+sub10)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09+sub10)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09+sub10)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09+sub10)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09+sub10)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q1_piety_v gq1pv
;

drop view grades_q1_fort_v;
create view grades_q1_fort_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - General Mathematics') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Oral Communication in Context') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Empowerment Technologies') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - Organization and Management') then first else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - VE/CL') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - Personal Development') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Physical Science') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino') then first else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Filipino sa Piling Larang') then first else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then first else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Fortitude'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_fort_v_final;
create view grades_q1_fort_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub07+sub08+sub09+sub10)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub07+sub08+sub09+sub10)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub07+sub08+sub09+sub10)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub07+sub08+sub09+sub10)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub07+sub08+sub09+sub10)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q1_fort_v gq1fv
;

select *
from grades_v
where student_num = 'CABT-2020-1140-AB'
;

-- Grade 12 start
drop view grades_q1_wis_v;
create view grades_q1_wis_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - General Chemistry 2') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - General Physics 1') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Practical Research 2') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - General Biology 1') then first else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - Entrepreneurship') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - VE/CL') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Understanding Culture, Society and Politics') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - English For Academic and Professional Purposes') then first else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then first else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Wisdom'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q1_wis_v_final;
create view grades_q1_wis_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_wis_v
;

drop view grades_q1_coun_v;
create view grades_q1_coun_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Fundamental of Accountancy, Business and Management 2') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Applied Economics') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Practical Research 2') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Principles of Marketing') then first else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - Entrepreneurship') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - VE/CL') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Understanding Culture, Society and Politics') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - English For Academic and Professional Purposes') then first else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then first else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Counsel'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_coun_v_final;
create view grades_q1_coun_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub08+sub09)/8,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_coun_v
;

--Grade 10 START
drop view grades_q1_10_v;
create view grades_q1_10_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='10 - Mathematics') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='10 - Trigonometry') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='10 - Filipino') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='10 - TLE') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='10 - MAPEH') then first else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='10 - VE/CL') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='10 - Araling Panlipunan') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='10 - Science') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='10 - English') then first else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='10 - Computer') then first else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then first else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Holy Trinity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_10_v_final;
create view grades_q1_10_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_10_v
;

--Grade 9 START
drop view grades_q1_9_v;
create view grades_q1_9_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='9 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='9 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='9 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='9 - TLE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='9 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='9 - VE/CL') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='9 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='9 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='9 - Journalism') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='9 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Coronation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_9_v_final;
create view grades_q1_9_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_9_v
;

--Grade 8 START
drop view grades_q1_8_v;
create view grades_q1_8_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='8 - VE/CL') then first else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='8 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='8 - TLE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='8 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='8 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='8 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='8 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='8 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='8 - Technical Writing') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='8 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Assumption'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_8_v_final;
create view grades_q1_8_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_8_v
;

--Grade 7 START
drop view grades_q1_7_v;
create view grades_q1_7_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='7 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='7 - TLE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='7 - VE/CL') then first else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='7 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='7 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='7 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='7 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='7 - Speech & Drama') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='7 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='7 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Transfiguration'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_7_v_final;
create view grades_q1_7_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_7_v
;

--Grade 6 START
drop view grades_q1_6_v;
create view grades_q1_6_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='6 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='6 - TLE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='6 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='6 - VE/CL') then first else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='6 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='6 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='6 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='6 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='6 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='6 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Corpus Christi'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_6_v_final;
create view grades_q1_6_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_6_v
;

--Grade 5 START
drop view grades_q1_5_v;
create view grades_q1_5_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='5 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='5 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='5 - HELE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='5 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='5 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='5 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='5 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='5 - VE/CL') then first else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='5 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='5 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Resurrection'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_5_v_final;
create view grades_q1_5_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_5_v
;

--Grade 4 START
drop view grades_q1_4_v;
create view grades_q1_4_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='4 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='4 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='4 - HELE') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='4 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='4 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='4 - VE/CL') then first else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='4 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='4 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='4 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='4 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Presentation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_4_v_final;
create view grades_q1_4_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_4_v
;

--Grade 3 START
drop view grades_q1_3_v;
create view grades_q1_3_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='3 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='3 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='3 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='3 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='3 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='3 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='3 - VE/CL') then first else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='3 - Mother Tongue') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='3 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='3 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Nativity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_3_v_final;
create view grades_q1_3_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_3_v
;

--Grade 2 START
drop view grades_q1_2_v;
create view grades_q1_2_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='2 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='2 - VE/CL') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='2 - Mother Tongue') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='2 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='2 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='2 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='2 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='2 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='2 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='2 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Visitation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_2_v_final;
create view grades_q1_2_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_2_v
;

--Grade 1 START
drop view grades_q1_1_v;
create view grades_q1_1_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='1 - English') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='1 - VE/CL') then first else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='1 - Mother Tongue') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='1 - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='1 - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='1 - Araling Panlipunan') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='1 - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='1 - Penmanship') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='1 - MAPEH') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='1 - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then first else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Annunciation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_1_v_final;
create view grades_q1_1_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_1_v
;

--kinder START
drop view grades_q1_kinder_v;
create view grades_q1_kinder_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='K - Reading') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='K - Mathematics') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub02'
, ifnull(round(max(case when (a.subject='K - VE/CL') then first*0.6 else NULL end) + max(case when (a.subject='Deportment Grade') then first*0.4 else NULL end),0),"") as 'sub03'
, ifnull(max(case when (a.subject='K - Filipino') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='K - Science') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='K - Language') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='K - Kindergraph') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='K - Computer') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Hope'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q1_kinder_v_final;
create view grades_q1_kinder_v_final as
select *, ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07)/7,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07)/7,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07)/7,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07)/7,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_kinder_v
;

CREATE TABLE attendance_q1(
    attendance_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_num VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    quarter INT NOT NULL,
    AUG INT NOT NULL,
    SEP INT NOT NULL,
    OCT INT NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

Select description, aug, sep, oct, (aug+sep+oct) total from attendance_q1 where student_num = 'DEFAULT' UNION
Select description, aug, sep, oct, (aug+sep+oct) total from attendance_q1 where description = 'DAYS PRESENT' and student_num = '".$this->username."' UNION
Select description, aug, sep, oct, (aug+sep+oct) total from attendance_q1 where description = 'DAYS ABSENT' and student_num = '".$this->username."' UNION
Select description, aug, sep, oct, (aug+sep+oct) total from attendance_q1 where description = 'DAYS TARDY' and student_num = '".$this->username."'
;

drop view grades_q1_rank_v;
create view grades_q1_rank_v as
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_1_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_2_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_3_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_4_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_5_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_6_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_7_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_8_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_9_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_10_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_coun_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_fort_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_piety_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q1_wis_v_final	;

CREATE TABLE sys_user_logs (
    user_log_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    login_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

https://994a584442ae.ngrok.io/school/login/login.php

delete from grades where subject NOT IN ('Deportment Grade','Music','Arts','Physical Education','Health')
AND subject NOT LIKE '%MAPEH'
;

delete from grades where subject = '11 - Pre-Calculus';
select * from grades where subject = '11 - Pre-Calculus';

delete from grades where subject IN ('Deportment Grade');
truncate table deportment_elem;
truncate table deportment_hs;

update sys_users set enabled_flag = 'Y' where username like 'CABT-2020-1%'; -- Enable
update sys_users set enabled_flag = 'N' where username like 'CABT-2020-1%'; -- Disable
update sys_users set enabled_flag = 'N' where username = 'CABT-2020-1172-VA';

select last_name, first_name, a.* from grades_q1_rank_v a, students b where a.student_num = b.student_num and award <> ' ';

truncate attendance_q1;

select distinct a.username, c.last_name, c.first_name, CONCAT(c.grade_level,' - ',c.section) grade_level, min(a.login_date) login_date
from sys_user_logs a, sys_users b, students c
where a.username = b.username
and DATE_FORMAT(a.login_date, '%Y-%m-%d') = DATE_FORMAT(CURDATE(), '%Y-%m-%d')
and c.student_num like 'CABT-2020-1%'
and c.student_num = b.username
group by a.username, b.description
order by CONCAT(c.grade_level,' - ',c.section),c.last_name,c.first_name

select count(distinct username) from sys_user_logs 
where username like 'CABT-2020-1%'
and DATE_FORMAT(login_date, '%Y-%m-%d') = DATE_FORMAT(CURDATE()-1, '%Y-%m-%d');

select grade_level, count(*) from (  
select distinct b.username, CONCAT(c.grade_level,' - ',c.section) grade_level
from sys_user_logs a, sys_users b, students c
where a.username = b.username
and DATE_FORMAT(a.login_date, '%Y-%m-%d') = DATE_FORMAT(CURDATE(), '%Y-%m-%d')
and c.student_num like 'CABT-2020-1%'
and c.student_num = b.username
group by a.username, CONCAT(c.grade_level,' - ',c.section)
) as grade_view
group by grade_level

select student_num, c.last_name, c.first_name, CONCAT(c.grade_level,' - ',c.section) grade_level from students c where student_num not in (select distinct username from sys_user_logs 
where username like 'CABT-2020-1%'
and DATE_FORMAT(login_date, '%Y-%m-%d') = DATE_FORMAT(CURDATE()-1, '%Y-%m-%d'))
and c.grade_level <> 'Kinder'
order by CONCAT(c.grade_level,' - ',c.section),c.last_name,c.first_name

SELECT a.student_id, a.value, a.grade first, b.grade second
FROM deportment_hs_v a, deportment_hs_v b
WHERE a.student_id= '".$this->username."'
AND a.student_id = b.student_id
AND a.code = b.code
AND a.code like 'MD%'
AND a.quarter = 1
AND b.quarter = 2

                --student_id= '".$this->username."'

drop view grades_rank_v;
create view grades_rank_v as
select '1st' quarter, a.* from grades_q1_rank_v a
UNION
select '2nd' quarter, b.* from grades_q2_rank_v b
UNION
select '3rd' quarter, b.* from grades_q3_rank_v b
;

select a.student_num, last_name, first_name, description, aug, sep, oct, nov, dece from attendance_q1 a, students b
where a.student_num = b.student_num
and grade_level like 'Grade 11%'
order by last_name

drop view grades_q2_piety_v;
create view grades_q2_piety_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Pre-Calculus') then second else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - General Mathematics') then second else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then second else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Oral Communication in Context') then second else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - Earth Science') then second else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Empowerment Technologies') then second else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then second else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Personal Development') then second else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino') then second else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Filipino sa Piling Larang') then second else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then second else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Piety'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q2_piety_v_final;
create view grades_q2_piety_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q2_piety_v gq2pv
;

drop view grades_q2_fort_v;
create view grades_q2_fort_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - General Mathematics') then second else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then second else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Oral Communication in Context') then second else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Empowerment Technologies') then second else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - Organization and Management') then second else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - VE/CL') then second else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - Personal Development') then second else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Physical Science') then second else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino') then second else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Filipino sa Piling Larang') then second else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then second else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Fortitude'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_fort_v_final;
create view grades_q2_fort_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q2_fort_v gq2fv
;

select *
from grades_v
where student_num = 'CABT-2020-1140-AB'
;

-- Grade 12 start
drop view grades_q2_wis_v;
create view grades_q2_wis_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then second else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - General Chemistry 2') then second else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - General Physics 1') then second else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Practical Research 2') then second else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - General Biology 1') then second else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - Entrepreneurship') then second else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - VE/CL') then second else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Understanding Culture, Society and Politics') then second else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - English For Academic and Professional Purposes') then second else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then second else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Wisdom'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q2_wis_v_final;
create view grades_q2_wis_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_wis_v
;

drop view grades_q2_coun_v;
create view grades_q2_coun_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then second else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Fundamental of Accountancy, Business and Management 2') then second else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Applied Economics') then second else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Practical Research 2') then second else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Principles of Marketing') then second else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - Entrepreneurship') then second else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - VE/CL') then second else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Understanding Culture, Society and Politics') then second else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - English For Academic and Professional Purposes') then second else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then second else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Counsel'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_coun_v_final;
create view grades_q2_coun_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_coun_v
;

--Grade 10 START
drop view grades_q2_10_v;
create view grades_q2_10_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='10 - Mathematics') then second else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='10 - Trigonometry') then second else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='10 - Filipino') then second else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='10 - TLE') then second else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='10 - MAPEH') then second else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='10 - VE/CL') then second else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='10 - Araling Panlipunan') then second else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='10 - Science') then second else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='10 - English') then second else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='10 - Computer') then second else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then second else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Holy Trinity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_10_v_final;
create view grades_q2_10_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_10_v
;

--Grade 9 START
drop view grades_q2_9_v;
create view grades_q2_9_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='9 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='9 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='9 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='9 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='9 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='9 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='9 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='9 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='9 - Journalism') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='9 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Coronation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_9_v_final;
create view grades_q2_9_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_9_v
;

--Grade 8 START
drop view grades_q2_8_v;
create view grades_q2_8_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='8 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='8 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='8 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='8 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='8 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='8 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='8 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='8 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='8 - Technical Writing') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='8 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Assumption'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_8_v_final;
create view grades_q2_8_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_8_v
;

--Grade 7 START
drop view grades_q2_7_v;
create view grades_q2_7_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='7 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='7 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='7 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='7 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='7 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='7 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='7 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='7 - Speech & Drama') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='7 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='7 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Transfiguration'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_7_v_final;
create view grades_q2_7_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_7_v
;

--Grade 6 START
drop view grades_q2_6_v;
create view grades_q2_6_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='6 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='6 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='6 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='6 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='6 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='6 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='6 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='6 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='6 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='6 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Corpus Christi'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_6_v_final;
create view grades_q2_6_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_6_v
;

--Grade 5 START
drop view grades_q2_5_v;
create view grades_q2_5_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='5 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='5 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='5 - HELE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='5 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='5 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='5 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='5 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='5 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='5 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='5 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Resurrection'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_5_v_final;
create view grades_q2_5_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_5_v
;

--Grade 4 START
drop view grades_q2_4_v;
create view grades_q2_4_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='4 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='4 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='4 - HELE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='4 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='4 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='4 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='4 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='4 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='4 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='4 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Presentation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_4_v_final;
create view grades_q2_4_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_4_v
;

--Grade 3 START
drop view grades_q2_3_v;
create view grades_q2_3_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='3 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='3 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='3 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='3 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='3 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='3 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='3 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='3 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='3 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='3 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Nativity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_3_v_final;
create view grades_q2_3_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_3_v
;

--Grade 2 START
drop view grades_q2_2_v;
create view grades_q2_2_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='2 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='2 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='2 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='2 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='2 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='2 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='2 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='2 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='2 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='2 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Visitation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_2_v_final;
create view grades_q2_2_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_2_v
;

--Grade 1 START
drop view grades_q2_1_v;
create view grades_q2_1_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='1 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='1 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='1 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='1 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='1 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='1 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='1 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='1 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='1 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='1 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then second else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then second else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then second else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then second else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Annunciation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q2_1_v_final;
create view grades_q2_1_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q2_1_v
;

drop view grades_q2_rank_v;
create view grades_q2_rank_v as
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_1_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_2_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_3_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_4_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_5_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_6_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_7_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_8_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_9_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_10_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_coun_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_fort_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_piety_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q2_wis_v_final	;

Select grade_level, subject, remarks, count(*) student_count
from faculty_grades_q1_v
where grade_level in ('Grade 7','Grade 8','Grade 9','Grade 10')
group by grade_level, subject, remarks
order by grade_level, subject, remarks desc

Select grade_level, subject, remarks, count(*) student_count
from faculty_grades_q2_v
where grade_level in ('Grade 7','Grade 8','Grade 9','Grade 10')
group by grade_level, subject, remarks
order by grade_level, subject, remarks desc

Select grade_level, subject, round(avg(first),0) mean_grade
from faculty_grades_q1_v
where grade_level in ('Grade 7','Grade 8','Grade 9','Grade 10')
group by grade_level, subject
order by grade_level, subject desc

Select grade_level, subject, round(avg(second),0) mean_grade
from faculty_grades_q2_v
where grade_level in ('Grade 7','Grade 8','Grade 9','Grade 10')
group by grade_level, subject
order by grade_level, subject desc

select quarter, section, award, count(*) student_count
from grades_rank_v
where section in ('Grade 7 - Transfiguration','Grade 8 - Assumption','Grade 9 - Coronation','Grade 10 - Holy Trinity')
group by quarter, section, award
order by quarter, section, award desc
;

https://docs.google.com/spreadsheets/d/1dD0y11YAj1xMY6f1XfFZg7FEwmt97F-iatC_-F4BUEg/edit?usp=sharing

https://docs.google.com/spreadsheets/d/1ZFvouT9jOHSYv6vB_EMd8q2OjSxaeSBCNUrd3eRVGoI/edit?usp=sharing
https://docs.google.com/spreadsheets/d/150yOhEWur-01fWdrl6ilb19eDj2kGsJQ6yDalo1Kv48/edit?usp=sharing
https://docs.google.com/spreadsheets/d/1_n6jKFmSv90KUd0cuz4TFrDu0I4oNVgp6RX_Tsw2OjI/edit?usp=sharing

https://docs.google.com/spreadsheets/d/19HKb0Y-Yj_yLDMsPwCehi5BdNGqVPEWHT_Rh2dKhNcE/edit?usp=sharing
https://docs.google.com/spreadsheets/d/1Nt3MlaSxBDmzeWoJn2-iNcNPqkXXE7u4Lvwfz1Mi1ig/edit?usp=sharing
https://docs.google.com/spreadsheets/d/1tNWUQOqqXxj41KKLeGDdC0eRtdDJC6iXG6_qs8ZtrME/edit?usp=sharing

https://docs.google.com/spreadsheets/d/1XZMmaMOvMitzM8k5jHx7XX70iPtU-dHfcsdrF7fjt8Q/edit?usp=sharing
https://docs.google.com/spreadsheets/d/16zJdOx4qpmplG_PNhnXFnLfDbICQNrQDbrLsQEjBt40/edit?usp=sharing
https://docs.google.com/spreadsheets/d/1Indg4yzn2n-3B48O26riM0MZ4Yiqp6mnq5jPw-oD94I/edit?usp=sharing
https://docs.google.com/spreadsheets/d/1M3LpVP678OLYE3sddoLvWtm0puMRYMLU-6ATALs4pCE/edit?usp=sharing

https://docs.google.com/spreadsheets/d/11BwxSHlndSNnVb_T9UCIncPuJCd8E4Vy5F7q7ZbganM/edit?usp=sharing 11 ABM
https://docs.google.com/spreadsheets/d/194vLMJ5A34dXVFkomLZRnRUBn_UyBPSHD8Zhza4TQ_c/edit?usp=sharing 11 STEM
https://docs.google.com/spreadsheets/d/1VpmHw4-vk3m0JLbJZkOnJwZB-mUDHBrVeAiaLUtnKRs/edit?usp=sharing 12 ABM
https://docs.google.com/spreadsheets/d/1TfzjmA6ma1nvzLupZuyLiKpTBYBLJmeokiJ0gagxDlU/edit?usp=sharing 12 STEM

drop view grades_q4_piety_v;
create view grades_q4_piety_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Practical Research 1') then fourth else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Pagbasa at Pagsusuri ng Iba’t Ibang Teksto Tungo sa Pananaliksik') then fourth else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then fourth else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Introduction to the Philosophy of the Human Person') then fourth else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - 21st Century Literature from the Philippines and the World') then fourth else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Reading and Writing Skills') then fourth else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then fourth else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Statistics and Probability') then fourth else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Basic Calculus') then fourth else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - General Chemistry 1') then fourth else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then fourth else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Piety'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q4_piety_v_final;
create view grades_q4_piety_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q4_piety_v gq2pv
;

drop view grades_q4_fort_v;
create view grades_q4_fort_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Practical Research 1') then fourth else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Pagbasa at Pagsusuri ng Iba’t Ibang Teksto Tungo sa Pananaliksik') then fourth else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then fourth else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Introduction to the Philosophy of the Human Person') then fourth else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - 21st Century Literature from the Philippines and the World') then fourth else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Reading and Writing Skills') then fourth else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then fourth else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Statistics and Probability') then fourth else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Earth and Life Science') then fourth else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Fundamentals of Accountancy, Business and Management 1') then fourth else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then fourth else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Fortitude'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_fort_v_final;
create view grades_q4_fort_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q4_fort_v gq2fv
;

select *
from grades_v
where student_num = 'CABT-2020-1140-AB'
;

-- Grade 12 start
drop view grades_q4_wis_v;
create view grades_q4_wis_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then fourth else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Media and Information Literacy') then fourth else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Inquiries, Investigations and Immersion') then fourth else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Contemporary Philippine Arts from the Regions') then fourth else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Work Immersion') then fourth else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - VE/CL') then fourth else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - General Physics 2') then fourth else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - General Biology 2') then fourth else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - Disaster Readiness and Risk Reduction') then fourth else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then fourth else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Wisdom'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q4_wis_v_final;
create view grades_q4_wis_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_wis_v
;

drop view grades_q4_coun_v;
create view grades_q4_coun_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then fourth else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Media and Information Literacy') then fourth else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Inquiries, Investigations and Immersion') then fourth else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Contemporary Philippine Arts from the Regions') then fourth else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Work Immersion') then fourth else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - VE/CL') then fourth else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - Business Finance') then fourth else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Business Mathematics') then fourth else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - Business Ethics and Social Responsibility') then fourth else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then fourth else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Counsel'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_coun_v_final;
create view grades_q4_coun_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_coun_v
;

--Grade 10 START
drop view grades_q4_10_v;
create view grades_q4_10_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='10 - Mathematics') then fourth else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='10 - Trigonometry') then fourth else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='10 - Filipino') then fourth else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='10 - TLE') then fourth else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='10 - MAPEH') then fourth else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='10 - VE/CL') then fourth else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='10 - Araling Panlipunan') then fourth else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='10 - Science') then fourth else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='10 - English') then fourth else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='10 - Computer') then fourth else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then fourth else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Holy Trinity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_10_v_final;
create view grades_q4_10_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_10_v
;

--Grade 9 START
drop view grades_q4_9_v;
create view grades_q4_9_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='9 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='9 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='9 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='9 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='9 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='9 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='9 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='9 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='9 - Journalism') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='9 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Coronation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_9_v_final;
create view grades_q4_9_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_9_v
;

--Grade 8 START
drop view grades_q4_8_v;
create view grades_q4_8_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='8 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='8 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='8 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='8 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='8 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='8 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='8 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='8 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='8 - Technical Writing') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='8 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Assumption'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_8_v_final;
create view grades_q4_8_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_8_v
;

--Grade 7 START
drop view grades_q4_7_v;
create view grades_q4_7_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='7 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='7 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='7 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='7 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='7 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='7 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='7 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='7 - Speech & Drama') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='7 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='7 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Transfiguration'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_7_v_final;
create view grades_q4_7_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_7_v
;

--Grade 6 START
drop view grades_q4_6_v;
create view grades_q4_6_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='6 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='6 - TLE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='6 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='6 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='6 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='6 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='6 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='6 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='6 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='6 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Corpus Christi'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_6_v_final;
create view grades_q4_6_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_6_v
;

--Grade 5 START
drop view grades_q4_5_v;
create view grades_q4_5_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='5 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='5 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='5 - HELE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='5 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='5 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='5 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='5 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='5 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='5 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='5 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Resurrection'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_5_v_final;
create view grades_q4_5_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_5_v
;

--Grade 4 START
drop view grades_q4_4_v;
create view grades_q4_4_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='4 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='4 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='4 - HELE') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='4 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='4 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='4 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='4 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='4 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='4 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='4 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Presentation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_4_v_final;
create view grades_q4_4_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_4_v
;

--Grade 3 START
drop view grades_q4_3_v;
create view grades_q4_3_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='3 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='3 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='3 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='3 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='3 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='3 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='3 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='3 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='3 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='3 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Nativity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_3_v_final;
create view grades_q4_3_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_3_v
;

--Grade 2 START
drop view grades_q4_2_v;
create view grades_q4_2_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='2 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='2 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='2 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='2 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='2 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='2 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='2 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='2 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='2 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='2 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Visitation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_2_v_final;
create view grades_q4_2_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_2_v
;

--Grade 1 START
drop view grades_q4_1_v;
create view grades_q4_1_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='1 - English') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='1 - VE/CL') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='1 - Mother Tongue') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='1 - Filipino') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='1 - Mathematics') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='1 - Araling Panlipunan') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='1 - Science') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='1 - Penmanship') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='1 - MAPEH') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='1 - Computer') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Music') then fourth else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='Arts') then fourth else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='Physical Education') then fourth else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='Health') then fourth else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (second < 70) then 70 else second end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Annunciation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q4_1_v_final;
create view grades_q4_1_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 98 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 95 and 97 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0) between 90 and 94 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q4_1_v
;

drop view grades_q4_rank_v;
create view grades_q4_rank_v as
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_1_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_2_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_3_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_4_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_5_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_6_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_7_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_8_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_9_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_10_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_coun_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_fort_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_piety_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q4_wis_v_final	;

    SELECT
        `subject`,`THIRD`, `FOURTH`,`remarks`
     FROM
         grades_v
     WHERE
         student_num= 'CABT-2020-1030-SA'
     AND subject <> ('Deportment Grade')
     AND THIRD <> " "
     AND FOURTH <> " "

     student_num= '".$this->username."'

https://f91e724b6e12.ngrok.io/school/login/login.php

SELECT
                        `display_name`, `first`, `SECOND`, `FINAL`,`remarks`
                    FROM
                        grades_v gv, subjects sub
                    WHERE
                        student_num= 'CABT-2020-1030-SA'
                        and sub.subject = gv.subject
                    AND gv.subject <> ('Deportment Grade')
                    order by subj_order


SELECT cg.*
    FROM  students cs
        , grades cg
    WHERE cs.student_num = cg.attribute4
    and subject = 'Deportment Grade'
    and cs.grade_level like 'Grade 12%'

    select 'General Average for the Semester' display_message
        , (q1.final + q2.final)/2 sem1_final
    from grades_q1_rank_v q1
    , grades_q2_rank_v q2
    where q1.student_num = q2.student_num
    and q1.student_num = 'CABT-2020-1030-SA'
    ;
    
    Select b.first_name, b.last_name, a.student_num, description, (aug+sep+oct+nov+dece+jan+feb) total_absences
    from attendance_q1 a, students b
    where description = 'DAYS ABSENT' and (aug+sep+oct+nov+dece+jan+feb)
    and a.student_num = b.student_num
    order by (aug+sep+oct+nov+dece+jan+feb) desc
    ;

    select a.subject, b.last_name, b.first_name,
            (CASE 
                WHEN a.third between 97.5 and 100 THEN "With Highest Honors"
                WHEN a.third between 94.5 and 97.49 THEN "With High Honors"
                WHEN a.third between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END) remarks
    from grades a, students b 
    where a.subject = '12 - Media and Information Literacy'
    and b.student_num = a.attribute4
    order by (CASE 
                WHEN a.third between 97.5 and 100 THEN "1"
                WHEN a.third between 94.5 and 97.49 THEN "2"
                WHEN a.third between 89.5 and 94.49 THEN "3"
                ELSE " "
            END), b.last_name;

update grades set subject = '1 - Music' where attribute4 in (
select student_num from students
where grade_level = 'Grade 1')
and subject = 'Music';

update grades set subject = '1 - Arts' where attribute4 in (
select student_num from students
where grade_level = 'Grade 1')
and subject = 'Arts';

update grades set subject = '1 - Physical Education' where attribute4 in (
select student_num from students
where grade_level = 'Grade 1')
and subject = 'Physical Education';

update grades set subject = '1 - Health' where attribute4 in (
select student_num from students
where grade_level = 'Grade 1')
and subject = 'Health';

select q1.final,q2.final,(q1.unrounded + q2.unrounded)/2,round((q1.unrounded + q2.unrounded)/2,0) sem1_final
                        from grades_q1_rank_v q1
                        , grades_q2_rank_v q2
                        where q1.student_num = q2.student_num
                        and q1.student_num = 'CABT-2020-1171-CA'

select * from deportment_elem where MD1 < 85 
and student_id in (select student_num from grades_rank_v where quarter = '1st' and award <> " " )
and quarter = 1;

update deportment_hs set MB3 = 85 where MB3 = 84 and student_id = 'CABT-2020-1039-CD';

-- Check for AEA with deportment lower than 85
select * from grades_rank_v where student_num in (
select distinct student_id from deportment_hs_v where grade in ('B','B-','B') and quarter = 2)
and quarter = '2nd'
and award <> " ";

select c.last_name, c.first_name, a.final, a.award, b.* from grades_rank_v a,  deportment_hs b, students c
where b.student_id in (select distinct student_id from deportment_hs_v where grade in ('B','B-','B') and quarter = 1)
and a.quarter = '1st' and a.award <> " "
and a.student_num = b.student_id
and a.student_num = c.student_num
and b.quarter = 1

select c.last_name, c.first_name, a.final, a.award, b.* from grades_rank_v a,  deportment_elem b, students c
where b.student_id in (select distinct student_id from deportment_elem_v where grade in ('B','B-','B') and quarter = 1)
and a.quarter = '1st' and a.award <> " "
and a.student_num = b.student_id
and a.student_num = c.student_num
and b.quarter = 1

G2 - Mercado
G3 - Camungol
G4 - Doydoy
G5 - Brosas
G6 - Micos Mercado
G7 - Visto
G8 - Brosas & King Evangelista
G9 - Lopez, Lozares, Poblete, Primero, Quintal
G10 - Afortunado, Alolor, Ledesma, Portades, Posas

191 students
G6 - Viado

update sys_users set enabled_flag = 'Y' where username like 'CABT-2020-1%'; -- Enable All
update sys_users set enabled_flag = 'N' where username like 'CABT-2020-1%'; -- Disable All
update sys_users set enabled_flag = 'N' where username in (
'CABT-2020-1149-MM',
'CABT-2020-1209-CS',
'CABT-2020-1197-DA',
'CABT-2020-1144-BF',
'CABT-2020-1120-AA',
'CABT-2020-1119-MM',
'CABT-2020-1077-MF',
'CABT-2020-1172-VA',
'CABT-2020-1143-BC',
'CABT-2020-1201-EK',
'CABT-2020-1009-LZ',
'CABT-2020-1204-LM',
'CABT-2020-1158-PA',
'CABT-2020-1194-PK',
'CABT-2020-1195-QG',
'CABT-2020-1180-AR',
'CABT-2020-1137-AA',
'CABT-2020-1196-LM',
'CABT-2020-1160-PE',
'CABT-2020-1198-PJ'
);

update sys_users set enabled_flag = 'Y' where username in ( 
'CABT-2020-1025-TN'
);

<input type="text" id="input1" placeholder="Enter here">
<button onclick="test()">Test</button>
<p id="demo"></p>

function test() {
  var x = document.getElementById("input1").textContent;
  alert(x);
}