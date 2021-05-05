<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile_elem.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-star"></i>
          <p>Advisory Class<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../teacher/student_list_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Class Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/summ_grades_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Summarized Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/aea_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs</p>
            </a>
          </li>
        </ul>
        <li class="nav-item">
          <a href="../teacher/aea_elem.php?username='.$_GET['username'].'" class="nav-link active">
            <i class="fas fa-book nav-icon"></i>
            <p>Subject Grades</p>
          </a>
        </li>
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
          <h1 class="m-0 text-dark">Subject Grades</h1>
        </div><!-- /.col -->
      </div>
    </div>
  </div>
  <!-- END Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Teacher Subject Grades</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-5 col-sm-5">
                  <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  </div>
                  </div>
                  <div class="col-7 col-sm-7">
                  <div class="tab-content" id="vert-tabs-tabContent">
                  </div>
                </div>
              </div>
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
        url: "../teacher/api/read_subj_grades.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += '<a class="nav-link" id="vert-tabs-'+data[user].subject_id+'-tab" data-toggle="pill" href="#vert-tabs-'+data[user].subject_id+'" role="tab" aria-controls="vert-tabs-'+data[user].subject_id+'" aria-selected="true">'+data[user].subject+'</a>';
            }
            $(response).appendTo($("#vert-tabs-tab"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_student_subj_grades.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
          for(var user in data){
            var response="";
              response += '<div class="tab-pane text-left fade show active" id="vert-tabs-'+data[user].subject_id+'" role="tabpanel" aria-labelledby="vert-tabs-'+data[user].subject_id+'-tab">';
              response += '        <div class="card-body p-0">';
              response += '          <table class="table table-bordered">';
              response += '            <thead>';
              response += '              <tr>';
              response += '                <th style="width: 40%">Name</th>';
              response += '                <th style="width: 10%">1st</th>';
              response += '                <th style="width: 10%">2nd</th>';
              response += '                <th style="width: 10%">3rd</th>';
              response += '                <th style="width: 10%">4th</th>';
              response += '                <th style="width: 20%">Final</th>';
              response += '              </tr>';
              response += '            </thead>';
              response += '            <tbody>';
              for(var user in data){
                response += '<tr>';
                response += '<td style="width: 40%">'+data[user].name+'</td>';
                response += '<td style="width: 10%">'+data[user].first+'</td>';
                response += '<td style="width: 10%">'+data[user].second+'</td>';
                response += '<td style="width: 10%">'+data[user].third+'</td>';
                response += '<td style="width: 10%">'+data[user].fourth+'</td>';
                response += '<td style="width: 20%">'+data[user].final+'</td>';
                response += '</tr>';
              }
              response += '            </tbody>';
              response += '          </table>';
              response += '        </div>';
              response += '      </div>';
            }
            $(response).appendTo($("#vert-tabs-tabContent"));
        }
    });
  });

</script>