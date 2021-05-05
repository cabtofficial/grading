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
                      
                    <div class="col-md-12">
                    <!-- BAR CHART -->
                    <div class="box box-success">
                      <div class="box-header with-border">
                        <h3 class="box-title">Pre-registration Statistics</h3>
          
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <div class="box-body">
                        <div id="chart-container">
                          <p>The chart will render here!</p>
                        </div>
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

var spreadsheetId = "1MMFXqBQ02a06QLmkjbOAhxIOh8bGsSzNB_OHpaDwDn4",
  url = "https://spreadsheets.google.com/feeds/list/" +
  spreadsheetId +
  "/3/public/basic?alt=json";

$.get({
  url: url,
  success: function(response) {
    console.log(response);
    var data = response.feed.entry,
      len = data.length,
      i = 0,
      parsedData1 = [];
      parsedData2 = [];
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();
      today = mm + '/' + dd + '/' + yyyy;

    for (i = 0; i < len; i++) {
      parsedData1.push({
        label: data[i].title.$t,
        value: data[i].content.$t.replace('count: ', '')
      });
    }

    new FusionCharts({
      type: 'column2d',
      renderAt: 'chart-container',
      width: '100%',
      height: '400',
      dataFormat: 'json',
      dataSource: {
        "chart": {
          "caption": "Number of Registrants for A.Y. 2020-2021",
          "captionFontBold": "0",
          "captionFontSize": "20",
          "subcaption": "as of " + today,
          "subcaptionFontSize": "12",
          "xaxisname": "Grade Level",
          "xAxisNameFontSize": "16",
          "xAxisNameFontBold": "0",
          "yAxisName": "Count of Enrollees",
          "yAxisNameFontSize": "16",
          "yAxisNameFontBold": "0",
          "showLimits": "0",
          "theme": "fusion",

          // general chart configuration
          "paletteColors": "#2AA992",
          "plotFillAlpha": "70",
          "usePlotGradientColor": "0",
          "canvasbgalpha": "0",
          "showAlternateHGridColor": "0",
          "divlinealpha": "50",
          "divlinedashed": "0",
          "rotateyaxisname": "1",
          "canvasbordercolor": "#FFF",
          "canvasborderthickness": ".3",
          "canvasborderalpha": "100",
          "showValues": "0",
          "plotSpacePercent": "12",
          "showPlotBorder": "1",
          "plotBorderColor": "#2AA992",
          "plotBorderThickness": "1",
          "labelFontSize": "12",
          "outCnvBaseFontSize": "15",

          // tooltip configuration
          "toolTipPadding": "12",
          "toolTipBorderRadius": "3",
          "toolTipBorderThickness": "1",
          "toolTipBorderColor": "#ccc",
        },
        "data": parsedData1
      }
    }).render();
  }
});

</script>