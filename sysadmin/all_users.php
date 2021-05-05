<?php
  $content = '

  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Home -->
    <li class="treeview">
      <a href="#"><i class="fa fa-dashboard"></i><span>Home</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../sysadmin/dashboard.php">Dashboard</a></li>
      </ul>
    </li>
    
    <!-- Users -->
    <li class="active treeview">
      <a href="#"><i class="glyphicon glyphicon-user"></i><span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../sysadmin/all_users.php">All Users</a></li>
        <li><a href="../login/register.php">Add User</a></li>
      </ul>
    </li>

    <!-- Settings -->
    <li class="treeview">
      <a href="#"><i class="fa fa-cog"></i><span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../sysadmin/settings.php">Settings</a></li>
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
  System Administrator
    <small>Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Users</a></li>
    <li class="active">All Users</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
            <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Users List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="users" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Active Since</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
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
        url: "../sysadmin/user/read.php",
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
</script>