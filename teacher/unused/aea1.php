<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li class="active">
      <a href="../teacher/index_12.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="treeview">
        <a href="#">
          <i class="fa fa-star"></i><span>Advisory Class</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../teacher/student_list_12.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>Class Grades</a></li>
          <li><a href="../teacher/attendance.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>Attendance</a></li>
          <li class="treeview">        
            <a href="#">
              <i class="fa fa-circle-o"></i><span>AEAs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../teacher/aea1.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>1st Quarter</a></li>
              <li><a href="../teacher/aea2.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>2nd Quarter</a></li>
              <li><a href="../teacher/aea3.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>3rd Quarter</a></li>
              <li><a href="../teacher/aea4.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i>4th Quarter</a></li>
            </ul>
          </li>
        </ul>
      </li>

  </ul>

  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Faculty Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Faculty Profile</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
      <!-- Main content -->
<section class="content">
  

<div class="row">
<!-- /.col -->
<div class="col-md-12">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
    </ul>
    <div class="tab-content">
      <!-- /.tab-pane -->

      <div class="active tab-pane" id="grades1">
      <!-- Map box -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
          
          <div class="box box-default box-solid"> <!-- Grade 1 - Annunciation -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 1 - Annunciation</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser1" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 1 - Annunciation -->
          <div class="box box-default box-solid"> <!-- Grade 2 - Visitation -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 2 - Visitation</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser2" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 2 - Visitation -->
          <div class="box box-default box-solid"> <!-- Grade 3 - Nativity -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 3 - Nativity</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser3" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 3 - Nativity -->
          <div class="box box-default box-solid"> <!-- Grade 4 - Presentation -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 4 - Presentation</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser4" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 4 - Presentation -->
          <div class="box box-default box-solid"> <!-- Grade 5 - Resurrection -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 5 - Resurrection</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser5" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 5 - Resurrection -->
          <div class="box box-default box-solid"> <!-- Grade 6 - Corpus Christi -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 6 - Corpus Christi</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser6" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 6 - Corpus Christi -->

          </div> 
        <!-- /.row -->
        </div>
      </section>
      <!-- /.content -->
</div>
</div>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
              
              ';
              
  include('../sysadmin/master.php');
?>

<!-- page script -->
<script>
  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../teacher/api/read_single.php?username=<?php echo $_GET['username']; ?>",
            dataType: 'json',
            success: function(data) {
                document.getElementById('name').innerHTML = data['first_name'] + ' ' + data['last_name'];
                document.getElementById('faculty_num').innerHTML = data['faculty_num'];
                document.getElementById('designation').innerHTML = data['designation'];
                document.getElementById('status').innerHTML = data['status'];
                document.getElementById('gender').innerHTML = data['gender'];
                $("#schoology_pic").attr("src", data['schoology_pic']);
              },
            error: function (result) {
              console.log(result);
            },
        });
    });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_1.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser1"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_2.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser2"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_3.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser3"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_4.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser4"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_5.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser5"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_6.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser6"));
        }
    });
  });

</script>

<style type="text/css">
<!--
 .tab { margin-left: 20px; }
-->
</style>