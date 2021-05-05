<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li class="active">
      <a href="../student/test.php">
        <i class="fa fa-address-card"></i></i> <span>Student Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
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
<div class="col-md-3">

  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="../student/object/lrn/424500150092.jpg" alt="User profile picture">

      <h3 class="profile-username text-center" id="name">Name</h3>

      <p class="text-muted text-center" id="level_section">Grade Level - Section</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Student Number</b> <a class="pull-right" id="student_num">Student ID</a>
        </li>
        <li class="list-group-item">
          <b>LRN</b> <a class="pull-right" id="lrn">LRN</a>
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
      <li><a href="#accounts" data-toggle="tab">Accounts</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="profile">
        <!-- Post -->
                   <form role="form" class="form-horizontal">
                      <div class="box-body">
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>Address</b> <a class="pull-right" id="address">Address</a>
                          </li>
                          <li class="list-group-item">
                            <b>Birthdate</b> <a class="pull-right" id="birthdate">Birthdate</a>
                          </li>
                          <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right" id="gender">Gender</a>
                          </li>
                          <li class="list-group-item">
                            <b>Emergency Contact</b> <a class="pull-right" id="emergency_contact">Emergency Contact</a>
                          </li>
                          <li class="list-group-item">
                            <b>Phone Number</b> <a class="pull-right" id="phone">Phone Number</a>
                          </li>
                          <li class="list-group-item">
                            <b>Previous School</b> <a class="pull-right" id="previous_school">Previous School</a>
                          </li>
                        </ul>
                      </div>
							      </form>

        <!-- /.post -->
        
      </div>

      <!-- /.tab-pane -->

      <div class="tab-pane" id="grades">
      <table id="example2" class="table table-bordered table-hover">

      <style>
      th#sem                {font-family: Lucida Sans; background-color: #DD90FF;}
      th#genavg             {font-family: Lucida Sans;}
      th#top                {font-family: Bodoni MT;}
      th#grade              {font-family: Segoe UI Semibold;}
      th#subject            {font-family: Bodoni MT;}
      label#lrn                {font-size:10px;}
      th#grade_level        {font-size:10px;}
      th#name               {font-size:10px;}
      th#address            {font-size:10px;}
      th#birthdate          {font-size:10px;}
      th#gender             {font-size:10px;}
      th#emergency_contact  {font-size:10px;}
      th#phone              {font-size:10px;}
      th#previous_school    {font-size:10px;}
      }
      </style>
      <thead>
          <tr>
            
            <th id="sem" colspan="4" style="text-align:center">First Sem</th>
            <th id="sem" colspan="4" style="text-align:center">Second Sem</th>                                                                   
          </tr>
          <tr>
            <th id="top">Subjects</th>
            <th id="top">First Quarter</th>
            <th id="top">Second Quarter</th>
            <th id="top">Final</th>
            <th id="top">Subjects</th>
            <th id="top">First Quarter</th>
            <th id="top">Second Quarter</th>
            <th id="top">Final</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <th id="subject">Pre-Calculus</th>
            <th id="grade">80</th>
            <th id="grade">83</th>
            <th id="grade">82</th>
            <th id="subject">Basic Calculus</th>
            <th id="grade">86</th>
            <th id="grade">85</th>
            <th id="grade">86</th>
          </tr>
          <tr>
            <th id="subject">Earth and Life Science</th>
            <th id="grade"><span class="label label-danger">70</span></th>
            <th id="grade"><span class="label label-warning">75</span></th>
            <th id="grade"><span class="label label-danger">72.5</span></th>
            <th id="subject">General Chemistry</th>
            <th id="grade">82</th>
            <th id="grade">87</th>
            <th id="grade">85</th>
          </tr>
          <tr>
            <th id="subject">General Mathematics</th>
            <th id="grade"><span class="label label-danger">71</span></th>
            <th id="grade"><span class="label label-danger">73</span></th>
            <th id="grade"><span class="label label-danger">72</span></th>
            <th id="subject">Statistics and Probability</th>
            <th id="grade">90</th>
            <th id="grade">88</th>
            <th id="grade">89</th>
          </tr>
          <tr>
            <th id="genavg">General Average</th>
            <th></th>
            <th></th>
            <th id="grade"><span class="label label-warning">75.5</span></th>
            <th id="genavg">General Average</th>
            <th></th>
            <th></th>
            <th id="grade">87</th>
          </tr>
      </tbody>
    </table> 
      </div>
      <!-- /.tab-pane -->

      <div class="tab-pane" id="accounts">
      <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Fee</th>
          <th>Due Date</th>
          <th>Status</th>
          <th>Date paid</th>
        </tr>
        <tr>
          <td>Tuition Fee</td>
          <td>08-20-2020</td>
          <td><span class="label label-success">Settled</span></td>
          <td>07-27-2020</td>
        </tr>
        <tr>
          <td>Activity Fee</td>
          <td>08-20-2020</td>
          <td><span class="label label-success">Settled</span></td>
          <td>07-27-2020</td>
        </tr>
        <tr>
          <td>Energy Fee</td>
          <td>08-20-2020</td>
          <td><span class="label label-success">Settled</span></td>
          <td>07-27-2020</td>
        </tr>
        <tr>
          <td>Uniforms</td>
          <td>08-20-2020</td>
          <td><span class="label label-warning">Unsettled</span></td>
          <td>06-15-2020</td>
        </tr>
        <tr>
          <td>Books/Notebooks</td>
          <td>08-20-2020</td>
          <td><span class="label label-warning">Unsettled</span></td>
          <td>06-15-2020</td>
        </tr>
        <tr>
          <td>Miscellaneous Fees</td>
          <td>08-20-2020</td>
          <td><span class="label label-danger">Unsettled</span></td>
          <td></td>
        </tr>
        <tr>
          <td>Other Fees
            <div class="form-group">
              <input type="text" class="form-control" id="other_fees" placeholder="Other Fees" readonly style="width:100%;">
             </div>              
          </td>
          <td>08-20-2020</td>
          <td><span class="label label-danger">Unsettled</span></td>
          <td></td>
        </tr>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
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
            url: "../student/api/read_single.php?lrn=<?php echo $_GET['lrn']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#card_name').val(data['name']);
                $('#card_level_section').val(data['level_section']);
                $('#card_lrn').val(data['lrn']);
                document.getElementById('name').innerHTML = data['name'];
                document.getElementById('level_section').innerHTML = data['level_section'];
                document.getElementById('student_num').innerHTML = data['student_num'];
                document.getElementById('lrn').innerHTML = data['lrn'];
                document.getElementById('address').innerHTML = data['address'];
                document.getElementById('birthdate').innerHTML = data['birthdate'];
                document.getElementById('gender').innerHTML = data['gender'];
                document.getElementById('emergency_contact').innerHTML = data['emergency_contact'];
                document.getElementById('phone').innerHTML = data['phone'];
                document.getElementById('previous_school').innerHTML = data['previous_school'];
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