<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile_shs.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-star"></i>
          <p>Advisory Class<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../teacher/student_list_shs.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Class Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/summ_grades_shs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Summarized Grades</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../teacher/aea_shs_abm.php?username='.$_GET['username'].'" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>ABM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../teacher/aea_shs_stem.php?username='.$_GET['username'].'" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>STEM</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
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
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" id="section1">Section 1</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser1">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" id="section2">Section 2</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="adviser2">
                  <thead>                  
                    <tr style="text-align:center;">
                      <th>Student Name</th>
                      <th>Action</th>
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
            url: "../teacher/api/read_shs_adviser.php?username=<?php echo $_GET['username']; ?>",
            dataType: 'json',
            success: function(data) {
                document.getElementById('section1').innerHTML = data['section1'];
                document.getElementById('section2').innerHTML = data['section2'];
              },
            error: function (result) {
              console.log(result);
            },
        });
    });
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].last_name+", "+data[user].first_name+"</td>"+
                "<td style='text-align:center;'><a class='badge bg-success' style='padding:5px;' href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_list.php?section=<?php echo $_SESSION["adviser2"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].last_name+", "+data[user].first_name+"</td>"+
                "<td style='text-align:center;'><a class='badge bg-success' style='padding:5px;' href='../teacher/index_shs.php?username=<?php echo $_GET['username']; ?>&user_id="+data[user].student_num+"'>View Card</a>"+
                "</tr>";
            }
            $(response).appendTo($("#adviser2"));
        }
    });
  });

</script>