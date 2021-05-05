drop view grades_q3_rank_v;
create view grades_q3_rank_v as
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_1_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_2_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_3_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_4_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_5_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_6_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_7_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_8_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_9_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_10_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_coun_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_fort_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_piety_v_final	UNION
select `student_num`,`section`,`unrounded`,`final`,`award`, rank() OVER (partition by section order by `unrounded` desc ) AS 'rank' from grades_q3_wis_v_final	;


-- Grade 12 start
drop view grades_q3_wis_v;
create view grades_q3_wis_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Media and Information Literacy') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Inquiries, Investigations and Immersion') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Contemporary Philippine Arts from the Regions') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Work Immersion') then third else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - VE/CL') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - General Physics 2') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - General Biology 2') then third else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - Disaster Readiness and Risk Reduction') then third else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then third else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Wisdom'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q3_wis_v_final;
create view grades_q3_wis_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 97.5 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 94.5 and 97.49 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_wis_v
;

drop view grades_q3_coun_v;
create view grades_q3_coun_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='12 - Physical education and health') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='12 - Media and Information Literacy') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='12 - Inquiries, Investigations and Immersion') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='12 - Contemporary Philippine Arts from the Regions') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='12 - Work Immersion') then third else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='12 - VE/CL') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='12 - Business Finance') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='12 - Business Mathematics') then third else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='12 - Business Ethics and Social Responsibility') then third else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='Deportment Grade') then third else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0013-MJ'
and section = 'Counsel'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_coun_v_final;
create view grades_q3_coun_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 97.5 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 94.5 and 97.49 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2) between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_coun_v
;

drop view grades_q3_piety_v;
create view grades_q3_piety_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Practical Research 1') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Pagbasa at Pagsusuri ng Iba''t Ibang Teksto Tungo sa Pananaliksik') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Introduction to the Philosophy of the Human Person') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - 21st Century Literature from the Philippines and the World') then third else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Reading and Writing Skills') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Statistics and Probability') then third else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Basic Calculus') then third else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - General Chemistry 1') then third else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then third else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Piety'
group by a.student_num
order by substr(a.student_num,15,2)
;

drop view grades_q3_piety_v_final;
create view grades_q3_piety_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , IF((mod(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),1)*10) = 5
        , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") + 1
        , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"")
    ) final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 97.5 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 94.5 and 97.49 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q3_piety_v gq2pv
;

drop view grades_q3_fort_v;
create view grades_q3_fort_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='11 - Practical Research 1') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='11 - Pagbasa at Pagsusuri ng Iba''t Ibang Teksto Tungo sa Pananaliksik') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='11 - Physical Education and Health') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='11 - Introduction to the Philosophy of the Human Person') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='11 - 21st Century Literature from the Philippines and the World') then third else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='11 - Reading and Writing Skills') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='11 - VE/CL') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='11 - Statistics and Probability') then third else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='11 - Earth and Life Science') then third else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='11 - Fundamentals of Accountancy, Business and Management 1') then third else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='Deportment Grade') then third else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and b.adviser = concat(c.last_name,', ',c.first_name)
and c.faculty_num = 'CABT-2020-0016-PJ'
and section = 'Fortitude'
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_fort_v_final;
create view grades_q3_fort_v_final as
select *
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 AND sub10>79 THEN
            (CASE 
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 97.5 and 100 THEN "With Highest Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 94.5 and 97.49 THEN "With High Honors"
                WHEN round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09+sub10)/10,0) between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award 
from grades_q3_fort_v gq2fv
;

drop view grades_q3_9_v;
create view grades_q3_9_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='9 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='9 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='9 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='9 - TLE') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='9 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='9 - VE/CL') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='9 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='9 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='9 - Journalism') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='9 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='9 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='9 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='9 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='9 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Coronation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_9_v_final;
create view grades_q3_9_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_9_v
;

drop view grades_q3_4_v;
create view grades_q3_4_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='4 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='4 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='4 - HELE') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='4 - Penmanship') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='4 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='4 - VE/CL') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='4 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='4 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='4 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='4 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='4 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='4 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='4 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='4 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Presentation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_4_v_final;
create view grades_q3_4_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_4_v
;

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
, ifnull(max(case when (a.subject='5 - Music') then first else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='5 - Arts') then first else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='5 - Physical Education') then first else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='5 - Health') then first else NULL end),"") as 'health'
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
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_5_v
;

drop view grades_q3_6_v;
create view grades_q3_6_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='6 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='6 - TLE') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='6 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='6 - VE/CL') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='6 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='6 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='6 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='6 - Penmanship') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='6 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='6 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='6 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='6 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='6 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='6 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Corpus Christi'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_6_v_final;
create view grades_q3_6_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_6_v
;

drop view grades_q3_1_v;
create view grades_q3_1_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='1 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='1 - VE/CL') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='1 - Mother Tongue') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='1 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='1 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='1 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='1 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='1 - Penmanship') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='1 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='1 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='1 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='1 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='1 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='1 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Annunciation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_1_v_final;
create view grades_q3_1_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_1_v
;

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
, ifnull(max(case when (a.subject='8 - Music') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='8 - Arts') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='8 - Physical Education') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='8 - Health') then (case when (first < 70) then 70 else first end) else NULL end),"") as 'health'
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
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q1_8_v
;

