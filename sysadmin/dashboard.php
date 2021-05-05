<?php
  include("../sysadmin/fusioncharts.php");

  $content = '

  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Home -->
    <li class="active treeview">
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
  <small>Dashboard</small>
</h1>
<ol class="breadcrumb">
  <li><a href="../sysadmin/dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
  <li class="active">Dashboard</li>
</ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
              <div class="row">
          <!-- left column -->
          <div class="col-sm-3">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h3 class="box-title">Site Visits Today:</h3></td>
                </tr>
              </table>
              </div>
              <div class="box-body">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h1 class="box-title">999</h3></td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
          <!-- left column -->
          <div class="col-sm-3">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h3 class="box-title">Visitors Today:</h3></td>
                <tr>
              </table>
              </div>
              <div class="box-body">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h1 class="box-title">999</h3></td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->

          <!-- left column -->
          <div class="col-sm-3">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h3 class="box-title">Online Users:</h3></td>
                <tr>
              </table>
              </div>
              <div class="box-body">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h1 class="box-title">999</h3></td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
          <!-- left column -->
          <div class="col-sm-3">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h3 class="box-title">Database Utilization:</h3></td>
                <tr>
              </table>
              </div>
              <div class="box-body">
              <table style="width:100%;text-align:center;">
                <tr>
                  <td><h1 class="box-title">999</h3></td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-sm-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%">
                <tr>
                  <td>
                  <center>
                    <div id="chart-container">Chart will render here!</div>
                  </center>
                  </td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
          <!-- left column -->
          <div class="col-sm-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%">
                <tr>
                  <td>
                  <center>
                    <div id="widget-container">Widget will render here!</div>
                  </center>
                  </td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
        </div>

        <div class="row">
          <!-- left column -->
          <div class="col-sm-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <table style="width:100%">
                <tr>
                  <td>
                  <center>
                    <div id="map-container">Map will render here!</div>
                  </center>
                  </td>
                </tr>
              </table>
              </div>
            </div>
            <!-- general form elements -->
          </div>
          <!-- left column -->
        </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

            ';
include('../sysadmin/master.php');

// BAR GRAPH START

// Chart Configuration stored in Associative Array
$arrChartConfig = array(
  "chart" => array(
      "caption" => "Weekly Site Visit",
      "subCaption" => "as of the last 7 days",
      "xAxisName" => "Date",
      "yAxisName" => "Site Visit Count",
      "theme" => "fusion"
  )
);
// An array of hash objects which stores data
$arrChartData = array(
["Venezuela", "290"],
["Saudi", "260"],
["Canada", "180"],
["Iran", "140"],
["Russia", "115"],
["UAE", "100"],
["US", "30"],
["China", "30"]
);
$arrLabelValueData = array();

// Pushing labels and values
for($i = 0; $i < count($arrChartData); $i++) {
  array_push($arrLabelValueData, array(
      "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
  ));
}
$arrChartConfig["data"] = $arrLabelValueData;

// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
$jsonEncodedData = json_encode($arrChartConfig);

// chart object
$Chart = new FusionCharts("column2d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

// Render the chart
$Chart->render();

// BAR GRAPH END

// GAUGE START

// Widget appearance configuration
$arrChartConfig = array(
  "chart" => array(
  "caption" => "User Satisfaction Score for 2020",
  "lowerLimit" => "0",
  "upperLimit" => "100",
  "showValue" => "1",
  "numberSuffix" => "%",
  "theme" => "fusion",
  "showToolTip" => "0"
  )
  );
  
      // Widget color range data
      $colorDataObj = array("color" => array(
          ["minValue" => "0", "maxValue" => "50", "code" => "#F2726F"],
          ["minValue" => "50", "maxValue" => "75", "code" => "#FFC533"],
          ["minValue" => "75", "maxValue" => "100", "code" => "#62B58F"]
      ));
  
      // Dial array
      $dial = array();
  
      // Widget dial data in array format, multiple values can be separated by comma e.g. ["81", "23", "45",...]
      $widgetDialDataArray = array("45");
      for($i = 0; $i < count($widgetDialDataArray); $i++) {
          array_push($dial,array("value" => $widgetDialDataArray[$i]));
      }
  
      $arrChartConfig["colorRange"] = $colorDataObj;
      $arrChartConfig["dials"] = array( "dial" => $dial);
  
      // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
      $jsonEncodedData = json_encode($arrChartConfig);
  
      // Widget object
      $Widget = new FusionCharts("angulargauge", "MyFirstWidget" , "400", "250", "widget-container", "json", $jsonEncodedData);
  
      // Render the Widget
      $Widget->render();

// GAUGE END

// MAP START

// Widget appearance configuration
$arrMapConfig = array(
  "chart" => array(
      "caption" => "Average Annual Population Growth",
      "subcaption" => " 1955-2015",
      "numbersuffix" => "%",
      "includevalueinlabels" => "1",
      "labelsepchar" => ": ",
      "entityFillHoverColor" => "#FFF9C4",
      "theme" => "fusion"
  )
);

// Widget color range data
$colorDataObj = array("minvalue" => "0", "code" => "#FFE0B2", "gradient" => "1",
"color" => array(
  ["minValue" => "0", "maxValue" => "50", "code" => "#F2726F"],
  ["minValue" => "50", "maxValue" => "75", "code" => "#FFC533"],
  ["minValue" => "75", "maxValue" => "100", "code" => "#62B58F"]
));

// Map data array
$mapDataArray = array(
  ["NA", ".82", "1"],
  ["SA", "2.04", "1"],
  ["AS", "1.78", "1"],
  ["EU", ".40", "1"],
  ["AF", "2.58", "1"],
  ["AU", "1.30", "1"]
);

$mapData = array();

for($i = 0; $i < count($mapDataArray); $i++) {
  array_push($mapData,array("id" => $mapDataArray[$i][0], "value" => $mapDataArray[$i][1], "showLabel" => $mapDataArray[$i][2]));
}

$arrMapConfig["colorRange"] = $colorDataObj;
$arrMapConfig["data"] = $mapData;

// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
$jsonEncodedData = json_encode($arrMapConfig);

// Map object
$Map = new FusionCharts("maps/cavite", "MyFirstMap" , "800", "500", "map-container", "json", $jsonEncodedData);

// Render the Map
$Map->render();

// MAP END

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
</script>

