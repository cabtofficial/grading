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
        <li class="active"><a href="../sysadmin/all_users.php">All Users</a></li>
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
    System Users
    <small>Update Role</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Users</a></li>
    <li>All Users</li>
    <li class="active">Update Role</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">

  <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                    <div class="box-header with-border">
                    <table style="width:100%">
                      <tr>
                        <td><h3 class="box-title">Update User</h3></td>
                        <td align="right"><h3 class="box-title"><u><a href="../sysadmin/all_users.php">Go Back</h3></u></td>
                      <tr>
                    </table>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                      <table style="width:100%;">
                      <td style="width:45%;vertical-align:text-top;"> 
                        <div class="form-group">
                          <label for="exampleInputName1">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter Username" readonly>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control" id="confirm_password" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Description</label>
                          <input type="text" class="form-control" id="description" placeholder="Description">
                        </div>
                      </td>
                      <td style="width:1%"></td>
                      <td style="width:45%;vertical-align:text-top;">
                        <div class="form-group">
                          <label for="exampleInputName1">Email Address</label>
                          <input type="text" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Phone Number</label>
                          <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Facebook ID</label>
                          <input type="text" class="form-control" id="fb_id" placeholder="Facebook ID">
                        </div>
                      </div>
                      <div class="form-group">
                            <label for="exampleInputName1">User Enabled</label>
                            <div class="radio">
                                <label>
                                <input type="radio" name="enabled_flag" id="enabled_flagY" value="Y" checked="">
                                Enabled
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="enabled_flag" id="enabled_flagN" value="N">
                                Disabled
                                </label>
                            </div>
                        </div>
                      <!-- /.box-body -->
                      </td>
                      </table>
                      <div class="box-footer">
                        <input type="button" class="btn btn-primary" onClick="UpdateUser()" value="Update"></input>
                      </div>
                    </form>
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
<script>
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../sysadmin/user/read_single.php?user_id=<?php echo $_GET['user_id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#username').val(data['username']);
                //$('#password').val(data['password']);
                $('#description').val(data['description']);
                $('#email').val(data['email']);
                $('#phone').val(data['phone']);
                $('#fb_id').val(data['fb_id']);
                $('#enabled_flag'+data['enabled_flag']).prop("checked", true);
              },
            error: function (result) {
                console.log(result);
            },
        });
    });
    function UpdateUser(){
      if ($("#password").val()!="") {
        if ($("#password").val()==$("#confirm_password").val()) {
          $.ajax(
          {
            type: "POST",
            url: '../sysadmin/user/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                username: $("#username").val(),
                password: $("#password").val(),        
                description: $("#description").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                fb_id: $("#fb_id").val(),
                enabled_flag: $("input[name='enabled_flag']:checked").val(),
                last_updated_by: <?php echo $_SESSION['user_id']; ?>
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    alert("Successfully Updated User!");
                    window.location.href = '../sysadmin/all_users.php';
                }
                else {
                    alert(result['message']);
                }
            }
          });
        } else {
          alert("Passwords do not match!");
        }
      } else {
        alert("New Password Required for Update!");
      }
    }
</script>