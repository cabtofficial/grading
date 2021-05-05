<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}

// Load System Settings

// Include config file
include_once "../login/config.php";

// Prepare a select statement
$sql = "SELECT name, initials, website, color, scheme FROM sys_settings";

if($stmt = mysqli_prepare($link, $sql)){
   // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    // Store result
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_num_rows($stmt) == 1){
      mysqli_stmt_bind_result($stmt, $name, $initials, $website, $color, $scheme);
      if(mysqli_stmt_fetch($stmt)){
        $_SESSION["name"] = $name;
        $_SESSION["initials"] = $initials;
        $_SESSION["website"] = $website; 
        $_SESSION["color"] = $color;
        $_SESSION["scheme"] = $scheme;
      }
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo htmlspecialchars($_SESSION["name"]); ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="../objects/school.ico" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style-->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

  <!-- START For Admin Dashboard -->
  <!--
  <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
  <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
  -->
  <!-- END For Admin Dashboard -->

  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  
<!-- Include FusionCharts core file
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
 -->

<!-- Include FusionCharts Theme file 
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Morris chart -->
<link rel="stylesheet" href="../bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<!--
<link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
-->
<!-- DataTables -->
<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

</head>

<?php if ($_SESSION["scheme"] == 'dark') {?>
  <body class="hold-transition skin-<?php echo htmlspecialchars($_SESSION["color"]); ?> sidebar-mini">
<?php } else {?>
  <body class="hold-transition skin-<?php echo htmlspecialchars($_SESSION["color"]); ?>-light sidebar-mini">
<?php } ?>

<div class="wrapper fixed">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i><img src="../objects/school_logo.png" style="width:75%;height:75%;"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-family:'Copperplate';font-size: 16px;><i class="></i><img src="../objects/school_logo.png" style="width:20%;height:20%;"> <b>Card Viewing System</b></span>
      <!-- <span class="logo-lg">of the Blessed Trinity</span> -->
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-image: url('../objects/banner.png');background-size: 100% 100%;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
                <?php if ($_SESSION["user_id"] == '1') {?>
                  <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
                <?php } else {?>
                  <!-- <img src="http://graph.facebook.com/<php echo htmlspecialchars($_SESSION["fb_id"]); ?>/picture?type=large&redirect=true&width=720&height=720" class="user-image" alt="User Image">-->
                  <img src="<?php echo htmlspecialchars($_SESSION["fb_id"]); ?>" class="user-image" alt="User Image">
                <?php } ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo htmlspecialchars($_SESSION["description"]); ?></span>
            </a>
            <ul class="dropdown-menu" style="height:100%;">
              <!-- The user image in the menu -->
              <li class="user-header">
                <?php if ($_SESSION["user_id"] == '1') {?>
                  <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                <?php } else {?>
                  <!--<img src="http://graph.facebook.com/<php echo htmlspecialchars($_SESSION["fb_id"]); ?>/picture?type=large&redirect=true&width=720&height=720" class="img-circle" alt="User Image">-->
                  <img src="<?php echo htmlspecialchars($_SESSION["fb_id"]); ?>" class="img-circle" alt="User Image">
                <?php } ?>
                <p style="font-size:16px;">
                <?php echo htmlspecialchars($_SESSION["description"]); ?></br>
                <small><?php echo htmlspecialchars($_SESSION["user_role"]); ?></small>
                  <!--ID: VPNLM3-->
                  <small>Member since <?php echo htmlspecialchars($_SESSION["start_date_active"]); ?></small></br>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../login/forms.php" class="btn btn-default btn-flat">Change Role</a>
                </div>
                <div class="pull-right">
                  <a href="../login/logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if ($_SESSION["user_id"] == '1') {?>
            <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
          <?php } else {?>
            <!--<img src="http://graph.facebook.com/<php echo htmlspecialchars($_SESSION["fb_id"]); ?>/picture?type=large&redirect=true&width=720&height=720" class="img-circle" alt="User Image">-->
            <img src="<?php echo htmlspecialchars($_SESSION["fb_id"]); ?>" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p style="width:5%;font-size:12px;"><?php echo htmlspecialchars($_SESSION["description"]); ?></p>
          <!-- Status -->
          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <?php echo $content; ?>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href=<?php echo htmlspecialchars($_SESSION["website"]); ?>><?php echo htmlspecialchars($_SESSION["name"]); ?></a>.</strong> All rights reserved. ライル.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!--
!-- Bootstrap 4 --
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
!-- Bootstrap WYSIHTML5 --
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
-->
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- bundle -->
<!--
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/vendor/apexcharts.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
-->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<!--<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>-->
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!--
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
-->
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
</body>
</html>

