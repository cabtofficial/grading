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
        <li class"active"><a href="../admin/enrollees.php"><i class="fa fa-circle-o"></i> Enrollees</a></li>
        <li><a href="../admin/register.php"><i class="fa fa-circle-o"></i> Pre-registered</a></li>
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
  Enrollees
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Students</li>
    <li class="active">Enrollees</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Enrolled Students</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>LRN</th>
              <th>Student Number</th>
              <th>Name</th>
              <th>Section</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
              <th>LRN</th>
              <th>Student Number</th>
              <th>Name</th>
              <th>Section</th>
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
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../admin/api/read.php",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                //"<td>"+data[user].user_id+"</td>"+
                "<td>"+data[user].username+"</td>"+
                "<td>"+data[user].full_name+"</td>"+
                "<td>"+data[user].start_date_active+"</td>";
                if (data[user].status=="Online"){
                  response += "<td style='color:#00FF7F'>"+data[user].status+"</td>";}
                else if(data[user].status=="Disabled"){
                  response +="<td style='color:#808B96'>"+data[user].status+"</td>";}
                else {
                  response +="<td style='color:#FF0000'>"+data[user].status+"</td>";}
                response +="<td><a href='../sysadmin/user_update.php?user_id="+data[user].user_id+"'>Edit User</a> | <a href='../sysadmin/role_update.php?user_id="+data[user].user_id+"'>Edit Role</a></td>"+
                "</tr>";
                console.log(data);
            }
            $(response).appendTo($("#example"));
        }
    });
  });

  $(document).ready(function(){
    $('#example2').DataTable({
        "ajax": "../admin/api/read.php"
    });
  });

  $('#example1').DataTable( {
    ajax: {
        url: '../admin/api/read.php',
        dataSrc: 'feed.entry'
    },
    columns: [
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$timestamp.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$learnerreferencenumberlrn.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$gradeleveltoenroll.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$lastname.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$firstname.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$middlename.$t;
          }
        },
        {
          "data": null ,
          "render" : function ( data, type, row ) {
          return '</br>'+row.gsx$gender.$t;
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

