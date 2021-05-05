<?php
  include("../sysadmin/fusioncharts.php");

  $content = '

  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->
    <li class="active">
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
    <li class="treeview">
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
              <!-- START Dashboard -->

        <div class="row">
            <!-- left column -->
            <div class="col-sm-12">
              <!-- general form elements -->
              <div class="box box-primary">

                <!-- START Dashboard header -->

                <div class="box-header with-border">
                <table style="width:100%;">
                  <tr>
                    <td><h3 class="box-title">Administrator Dashboard</h3></td>
                  </tr>
                </table>
                </div>

                <!-- END Dashboard header -->

                <div class="box-body">

                <!-- START Dashboard body -->
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="callout callout-info">
                            <div class="box-header with-border">
                                <center><h4>Faculty and Staff</h4></center>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                       <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-green-active"><ion-icon name="happy-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Present</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">
                                       <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-red"><ion-icon name="body-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Absent</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-yellow"><ion-icon name="time-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Late</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                   </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="callout callout-success">
                            <div class="box-header with-border">
                                <center><h4>Students</h4></center>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                       <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-green-active"><ion-icon name="happy-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Present</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">
                                       <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-red"><ion-icon name="body-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Absent</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-14">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-yellow"><ion-icon name="time-outline"></ion-icon></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text" style="color:black;">Late</span>
                                                <span class="info-box-number" style="color:black;">0</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    <!-- /.info-box -->
                                    </div>
                                   </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                    <!-- BAR CHART -->
                    <div class="box box-solid box-danger">
                      <div class="box-header with-border">
                        <h3 class="box-title">Enrollees Per Year</h3>
          
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                      </div>
                      <div class="box-body chart-responsive">
                        <div class="chart" id="bar-chart" style="height: 300px;"></div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    </div>
                    

                <!-- END Dashboard body -->
        
                </div>
              </div>
              <!-- general form elements -->
            </div>
            <!-- left column --> 
        </div>

        <!-- END Dashboard -->
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
        url: "../sysadmin/user_read.php",
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
            }
            $(response).appendTo($("#users"));
        }
    });
  });

  $(function () {
    "use strict";

    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {Year: '2012', Old: 75, New: 65},
        {Year: '2013', Old: 75, New: 65},
        {Year: '2014', Old: 50, New: 40},
        {Year: '2015', Old: 75, New: 65},
        {Year: '2016', Old: 50, New: 40},
        {Year: '2017', Old: 75, New: 65},
        {Year: '2018', Old: 100, New: 90},
        {Year: '2019', Old: 100, New: 90},
        {Year: '2020', Old: 100, New: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'Year',
      ykeys: ['Old', 'New'],
      labels: ['Old', 'New'],
      hideHover: 'auto'
    });
});
</script>

