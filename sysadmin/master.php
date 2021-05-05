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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo htmlspecialchars($_SESSION["name"]); ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="../objects/school.ico" />
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../adminlte/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../adminlte/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../adminlte/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../adminlte/plugins/fullcalendar-bootstrap/main.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image: url('../objects/banner.png');background-size: 100% 100%;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../objects/school_logo.png" alt="CABT" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Card Viewing System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- The user image in the navbar-->
            <?php if ($_SESSION["user_id"] == '1') {?>
              <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
            <?php } else {?>
              <!-- <img src="http://graph.facebook.com/<php echo htmlspecialchars($_SESSION["fb_id"]); ?>/picture?type=large&redirect=true&width=720&height=720" class="user-image" alt="User Image">-->
              <img src="<?php echo htmlspecialchars($_SESSION["fb_id"]); ?>" class="user-image" alt="User Image">
            <?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo htmlspecialchars($_SESSION["description"]); ?></a>
        </div>
      </div>

      <?php echo $content; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0. ライル. ©lyle.
    </div>
    <strong>Copyright &copy; 2020 <a href=<?php echo htmlspecialchars($_SESSION["website"]); ?>><?php echo htmlspecialchars($_SESSION["name"]); ?></a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="../adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../adminlte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../adminlte/plugins/raphael/raphael.min.js"></script>
<script src="../adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../adminlte/dist/js/pages/dashboard2.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="../adminlte/plugins/moment/moment.min.js"></script>
<script src="../adminlte/plugins/fullcalendar/main.min.js"></script>
<script src="../adminlte/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../adminlte/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../adminlte/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../adminlte/plugins/fullcalendar-bootstrap/main.min.js"></script>

<!-- Load React. -->
<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
<script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

<!-- Load our React component. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>

</body>
</html>
