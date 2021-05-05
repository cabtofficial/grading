<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li>
      <a href="../teacher/index_all.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="treeview active">
        <a href="#">
          <i class="fa fa-star"></i> <span>Class Cards</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../teacher/student_list_elem.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Elementary</a></li>
          <li><a href="../teacher/student_list_jhs.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Junior High School</a></li>
          <li class="active"><a href="../teacher/student_list_shs.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Senior High School</a></li>
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
          
          <div class="box box-default box-solid"> <!-- Grade 11 ABM - Fortitude -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 11 ABM - Fortitude</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser11f" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 11 ABM - Fortitude -->
          <div class="box box-default box-solid"> <!-- Grade 11 STEM - Piety -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 11 STEM - Piety</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser11p" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 11 STEM - Piety -->
          <div class="box box-default box-solid"> <!-- Grade 12 ABM - Counsel -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 12 ABM - Counsel</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser12c" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 12 ABM - Counsel -->
          <div class="box box-default box-solid"> <!-- Grade 12 STEM - Wisdom -->
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
              <i class="fa fa-calendar margin-r-5"></i>
              <h3 class="box-title">Grade 12 STEM - Wisdom</h3>
            </div>
            <div class="box-body">
              <div class="box-header with-border">
                <table border="1px solid black;" style="width:100%;" id="adviser12w" class="table table-bordered table-striped">
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <th style="width:15%;font-size:14px;border: 2px solid black;text-align:center;">Student Name</th>
                    <th style="width:5%;font-size:14px;border: 2px solid black;text-align:center;">Action</th>                                        
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- Grade 12 STEM - Wisdom -->

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
        url: "../teacher/api/read_grades_q1_fort.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser11f"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_piety.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser11p"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_coun.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser12c"));
        }
    });
  });
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_wis.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;background-color:#fae8f7;"><b p class="tab">'+data[user].name+"</b></td>"+
                "<td style='width:5%;font-size:14px;border: 2px solid black;text-align:center;'><a href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser12w"));
        }
    });
  });

</script>

<style type="text/css">
<!--
 .tab { margin-left: 20px; }
-->
</style>