drop view grades_q3_2_v;
create view grades_q3_2_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='2 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='2 - VE/CL') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='2 - Mother Tongue') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='2 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='2 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='2 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='2 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='2 - Penmanship') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='2 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='2 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='2 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='2 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='2 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='2 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Visitation'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_2_v_final;
create view grades_q3_2_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_2_v
;

drop view grades_q3_7_v;
create view grades_q3_7_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='7 - English') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='7 - TLE') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='7 - VE/CL') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='7 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='7 - Science') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='7 - Araling Panlipunan') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='7 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='7 - Speech & Drama') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='7 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='7 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='7 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='7 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='7 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='7 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Transfiguration'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_7_v_final;
create view grades_q3_7_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_7_v
;

drop view grades_q3_10_v;
create view grades_q3_10_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='10 - Mathematics') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='10 - Trigonometry') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='10 - Filipino') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='10 - TLE') then third else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='10 - MAPEH') then third else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='10 - VE/CL') then third else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='10 - Araling Panlipunan') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='10 - Science') then third else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='10 - English') then third else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='10 - Computer') then third else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='10 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='10 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='10 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='10 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then third else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Holy Trinity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_10_v_final;
create view grades_q3_10_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_10_v
;

drop view grades_q3_3_v;
create view grades_q3_3_v as
select a.student_num, concat(b.last_name,', ',b.first_name) name, concat(grade_level,' - ',section) section, c.faculty_num
, ifnull(max(case when (a.subject='3 - English') then third else NULL end),"") as 'sub01'
, ifnull(max(case when (a.subject='3 - Araling Panlipunan') then third else NULL end),"") as 'sub02'
, ifnull(max(case when (a.subject='3 - Science') then third else NULL end),"") as 'sub03'
, ifnull(max(case when (a.subject='3 - Penmanship') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub04'
, ifnull(max(case when (a.subject='3 - MAPEH') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub05'
, ifnull(max(case when (a.subject='3 - Mathematics') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub06'
, ifnull(max(case when (a.subject='3 - VE/CL') then third else NULL end),"") as 'sub07'
, ifnull(max(case when (a.subject='3 - Mother Tongue') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub08'
, ifnull(max(case when (a.subject='3 - Filipino') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub09'
, ifnull(max(case when (a.subject='3 - Computer') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'sub10'
, ifnull(max(case when (a.subject='3 - Music') then third else NULL end),"") as 'music'
, ifnull(max(case when (a.subject='3 - Arts') then third else NULL end),"") as 'arts'
, ifnull(max(case when (a.subject='3 - Physical Education') then third else NULL end),"") as 'pe'
, ifnull(max(case when (a.subject='3 - Health') then third else NULL end),"") as 'health'
, ifnull(max(case when (a.subject='Deportment Grade') then (case when (third < 70) then 70 else third end) else NULL end),"") as 'deport'
from grades_v a, students b, faculty c
where a.student_num = b.student_num
and section like 'Nativity'
and b.adviser = concat(c.last_name,', ',c.first_name)
group by a.student_num
order by substr(a.student_num,15,2)
;   

drop view grades_q3_3_v_final;
create view grades_q3_3_v_final as
select `section`,`student_num`,`name`,`faculty_num`,`sub01`,`sub02`,`sub03`,`sub04`,`sub05`,`sub06`,`sub07`,`sub08`,`sub09`,`sub10`,`deport`,`music`,`arts`,`pe`,`health`
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,2),"") unrounded
    , ifnull(round((sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9,0),"") final
    , (CASE WHEN deport > 84 THEN
        (CASE WHEN sub01>79 AND sub02>79 AND sub03>79 AND sub04>79 AND sub05>79 AND sub06>79 AND sub07>79 AND sub08>79 AND sub09>79 THEN
            (CASE 
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 97.5 and 100 THEN "With Highest Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 94.5 and 97.49 THEN "With High Honors"
                WHEN (sub01+sub02+sub03+sub04+sub05+sub06+sub07+sub08+sub09)/9 between 89.5 and 94.49 THEN "With Honors"
                ELSE " "
            END)
            ELSE " "
        END) 
        ELSE " "
    END) award
from grades_q3_3_v
;

select a.name `name`
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
			((select '*Student Name' as name, display_name from subject_shs where subj_order = 1 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 1 and grade_level = '".$this->section."'))) a
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 2 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 2 and grade_level = '".$this->section."'))) b
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 3 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 3 and grade_level = '".$this->section."'))) c
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 4 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 4 and grade_level = '".$this->section."'))) d
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 5 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 5 and grade_level = '".$this->section."'))) e
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 6 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 6 and grade_level = '".$this->section."'))) f
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 7 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 7 and grade_level = '".$this->section."'))) g
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 8 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 8 and grade_level = '".$this->section."'))) h
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 9 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 9 and grade_level = '".$this->section."'))) i
			, ((select '*Student Name' as name, display_name from subject_shs where subj_order = 10 and grade_level = '".$this->section."' order by subj_order) 
				union (select concat(last_name,', ',first_name) as name, first from grades gr, students st where gr.ATTRIBUTE4 = st.student_num and subject in (select subject from subject_shs where subj_order = 10 and grade_level = '".$this->section."'))) j
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