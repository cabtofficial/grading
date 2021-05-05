<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'school' 
); 
 
// DB table to use 
$table = 'students_vl'; 
 
// Table's primary key 
$primaryKey = 'lrn'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'lrn',           'dt' => 0 ), 
    array( 'db' => 'student_num',   'dt' => 1 ), 
    array( 'db' => 'name',          'dt' => 2 ), 
    array( 'db' => 'level_section', 'dt' => 3 )
); 
 
// Include SQL query processing class 
require '../config/ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);