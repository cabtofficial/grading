<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../admin/index.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-star"></i>
          <p>Class Cards<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../admin/student_list_elem.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Elementary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/student_list_jhs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Junior High School</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/student_list_shs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Senior High School</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-list-alt"></i>
          <p>Summarized Grades<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../admin/summarized_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Elementary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/summarized_hs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>High School</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="../admin/attendance.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-calendar-alt"></i>
          <p>Attendance</p>
        </a>
      </li>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <li class="nav-item">
        <a href="../login/forms.php" class="nav-link">
          <i class="nav-icon far fa-circle text-warning"></i>
          <p>
            Change Role
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../login/logout.php" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p>
            Log Out
          </p>
        </a>
      </li>
    </ul>
  </nav>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Class Grades</h1>
        </div><!-- /.col -->
      </div>
    </div>
  </div>
  <!-- END Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section1">Grade 1 - Annunciation</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser1">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section2">Grade 2 - Visitation</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser2">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section3">Grade 3 - Nativity</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser3">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section4">Grade 4 - Presentation</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser4">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section5">Grade 5 - Resurrection</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser5">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-sm" id="section6">Grade 6 - Corpus Christi</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser6">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                    </tr>
                  </thead>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- END Content Wrapper. Contains page content -->
              
              ';
              
  include('../sysadmin/master.php');
?>

<!-- page script -->
<script>
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 1 - Annunciation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 2 - Visitation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 3 - Nativity",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser3"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 4 - Presentation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser4"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 5 - Resurrection",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser5"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=Grade 6 - Corpus Christi",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td><a href='../admin/card_elem.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>"+data[user].last_name+", "+data[user].first_name+"</a></td>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser6"));
        }
    });
  });

</script>