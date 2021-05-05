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
    <li class="treeview">
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
    <li class="active treeview">
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
  Settings
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Settings</li>
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
                    <td><h3 class="box-title">School Settings</h3></td>
                    <td align="right"><h3 class="box-title"><u><a href="../sysadmin/dashboard.php">Go Back</h3></u></td>
                  <tr>
                </table>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <table style="width:100%">
                <!-- Column 1 -->
                <td style="width:50%;vertical-align:text-top;">
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>School Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter School Name">
                    </div>
                    <div class="form-group">
                      <label for="username">School Initials</label>
                      <input type="text" class="form-control" id="initials" placeholder="Enter School Initials">
                    </div>
                    <div class="form-group">
                      <label for="username">School Website</label>
                      <input type="text" class="form-control" id="website" placeholder="Enter Website">
                    </div>
                    <table style="width:100%">
                    <label for="username">Color Scheme</label>
                    <td style="width:50%;vertical-align:text-top;">
                    <div class="form-group">
                      <select class="form-control" id="color">
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="green">Green</option>
                        <option value="purple">Purple</option>
                        <option value="red">Red</option>
                        <option value="black">Black</option>
                      </select>
                    </div>
                    </td>
                    <td style="width:1%;"></td>
                    <td style="width:50%;vertical-align:text-top;">
                    <div class="form-group">
                      <select class="form-control" id="scheme">
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
                      </select>
                    </div>
                    </td>
                    </table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <input type="button" class="btn btn-primary" onClick="UpdateRole()" value="Update"></input>
                  </div>
                </form>
                </td>
                <!-- Column 1 -->
                <!-- Column 2 -->
                <td style="width:50%;vertical-align:text-top;">
                <form role="form">
                  <div class="box-body">
                    
                    <div class="form-group">
                        <label for="username">Icon and Logo</label></br></br>
                        <table style="width:100%">
                        <td style="width:50%;">
                          <form action="../sysadmin/settings/upload_icon.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="myfile"></br>
                            <input type="submit" value="Upload File">
                          </form>
                        </td>
                        <td style="width:50%;"><center>Current Icon:</br><img src="../objects/school.ico" class="img-thumbnail" alt="School Icon" style="width:15%"></center></td>
                        </table>
                     </div>
                     

                    
                    <div class="form-group"> 
                      <table style="width:100%">
                      <td style="width:50%">
                        <form action="../sysadmin/settings/upload_school_bg.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="myfile"></br>
                            <input type="submit" value="Upload File">
                        </form>
                      </td>
                      <td style="width:50%"><center>Current Background:</center><img src="../objects/school_logo.png" class="img-thumbnail" alt="School Logo"></td>
                      </table>
                    </div>
                    

                  </div>
                  <!-- /.box-body -->
                </form>
                </td>
                <!-- Column 2 -->
                </table>
              </div>
              <!-- /.box -->
            </div>
            <!-- left column -->
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
            url: "../sysadmin/settings/read.php",
            dataType: 'json',
            success: function(data) {
                $('#name').val(data['name']);
                $('#initials').val(data['initials']);
                $('#website').val(data['website']);
                $('#color').val(data['color']);
                $('#scheme').val(data['scheme']);
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
            url: '../sysadmin/settings/update.php',
            dataType: 'json',
            data: {
                name: $("#name").val(),
                initials: $("#initials").val(),        
                website: $("#website").val(),
                color: $("#color").val(),
                scheme: $("#scheme").val(),
                last_updated_by: <?php echo $_SESSION['user_id']; ?>
            },
            error: function (result) {
                alert(result.responseText);
            },
            success: function (result) {
                if (result['status'] == true) {
                    //alert("Successfully Updated School Settings!");
                    window.location.href = '../sysadmin/settings.php';
                }
                else {
                    alert(result['message']);
                }
            }
          });
    }
</script>