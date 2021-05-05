<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->
    <li>
      <a href="../admin/index.php">
        <i class="fa fa-user"></i> <span>Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li>
      <a href="../admin/calendar.php">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
          </span>
      </a>
    </li>
    
    <li class="active treeview">
      <a href="#"><i class="fa fa-group "></i> <span>Students</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../admin/enrollees.php"><i class="fa fa-circle-o"></i> Enrollees</a></li>
        <li class"active"><a href="../admin/register.php"><i class="fa fa-circle-o"></i> Pre-registered</a></li>
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
  Pre-registration Form
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Students</li>
    <li class="active">Pre-registered Students</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">

                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#student">Student Profile</a></li>
                      <li><a data-toggle="tab" href="#grades">Grades</a></li>
                    </ul>

                    <!-- TAB STARTS HERE -->

                  <div class="tab-content">
                    <div id="student" class="tab-pane fade in active">
                      <div class="box-header with-border">
                        <h3 class="box-title" style="vertical-align:text-top;">Student Profile</h3>
                      </div>
      

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form-horizontal">
                      <div class="box-body">
                      <table class="table" style="width:100%">
                        <th style="width:20%">
                          <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                        </th>
                        <th style="width:40%">       
                        <div class="form-group">
                          <label class="control-label col-md-3" for="exampleInputName1">LRN</label>
                          <input type="text" class="form-control" id="lrn" placeholder="Learning Reference Number" readonly style="width:70%;">
                        </div>         
                        <div class="form-group">
                          <label class="control-label col-md-3" for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Name" readonly style="width:70%;">
                        </div>
                        <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">Gender</label>
							            <input type="text" class="form-control" id="gender" placeholder="Gender" readonly style="width:70%;">
							          </div> 
                        <div class="form-group">
                          <label class="control-label col-md-3" for="exampleInputName1">Grade Level</label>
                          <input type="text" class="form-control" id="level_section" placeholder="Grade Level (e.g. 10 - Holy Trinity)" readonly style="width:70%;">
                        </div> 
                        <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">Student Number</label>
							            <input type="text" class="form-control" id="student_num" placeholder="Student Number" readonly style="width:70%;">
							          </div>
                        </th>
                        
                        <th style="width:40%">
                        <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">Birthdate</label>
							            <input type="text" class="form-control" id="birthdate" placeholder="Birthdate" readonly style="width:70%;">
							          </div>
							          <div class="form-group">
                          <label class="control-label col-md-3" for="exampleInputName1">Address</label>
                          <input type="text" class="form-control" id="address" placeholder="Address" readonly style="width:70%;">
                        </div>
							          <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">Emergency Contact</label>
							            <input type="text" class="form-control" id="emergency_contact" placeholder="Emergency Contact" readonly style="width:70%;">
							          </div>
							          <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">Mobile Number</label>
							            <input type="text" class="form-control" id="phone" placeholder="Mobile Number" readonly style="width:70%;">
							          </div>
							          <div class="form-group">
							            <label class="control-label col-md-3" for="exampleInputName1">School last attended</label>
							            <input type="text" class="form-control" id="previous_school" placeholder="School last attended" readonly style="width:70%;">
							          </div>
							          </th>
                      </table>
                      </div>
							      </form>
                    <!-- /.box -->
                    </div>


                    <style>
                    th#sem       {font-family: Lucida Sans; background-color: #DD90FF;}
                    th#top       {font-family: Bodoni MT;}
                    th#grade     {font-family: Segoe UI Semibold;}
                    th#subject   {font-family: Bodoni MT;}
                    }
                    </style>

                      <!-- Report Card -->
                      <div id="grades" class="tab-pane fade">
                        <div class="col-md-12">
                          <div class="box box-primary">
                            <div class="box-header with-border">
                              <table style="width:100%">
                                <td style="width:30%;">
                                  <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="card_name" placeholder="Learning Reference Number" readonly style="width:95%;">
                                  </div>  
                                </td>
                                <td style="width:30%;">
                                  <div class="form-group">
                                    <label>Level & Section:</label>
                                    <input type="text" class="form-control" id="card_level_section" placeholder="Learning Reference Number" readonly style="width:95%;">
                                  </div>  
                                </td>
                                <td style="width:30%;">
                                  <div class="form-group">
                                    <label>Learner Reference Number (LRN):</label>
                                    <input type="text" class="form-control" id="card_lrn" placeholder="Learning Reference Number" readonly style="width:95%;">
                                  </div>  
                                </td>
                              </table>
                            </div>
                            <div class="box-header with-border">
                              <table style="width:100%;">
                                <td style="width:50%;text-align:center;vertical-align:text-top;">
                                  <p>
                                  <b>REPORT ON LEARNER\'S ACHIEVEMENT</b>
                                  </p>
                                  <table border="2" style="width:100%;border-style:ridge;" id="grades1">
                                    <tr style="background-color: #DBB6D6;font-weight: bold;">
                                      <td rowspan="2" style="width:40%;">Learning Areas</td>
                                      <td colspan="4" style="width:40%;">Quarterly Rating</td>
                                      <td rowspan="2" style="width:20%;font-size:11px;">FINAL RATING</td>
                                      <td rowspan="2" style="width:20%;font-size:11px;">REMARKS</td>
                                    </tr>
                                    <tr style="background-color: #DBB6D6;font-weight: bold;">
                                      <td style="width:10%;">1</td>
                                      <td style="width:10%;">2</td>
                                      <td style="width:10%;">3</td>
                                      <td style="width:10%;">4</td>
                                    </tr>
                                    <tbody>
                                    </tbody>
                                    <tr style="background-color: #DBB6D6;font-weight: bold;border-style:double;">
                                      <td colspan="5" style="width:10%;">GENERAL AVERAGE</td>
                                      <td style="width:10%;" id="card_final">Final</td>
                                      <td style="width:10%;" id="card_remarks">Remark</td>
                                    </tr>
                                    <tr style="background-color: #DBB6D6;font-weight: bold;border-style:double;">
                                      <td style="width:10%;text-align:left;">Deportment Grade</td>
                                      <td style="width:10%;">1</td>
                                      <td style="width:10%;">2</td>
                                      <td style="width:10%;">3</td>
                                      <td style="width:10%;">4</td>
                                      <td style="width:10%;">Final</td>
                                    </tr>
                                  </table>
                                  <img src="../objects/grades.png" style="width:100%;">
                                </td>
                                <td style="width:1%;"></td>
                                <td style="width:50%;text-align:center;vertical-align:text-top;">
                                  <p>
                                  <b>REPORT ON LEARNER\'S OBSERVED VALUES</b>
                                  </p>
                                  <table border="1" style="width:100%">
                                    <tr>
                                      <td rowspan="2" style="width:50%;">Core Values and Character Traits</td>
                                      <td colspan="5" style="width:50%;">Quarterly Rating</td>
                                    </tr>
                                    <tr>
                                      <td style="width:10%;">1</td>
                                      <td style="width:10%;">2</td>
                                      <td style="width:10%;">3</td>
                                      <td style="width:10%;">4</td>
                                      <td style="width:10%;">FINAL</td>
                                    </tr>
                                    <tr>
                                      <td colspan="6" style="width:100%;background-color: #DBB6D6;font-weight: bold;">Maka-Diyos</td>
                                      <table border="1" style="width:100%" id="values1">
                                      <tbody>
                                      </tbody>
                                      </table>
                                    </tr>
                                    <tr>
                                      <td colspan="6" style="width:100%;background-color: #DBB6D6;font-weight: bold;">Makatao</td>
                                    </tr>
                                    <tr>
                                      <td colspan="6" style="width:100%;background-color: #DBB6D6;font-weight: bold;">Makakalikasan</td>
                                    </tr>
                                    <tr>
                                      <td colspan="6" style="width:100%;background-color: #DBB6D6;font-weight: bold;">Makabansa</td>
                                    </tr>
                                  </table>

                                  <p></br>
                                  <b>Attendance Report</b>
                                  </p>
                                  <table border="1px solid black;" style="width:100%;">
                                    <tr>
                                      <td style="width:30%;">MONTH</td>
                                      <td style="width:5%;font-size:10px;">JUN</td>
                                      <td style="width:5%;font-size:10px;">JUL</td>
                                      <td style="width:5%;font-size:10px;">AUG</td>
                                      <td style="width:5%;font-size:10px;">SEP</td>
                                      <td style="width:5%;font-size:10px;">OCT</td>
                                      <td style="width:5%;font-size:10px;">NOV</td>
                                      <td style="width:5%;font-size:10px;">DEC</td>
                                      <td style="width:5%;font-size:10px;">JAN</td>
                                      <td style="width:5%;font-size:10px;">FEB</td>
                                      <td style="width:5%;font-size:10px;">MAR</td>
                                      <td style="width:5%;font-size:10px;">APR</td>
                                      <td style="width:30%;">TOTAL</td>
                                    </tr>
                                  </table>

                                  <p></br>
                                  <b>RECOGNITION AND ACHIEVEMENT</b>
                                  </p>
                                  <table border="1" style="width:100%;">
                                    <tr>
                                      <td style="width:20%;">Quarter</td>
                                      <td style="width:40%;">Academic Excellence</td>
                                      <td style="width:10%;">Rank</td>
                                      <td style="width:30%;">Other Merit Awards</td>
                                    </tr>
                                  </table>
                                </td>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

                    <!-- TAB ENDS HERE -->

                    </div>
                  </div>
                </div>
              </div>
              </section>
              <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->   
