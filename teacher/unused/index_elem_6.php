<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li>
      <a href="../teacher/index_6.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="treeview active">
        <a href="#">
          <i class="fa fa-star"></i> <span>Advisory Class</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="../teacher/student_list_6.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Class Grades</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Attendance</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Subjects</a></li>
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
  Student Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Student Profile</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
      <!-- Main content -->
<section class="content">
  

<div class="row">
<div class="col-md-4">

  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img id="schoology_pic" src class="profile-user-img img-responsive img-circle" alt="User profile picture">

      <h3 class="profile-username text-center" id="name">Name</h3>

      <p class="text-muted text-center" id="level_section">Grade Level - Section</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Student Number</b> <a class="pull-right" id="student_num">Student ID</a>
        </li>
        <li class="list-group-item">
          <b>LRN</b> <a class="pull-right" id="lrn">LRN</a>
        </li>
        <li class="list-group-item">
          <b>Class Adviser</b> <a class="pull-right" id="adviser">Adviser</a>
        </li>
      </ul>

      
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
<div class="col-md-8">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#profile" data-toggle="tab">Student Information</a></li>
      <li><a href="#grades" data-toggle="tab">Grades</a></li>
      <!-- <li><a href="#accounts" data-toggle="tab">Accounts</a></li> -->
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="profile">
        <!-- Post -->
                   <form role="form" class="form-horizontal">
                      <div class="box-body">
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>Status</b> <a class="pull-right" id="status">Status</a>
                          </li>
                          <li class="list-group-item">
                            <b>Email Address</b> <a class="pull-right" id="email_address">Email Address</a>
                          </li>
                          <li class="list-group-item">
                            <b>Emergency Contact</b> <a class="pull-right" id="emergency_contact">Emergency Contact</a>
                          </li>
                          <li class="list-group-item">
                            <b>Emergency Contact Email</b> <a class="pull-right" id="contact_email">Emergency Contact Email</a>
                          </li>
                          <li class="list-group-item">
                            <b>Address</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Birthdate</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Phone Number</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Previous School</b> <a class="pull-right" id="previous_school">N/A</a>
                          </li>
                        </ul>
                      </div>
							      </form>

        <!-- /.post -->
        
      </div>

      <!-- /.tab-pane -->

      <div class="tab-pane" id="grades">
      
      <!-- Map box -->
          <div class="box box-default box-solid">
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-book"></i>

              <h3 class="box-title">
              REPORT ON LEARNER\'S ACHIEVEMENT
              </h3>
            </div>
            <div class="box-body">
            <div class="box-header with-border">
            <table style="width:100%;">
              <td style="width:50%;text-align:center;vertical-align:text-top;">
                <table border="2" style="width:100%;border-style:ridge;" id="grades1">
                  <tr style="background-color: #DBB6D6;font-weight: bold;">
                    <td rowspan="2" style="width:40%;">Learning Areas</td>
                    <td colspan="4" style="width:40%;">Quarterly Rating</td>
                    <td rowspan="2" style="width:10%;font-size:11px;">FINAL RATING</td>
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
                  <tr style="background-color: #DBB6D6;font-weight:bold;">
                    <td colspan="5" style="width:10%;">GENERAL AVERAGE</td>
                    <td style="width:10%;" id="card_final"></td>
                    <td style="width:10%;" id="remarks"></td>
                  </tr>
                </table>
                <table border="2" style="width:100%;border-style:ridge;" id="deportment" cellpadding="3">
                  <tr style="background-color: #DBB6D6;font-weight: bold;border-style:double;">
                    <td style="width:40%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:10%;"></td>
                  </tr>
                  <tbody>
                  </tbody>
                </table>
              </td>
            </table>
          </div>
            </div>            
            </div>

            <div class="box box-default box-solid">
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-pencil margin-r-5"></i>

              <h3 class="box-title">
              REPORT ON LEARNER\'S OBSERVED VALUES
              </h3>
            </div>

              <div class="box-body">
              <div class="box-header with-border">
              <table style="width:100%;">
                <td style="width:50%;text-align:center;vertical-align:text-top;">
                  <table border="2" style="width:100%;border-style:ridge;">
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
                  </table>
                  <table border="2" style="width:100%;border-style:ridge;" id="makadiyos">
                    <tr>
                      <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Maka-Diyos</td>
                    </tr>
                    <tbody>
                    </tbody>
                  </table>
                  <table border="2" style="width:100%;border-style:ridge;" id="makatao">
                    <tr>
                      <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makatao</td>
                    </tr>
                    <tbody>
                    </tbody>
                  </table>
                  <table border="2" style="width:100%;border-style:ridge;" id="makakalikasan">
                    <tr>
                      <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makakalikasan</td>
                    </tr>
                    <tbody>
                    </tbody>
                  </table>
                  <table border="2" style="width:100%;border-style:ridge;" id="makabansa">
                    <tr>
                      <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makabansa</td>
                    </tr>
                    <tbody>
                    </tbody>
                  </table>
                </td>
              </table>
            </div>
              </div>

          </div>

          <!-- START -->

          <div class="box box-default box-solid">
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-cog margin-r-5"></i>

              <h3 class="box-title">
              GRADE DESCRIPTORS
              </h3>
            </div>
            <div class="box-body">
            <div class="box-header with-border">
            <center><img src="../objects/grades.png" style="width:75%;"></center>
          </div>
          </div>
          </div>

          <!-- END -->

          <!-- START -->

          <div class="box box-default box-solid">
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-calendar margin-r-5"></i>

              <h3 class="box-title">
              ATTENDANCE REPORT
              </h3>
            </div>
            <div class="box-body">
            <div class="box-header with-border">
            <table border="1px solid black;" style="width:100%;background-position:center;background-size: contain;" background="https://www.msoutlook.info/pictures/bgconfidential.png" id="attendance">
                                    <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                                      <td style="width:20%;">MONTH</td>
                                      <td style="width:10%;font-size:10px;">AUG</td>
                                      <td style="width:10%;font-size:10px;">SEP</td>
                                      <td style="width:10%;font-size:10px;">OCT</td>
                                      <td style="width:10%;font-size:10px;">NOV</td>
                                      <td style="width:10%;font-size:10px;">DEC</td>
                                      <td style="width:10%;font-size:10px;">JAN</td>
                                      <td style="width:10%;font-size:10px;">FEB</td>
                                      <!--
                                      <td style="width:5%;font-size:10px;">MAR</td>
                                      <td style="width:5%;font-size:10px;">APR</td>
                                      -->
                                      <td style="width:10%;">TOTAL</td>
                                    </tr>
                                    <tbody>
                                    </tbody>
                                  </table>
          </div>
          </div>
          </div>

          <!-- END -->

          <!-- START -->

          <div class="box box-default box-solid">
            <div class="box-header" style="background-color:#8138cf;color:white;">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-star margin-r-5"></i>

              <h3 class="box-title">
              RECOGNITION AND ACHIEVEMENT
              </h3>
            </div>
            <div class="box-body">
            <div class="box-header with-border">
            <table border="1" style="width:100%;" id="rank">
                  <thead>
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <td style="width:20%;padding:5px 0px;">Quarter</td>
                    <td style="width:40%;">Academic Excellence</td>
                    <td style="width:10%;">Rank</td>
                    <td style="width:30%;">Other Merit Awards</td>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr style="text-align:center;">
                    <td style="width:20%;padding:5px 0px;">4th</td>
                    <td style="width:40%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:30%;"></td>
                  </tr>
                  <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                    <td style="width:20%;padding:5px 0px;">FINAL</td>
                    <td style="width:40%;"></td>
                    <td style="width:10%;"></td>
                    <td style="width:30%;"></td>
                  </tr>
                  </tfoot>
          </table>
          </div>
          </div>
          </div>

          <!-- END -->


          <!-- /.box -->
      </div>
    <!-- /.box-body 
    
  </div>
  REMOVING FOR NOW -->

  <!-- /.box -->
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
            url: "../student/api/read_single.php?username=<?php echo $_GET['user_id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#card_name').val(data['name']);
                $('#card_level_section').val(data['level_section']);
                $('#card_lrn').val(data['lrn']);
                document.getElementById('name').innerHTML = data['name'];
                document.getElementById('level_section').innerHTML = data['level_section'];
                document.getElementById('student_num').innerHTML = data['student_num'];
                document.getElementById('lrn').innerHTML = data['lrn'];
                document.getElementById('status').innerHTML = data['status'];
                document.getElementById('email_address').innerHTML = data['email_address'];
                document.getElementById('emergency_contact').innerHTML = data['emergency_contact'];
                document.getElementById('contact_email').innerHTML = data['contact_email'];
                document.getElementById('adviser').innerHTML = data['adviser'];
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
        url: "../student/api/read_grades_hs.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:10%;font-size:14px;text-align:left;padding:5px 0px 5px 20px;"><b>'+data[user].display_name+"</b></td>";
                if (data[user].first<70){
                  response += "<td>70</td>";}
                else {
                  response +="<td>"+data[user].first+"</td>";}
                if (data[user].second<70){
                  response += "<td>70</td>";}
                else {
                  response +="<td>"+data[user].second+"</td>";}
                if (data[user].third<70){
                  response += "<td>70</td>";}
                else {
                  response +="<td>"+data[user].third+"</td>";}
                response += "<td> </td><td> </td><td> </td>";
                //if (data[user].fourth<70){
                //  response += "<td>70</td>";}
                //else {
                //  response +="<td>"+data[user].fourth+"</td>";}
                //response += "<td><b>"+data[user].final+"</b></td>";
                //if (data[user].final>74){
                //  response += "<td style='color:#008000'>Passed</td>";}
                //else {
                //  response +="<td style='color:#FF0000'>Failed</td>";}
                response +="</tr>";
            }
            $(response).appendTo($("#grades1"));
        }
    });
  });

  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../student/api/read_grades_sem1.php?username=<?php echo $_GET['user_id']; ?>",
            dataType: 'json',
            success: function(data) {
                //document.getElementById('card_final').innerHTML = data['final'];
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
        url: "../student/api/read_values.php?username=<?php echo $_GET['user_id']; ?>",
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

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_deportment1_elem.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                '<td style="width:10%;">'+data[user].first+"</td>"+
                '<td style="width:10%;">'+data[user].second+"</td>"+
                '<td style="width:10%;">'+data[user].third+"</td>"+
                '<td style="width:10%;"> </td>'+
                '<td style="width:10%;"> </td>'+
                "</tr>";
            }
            $(response).appendTo($("#makadiyos"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_deportment2_elem.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                '<td style="width:10%;">'+data[user].first+"</td>"+
                '<td style="width:10%;">'+data[user].second+"</td>"+
                '<td style="width:10%;">'+data[user].third+"</td>"+
                '<td style="width:10%;"> </td>'+
                '<td style="width:10%;"> </td>'+
                "</tr>";
            }
            $(response).appendTo($("#makatao"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_deportment3_elem.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                '<td style="width:10%;">'+data[user].first+"</td>"+
                '<td style="width:10%;">'+data[user].second+"</td>"+
                '<td style="width:10%;">'+data[user].third+"</td>"+
                '<td style="width:10%;"> </td>'+
                '<td style="width:10%;"> </td>'+
                "</tr>";
            }
            $(response).appendTo($("#makakalikasan"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_deportment4_elem.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                '<td style="width:10%;">'+data[user].first+"</td>"+
                '<td style="width:10%;">'+data[user].second+"</td>"+
                '<td style="width:10%;">'+data[user].third+"</td>"+
                '<td style="width:10%;"> </td>'+
                '<td style="width:10%;"> </td>'+
                "</tr>";
            }
            $(response).appendTo($("#makabansa"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_deportment.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += '<tr>'+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:40%;">'+data[user].subject+"</td>"+
                '<td style="width:10%;">'+data[user].first+"</td>"+
                '<td style="width:10%;">'+data[user].second+"</td>"+
                '<td style="width:10%;">'+data[user].third+"</td>"+
                '<td style="width:10%;">'+data[user].fourth+"</td>"+
                '<td style="width:10%;">'+data[user].final+"</td>"+
                "</tr>";
            }
            $(response).appendTo($("#deportment"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_attendance.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += '<tr style="text-align:center;">'+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:20%;padding:5px 0px;">'+data[user].description+"</td>"+
                '<td style="width:10%;">'+data[user].aug+"</td>"+
                '<td style="width:10%;">'+data[user].sep+"</td>"+
                '<td style="width:10%;">'+data[user].oct+"</td>"+
                '<td style="width:10%;">'+data[user].nov+"</td>"+
                '<td style="width:10%;">'+data[user].dece+"</td>"+
                '<td style="width:10%;">'+data[user].jan+"</td>"+
                '<td style="width:10%;">'+data[user].feb+"</td>"+
                '<td style="width:10%;">'+data[user].total+"</td>"+
                "</tr>";
            }
            $(response).appendTo($("#attendance"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../student/api/read_rank.php?username=<?php echo $_GET['user_id']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += '<tr style="text-align:center;">'+
                //"<td>"+data[user].user_id+"</td>"+
                '<td style="width:20%;padding:5px 0px;">'+data[user].quarter+"</td>"+
                '<td style="width:40%;">'+data[user].award+"</td>"+
                '<td style="width:10%;"></td>'+
                '<td style="width:30%;"></td>'+
                "</tr>";
            }
            $(response).appendTo($("#rank"));
        }
    });
  });

</script>