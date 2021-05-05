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
                    <td><h3 class="box-title">Update Role</h3></td>
                    <td align="right"><h3 class="box-title"><u><a href="../sysadmin/all_users.php">Go Back</h3></u></td>
                  <tr>
                </table>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter Username" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">User Roles:</label>
                    </div>
                  <!--
                  <div class="form-group">
                        <label for="exampleInputName1">System Administrator</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="sysadmin" id="sysadminY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="sysadmin" id="sysadminN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Developer</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="dev" id="devY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="dev" id="devN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label for="exampleInputName1">School Administrator</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="admin" id="adminY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="admin" id="adminN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Teacher</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="teacher" id="teacherY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="teacher" id="teacherN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Student</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="student" id="studentY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="student" id="studentN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="exampleInputName1">Accounting</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="acctng" id="acctngY" value="Y" checked="">
                            Enabled
                            </label>
                            <label> </label>
                            <label>
                            <input type="radio" name="acctng" id="acctngN" value="N">
                            Disabled
                            </label>
                        </div>
                    </div>
                    -->
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <input type="button" class="btn btn-primary" onClick="UpdateRole()" value="Update"></input>
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
            url: "../sysadmin/role/read_single.php?user_id=<?php echo $_GET['user_id']; ?>",
            dataType: 'json',
            success: function(data) {
                $('#username').val(data['username']);
                $('#sysadmin'+data['sysadmin']).prop("checked", true);
                $('#dev'+data['dev']).prop("checked", true);
                $('#admin'+data['admin']).prop("checked", true);
                $('#teacher'+data['teacher']).prop("checked", true);
                $('#student'+data['student']).prop("checked", true);
                $('#acctng'+data['acctng']).prop("checked", true);
              },
            error: function (result) {
                console.log(result);
            },
        });
    });
    function UpdateRole(){
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                sysadmin: $("input[name='sysadmin']:checked").val()
            }
        });
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                dev: $("input[name='dev']:checked").val()
            }
        });
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                admin: $("input[name='admin']:checked").val()
            }
        });
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                teacher: $("input[name='teacher']:checked").val()
            }
        });
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                student: $("input[name='student']:checked").val()
            }
        });
        $.ajax(
        {
            type: "POST",
            url: '../sysadmin/role/update.php',
            dataType: 'json',
            data: {
                user_id: <?php echo $_GET['user_id']; ?>,
                acctng: $("input[name='acctng']:checked").val()
            }
        });
        alert("Successfully Updated User Role!");
        window.location.href = '../sysadmin/all_users.php';
    }
</script>