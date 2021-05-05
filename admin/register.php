<?php
  include("../sysadmin/fusioncharts.php");

  $content = '

  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->
    <li>
      <a href="../admin/index.php">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Pre-registered Students</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Registration Date</th>
              <th>LRN</th>
              <th>Grade Level to Enroll</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
              <th>Registration Date</th>
              <th>LRN</th>
              <th>Grade Level to Enroll</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Gender</th>
              <th>Action</th>
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
<!-- /.content-wrapper -->

            ';
include('../sysadmin/master.php');

?>

<!-- page script -->
<!-- page script -->
<script>

$('#myTable').DataTable( {
    ajax: {
        url: 'https://spreadsheets.google.com/feeds/list/1MMFXqBQ02a06QLmkjbOAhxIOh8bGsSzNB_OHpaDwDn4/1/public/values?alt=json',
        dataSrc: 'feed.entry'
    },
    columns: [
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+lrn;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          //return '<center><a href="../admin/register_single.php?lrn='+row.gsx$learnerreferencenumberlrn.$t+'" class="btn btn-app btn-success"><i class="fa fa-eye"></i>View</a></center>';
          return '<center><a href="../admin/register_single.php?lrn='+row.gsx$id.$t+'" class="btn btn-app btn-success"><i class="fa fa-eye"></i>View</a></center>';
          }
        }
    ]
} );

</script>