<?php
  $content = '
  
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->
    <li>
      <a href="../teacher/test.php">
        <i class="fa fa-address-card"></i></i> <span>Student Profile</span>
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

    <li class="active">
      <a href="../admin/calendar.php">
        <i class="fa fa-calendar"></i> <span>Profile</span>
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
  Dashboard
    <small>Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
      <!-- Main content -->
<section class="content">
<!-- Main content -->
<section class="content">
  

<div class="row">
<div class="col-md-3">

  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="../dist/img/Abueg_Gilbert.png" alt="User profile picture">

      <h3 class="profile-username text-center">Teacher Name</h3>

      <p class="text-muted text-center">Employee Number</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Position</b> <a class="pull-right">Adviser</a>
        <li class="list-group-item">
          <b>Status</b> <a class="pull-right">Employed</a>
        </li>
        <li class="list-group-item">
          <b>Gender</b> <a class="pull-right">Male</a>
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
        B.S. in Computer Science from the University of Centennial
      </p>

      <hr>

      <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

      <p class="text-muted">General Trias, Cavite</p>
      <hr>

      <strong><i class="fa fa-birthday-cake margin-r-5"></i> Birthday</strong>

      <p class="text-muted">January 1, 1998</p>

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
      <li class="active"><a href="#activity" data-toggle="tab">Class Schedule</a></li>
      <li><a href="#settings" data-toggle="tab">Government info</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="activity">
        <!-- Post -->
        <div class="post">
          <!-- /.user-block -->
        </div>
        <!-- /.post -->
        <table id="subjects" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Time</th>
          <th>Subject</th>
          <th>Grade Level</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
        <!-- Post -->
        <div class="post clearfix">
          <div class="user-block">
          </div>
          <!-- /.user-block -->
          <form class="form-horizontal">
            <div class="form-group margin-bottom-none">
              <div class="col-sm-9">
              </div>
              <div class="col-sm-3">
              </div>
            </div>
          </form>
        </div>
        <!-- /.post -->

        <!-- Post -->
        <div class="post">
          <div class="user-block">
          </div>
          <!-- /.user-block -->
          <div class="row margin-bottom">
            <div class="col-sm-6">
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.post -->
      </div>
      <!-- /.tab-pane -->
 

      <div class="tab-pane" id="settings">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">SSS#</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputName" placeholder="SSS#">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">TIN#</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" placeholder="TIN#">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">PAGIBIG</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" placeholder="PAGIBIG">
            </div>
          </div>
          <div class="form-group">
            <label for="inputExperience" class="col-sm-2 control-label">PHILHEALTH</label>

            <div class="col-sm-10">
              <textarea class="form-control" id="inputExperience" placeholder="PHILHEALTH"></textarea>
            </div>
          </div>
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
              </div>
            </div>
          </div>
          <div class="form-group">
            </div>
          </div>
        </form>
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

</div>
<!-- /.content-wrapper -->
              
              ';
              
  include('../sysadmin/master.php');
?>