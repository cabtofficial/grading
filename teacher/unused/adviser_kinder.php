<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li>
      <a href="../teacher/index_kinder.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="active">
      <a href="../teacher/adviser_kinder.php?username='.$_GET['username'].'">
        <i class="fa fa-star"></i></i> <span>Advisory Class</span>
          <span class="pull-right-container">
        </span>
      </a>
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
  Faculty Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Faculty Profile</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
      <!-- Main content -->
<section class="content">
  

<div class="row">
<!-- /.col -->
<div class="col-md-12">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#grades1" data-toggle="tab">1st Quarter Grades</a></li>
      <!--
      <li><a href="#grades2" data-toggle="tab">2nd Quarter Grades</a></li>
      <li><a href="#grades3" data-toggle="tab">3rd Quarter Grades</a></li>
      <li><a href="#grades4" data-toggle="tab">4th Quarter Grades</a></li>
      <li><a href="#gradesfinal" data-toggle="tab">Final Grades</a></li>
      -->
      <!-- <li><a href="#accounts" data-toggle="tab">Accounts</a></li> -->
    </ul>
    <div class="tab-content">
      <!-- /.tab-pane -->

      <div class="active tab-pane" id="grades1">
      
      <!-- Map box -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box">
              <div class="box-header">
                <h3 class="card-title">Kinder - Hope</h3>
              </div>
              <!-- /.box-header -->
              <div class="card-body">
                <table style="font-size:12px;" id="adviser" class="table table-bordered table-striped">
                  <thead style="background-color:#f5cbef;">
                    <tr>
                      <th style="width:14%;border: 2px solid black;">Student Name</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Reading</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Mathematics</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - VE/CL</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Filipino</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Science</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Language</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Kindergraph</th>
                      <th style="width:5%;font-size:10px;border: 2px solid black;">K - Computer</th>                                                                                                                                                                                                                                                        
                      <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>                      
                      <th style="width:7%;font-size:14px;border: 2px solid black;">General Average</th>
                      <th style="width:10%;font-size:14px;border: 2px solid black;">Academic Excellence Award</th>                                        
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
</div>
</div>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- /.nav-tabs-custom -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
              
              ';
              
  include('../sysadmin/master.php');
?>

<!-- page script -->
<script>
  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../teacher/api/read_single.php?username=<?php echo $_GET['username']; ?>",
            dataType: 'json',
            success: function(data) {
                document.getElementById('name').innerHTML = data['first_name'] + ' ' + data['last_name'];
                document.getElementById('faculty_num').innerHTML = data['faculty_num'];
                document.getElementById('designation').innerHTML = data['designation'];
                document.getElementById('status').innerHTML = data['status'];
                document.getElementById('gender').innerHTML = data['gender'];
                $("#schoology_pic").attr("src", data['schoology_pic']);
              },
            error: function (result) {
              console.log(result);
            },
        });
    });

    $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_grades_q1_kinder.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+"</td>"+
                '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+"</td>"+
                '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+"</td>"+
                '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+"</b></td>"+
                '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";
            }
            $(response).appendTo($("#adviser"));
        }
    });
  });

  $(document).ready(function() {
    $('#faculty_grades1').DataTable( {
        "processing": true,
        "serverSide": true,
        "json": "../teacher/api/read_grades.php?username=<?php echo $_GET['username']; ?>"
    } );
} );


</script>