';
  include('../sysadmin/master.php');
?>
<!-- page script -->
<!-- page script -->
<script>
  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../student/api/read_single.php?lrn=<?php echo $_GET['lrn']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#lrn').val(data['lrn']);
                $('#level_section').val(data['level_section']);
                $('#student_num').val(data['student_num']);
                $('#name').val(data['name']);
                $('#address').val(data['address']);
                $('#birthdate').val(data['birthdate']);
                $('#gender').val(data['gender']); 
                $('#emergency_contact').val(data['emergency_contact']);
                $('#phone').val(data['phone']);
                $('#previous_school').val(data['previous_school']);
                $('#card_name').val(data['name']);
                $('#card_level_section').val(data['level_section']);
                $('#card_lrn').val(data['lrn']);
              },
            error: function (result) {
              console.log(result);
            },
        });
    });
    $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_grades.php?lrn=<?php echo $_GET['lrn']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                "<td>"+data[user].subject+"</td>"+
                "<td>"+data[user].first+"</td>"+
                "<td>"+data[user].second+"</td>"+
                "<td>"+data[user].third+"</td>"+
                "<td>"+data[user].fourth+"</td>"+
                "<td>"+data[user].final+"</td>"+
                "<td>"+data[user].remarks+"</td>"+
                "</tr>";
            }
            $(response).appendTo($("#grades1"));
        }
    });
  });
  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../student/api/read_final_grade.php?lrn=<?php echo $_GET['lrn']; ?>",
            dataType: 'json',
            success: function(data) {
                document.getElementById('card_final').innerHTML = data['final'];
                document.getElementById('card_remarks').innerHTML = data['remarks'];
              },
            error: function (result) {
              console.log(result);
            },
        });
    });
    $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_values.php?lrn=<?php echo $_GET['lrn']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].attribute2+"</td>"+
                "<td>"+data[user].first_a+"</td>"+
                "<td>"+data[user].second_a+"</td>"+
                "<td>"+data[user].third_a+"</td>"+
                "<td>"+data[user].fourth_a+"</td>"+
                "<td>"+data[user].final_a+"</td>"+
                "</tr>";
            }
            $(response).appendTo($("#values1"));
        }
    });
  });
</script>