<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li class="active">
      <a href="../teacher/index_all.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="treeview">
        <a href="#">
          <i class="fa fa-star"></i> <span>Class Cards</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../teacher/student_list_elem.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Elementary</a></li>
          <li><a href="../teacher/student_list_jhs.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Junior High School</a></li>
          <li><a href="../teacher/student_list_shs.php?username='.$_GET['username'].'"><i class="fa fa-circle-o"></i> Senior High School</a></li>
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
<div class="col-md-3">

  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img id="schoology_pic" class="profile-user-img img-responsive img-circle" alt="User profile picture">

      <h3 class="profile-username text-center" id="name">Teacher Name</h3>

      <p id="faculty_num" class="text-muted text-center">Employee Number</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Position</b> <a class="pull-right" id="designation">Adviser</a>
        <li class="list-group-item">
          <b>Status</b> <a class="pull-right" id="status">Employed</a>
        </li>
        <li class="list-group-item">
          <b>Gender</b> <a class="pull-right" id="gender">Male</a>
        </li>
        </li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- About Me Box -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">About Me</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

      <p class="text-muted">
        N/A
      </p>

      <hr>

      <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

      <p class="text-muted">N/A</p>
      <hr>

      <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birthday</strong>

      <p class="text-muted">N/A</p>

      <hr>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
<div class="col-md-9">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#profile" data-toggle="tab">Faculty Information</a></li>
      <!--<li><a href="#grades" data-toggle="tab">1st Quarter Grades</a></li>
       <li><a href="#accounts" data-toggle="tab">Accounts</a></li> -->
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="profile">
        <!-- Post -->
                   <form role="form" class="form-horizontal">
                      <div class="box-body">
                        <ul class="list-group list-group-unbordered">
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
                            <b>Birthdate</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Phone Number</b> <a class="pull-right" id="phone">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>SSS</b> <a class="pull-right" id="previous_school">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>TIN</b> <a class="pull-right" id="previous_school">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Pag-ibig</b> <a class="pull-right" id="previous_school">N/A</a>
                          </li>
                          <li class="list-group-item">
                            <b>Philhealth</b> <a class="pull-right" id="previous_school">N/A</a>
                          </li>
                        </ul>
                      </div>
							      </form>

        <!-- /.post -->
        
      </div>

      <!-- /.tab-pane -->

      <div class="tab-pane" id="grades">
      
      <!-- Map box -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">1st Quarter Grading</h3>
              </div>
              <!-- /.box-header -->
              <div class="card-body">
                <table id="faculty_grades" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Student Number</th>
                      <th>Subject</th>
                      <th>Student Name</th>
                      <th>Grade</th>
                      <th>Remarks</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Student Number</th>
                      <th>Subject</th>
                      <th>Student Name</th>
                      <th>Grade</th>
                      <th>Remarks</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
        url: "../teacher/api/read_grades.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].student_num+"</td>"+
                "<td>"+data[user].subject+"</td>"+
                "<td>"+data[user].name+"</td>"+
                "<td>"+data[user].first+"</td>";
                if (data[user].remarks=="Passed"){
                  response += "<td style='color:#008000'>"+data[user].remarks+"</td>";}
                else {
                  response +="<td style='color:#FF0000'>"+data[user].remarks+"</td>";}
                "</tr>";
            }
            $(response).appendTo($("#faculty_grades"));
        }
    });
  });

  $(document).ready(function() {
    $('#faculty_grades1').DataTable( {
        "processing": true,
        "serverSide": true,
        "json": "../teacher/api/read_grades.php?username=<?php echo $_GET['username']; ?>"
    } );
} );


</script>