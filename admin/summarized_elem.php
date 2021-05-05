<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../admin/index.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-star"></i>
          <p>Class Cards<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../admin/student_list_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Elementary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/student_list_jhs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Junior High School</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/student_list_shs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Senior High School</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon far fa-list-alt"></i>
          <p>Summarized Grades<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../admin/summarized_elem.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Elementary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/summarized_hs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>High School</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="../admin/attendance.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-calendar-alt"></i>
          <p>Attendance</p>
        </a>
      </li>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <li class="nav-item">
        <a href="../login/forms.php" class="nav-link">
          <i class="nav-icon far fa-circle text-warning"></i>
          <p>
            Change Role
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../login/logout.php" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p>
            Log Out
          </p>
        </a>
      </li>
    </ul>
  </nav>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Summarized Grades</h1>
        </div><!-- /.col -->
      </div>
    </div>
  </div>
  <!-- END Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Elementary</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="g1-tab" data-toggle="pill" href="#g1" role="tab" aria-controls="g1" aria-selected="true">Grade 1</a></li>
                <li class="nav-item"><a class="nav-link" id="g2-tab" data-toggle="pill" href="#g2" role="tab" aria-controls="g2" aria-selected="false">Grade 2</a></li>                
                <li class="nav-item"><a class="nav-link" id="g3-tab" data-toggle="pill" href="#g3" role="tab" aria-controls="g3" aria-selected="false">Grade 3</a></li>                
                <li class="nav-item"><a class="nav-link" id="g4-tab" data-toggle="pill" href="#g4" role="tab" aria-controls="g4" aria-selected="false">Grade 4</a></li>                
                <li class="nav-item"><a class="nav-link" id="g5-tab" data-toggle="pill" href="#g5" role="tab" aria-controls="g5" aria-selected="false">Grade 5</a></li>                
                <li class="nav-item"><a class="nav-link" id="g6-tab" data-toggle="pill" href="#g6" role="tab" aria-controls="g6" aria-selected="false">Grade 6</a></li>                
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="g1" role="tabpanel" aria-labelledby="g1-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g1q1-tab" data-toggle="pill" href="#g1q1" role="tab" aria-controls="g1q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g1q2-tab" data-toggle="pill" href="#g1q2" role="tab" aria-controls="g1q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g1q3-tab" data-toggle="pill" href="#g1q3" role="tab" aria-controls="g1q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g1q4-tab" data-toggle="pill" href="#g1q4" role="tab" aria-controls="g1q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g1final-tab" data-toggle="pill" href="#g1final" role="tab" aria-controls="g1final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g1q1" role="tabpanel" aria-labelledby="g1q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g1q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g1q2" role="tabpanel" aria-labelledby="g1q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g1q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g1q3" role="tabpanel" aria-labelledby="g1q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g1q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g1q4" role="tabpanel" aria-labelledby="g1q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g1q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g1final" role="tabpanel" aria-labelledby="g1final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g1finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g2" role="tabpanel" aria-labelledby="g2-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g2q1-tab" data-toggle="pill" href="#g2q1" role="tab" aria-controls="g2q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g2q2-tab" data-toggle="pill" href="#g2q2" role="tab" aria-controls="g2q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g2q3-tab" data-toggle="pill" href="#g2q3" role="tab" aria-controls="g2q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g2q4-tab" data-toggle="pill" href="#g2q4" role="tab" aria-controls="g2q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g2final-tab" data-toggle="pill" href="#g2final" role="tab" aria-controls="g2final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g2q1" role="tabpanel" aria-labelledby="g2q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g2q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g2q2" role="tabpanel" aria-labelledby="g2q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g2q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g2q3" role="tabpanel" aria-labelledby="g2q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g2q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g2q4" role="tabpanel" aria-labelledby="g2q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g2q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g2final" role="tabpanel" aria-labelledby="g2final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g2finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g3" role="tabpanel" aria-labelledby="g3-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g3q1-tab" data-toggle="pill" href="#g3q1" role="tab" aria-controls="g3q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g3q2-tab" data-toggle="pill" href="#g3q2" role="tab" aria-controls="g3q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g3q3-tab" data-toggle="pill" href="#g3q3" role="tab" aria-controls="g3q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g3q4-tab" data-toggle="pill" href="#g3q4" role="tab" aria-controls="g3q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g3final-tab" data-toggle="pill" href="#g3final" role="tab" aria-controls="g3final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g3q1" role="tabpanel" aria-labelledby="g3q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g3q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g3q2" role="tabpanel" aria-labelledby="g3q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g3q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g3q3" role="tabpanel" aria-labelledby="g3q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g3q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g3q4" role="tabpanel" aria-labelledby="g3q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g3q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g3final" role="tabpanel" aria-labelledby="g3final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g3finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g4" role="tabpanel" aria-labelledby="g4-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g4q1-tab" data-toggle="pill" href="#g4q1" role="tab" aria-controls="g4q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g4q2-tab" data-toggle="pill" href="#g4q2" role="tab" aria-controls="g4q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g4q3-tab" data-toggle="pill" href="#g4q3" role="tab" aria-controls="g4q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g4q4-tab" data-toggle="pill" href="#g4q4" role="tab" aria-controls="g4q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g4final-tab" data-toggle="pill" href="#g4final" role="tab" aria-controls="g4final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g4q1" role="tabpanel" aria-labelledby="g4q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g4q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g4q2" role="tabpanel" aria-labelledby="g4q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g4q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g4q3" role="tabpanel" aria-labelledby="g4q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g4q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g4q4" role="tabpanel" aria-labelledby="g4q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g4q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g4final" role="tabpanel" aria-labelledby="g4final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g4finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g5" role="tabpanel" aria-labelledby="g5-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g5q1-tab" data-toggle="pill" href="#g5q1" role="tab" aria-controls="g5q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g5q2-tab" data-toggle="pill" href="#g5q2" role="tab" aria-controls="g5q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g5q3-tab" data-toggle="pill" href="#g5q3" role="tab" aria-controls="g5q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g5q4-tab" data-toggle="pill" href="#g5q4" role="tab" aria-controls="g5q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g5final-tab" data-toggle="pill" href="#g5final" role="tab" aria-controls="g5final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g5q1" role="tabpanel" aria-labelledby="g5q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g5q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g5q2" role="tabpanel" aria-labelledby="g5q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g5q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g5q3" role="tabpanel" aria-labelledby="g5q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g5q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g5q4" role="tabpanel" aria-labelledby="g5q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g5q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g5final" role="tabpanel" aria-labelledby="g5final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g5finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g6" role="tabpanel" aria-labelledby="g6-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g6q1-tab" data-toggle="pill" href="#g6q1" role="tab" aria-controls="g6q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g6q2-tab" data-toggle="pill" href="#g6q2" role="tab" aria-controls="g6q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g6q3-tab" data-toggle="pill" href="#g6q3" role="tab" aria-controls="g6q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g6q4-tab" data-toggle="pill" href="#g6q4" role="tab" aria-controls="g6q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g6final-tab" data-toggle="pill" href="#g6final" role="tab" aria-controls="g6final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g6q1" role="tabpanel" aria-labelledby="g6q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g6q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g6q2" role="tabpanel" aria-labelledby="g6q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g6q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g6q3" role="tabpanel" aria-labelledby="g6q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g6q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g6q4" role="tabpanel" aria-labelledby="g6q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g6q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g6final" role="tabpanel" aria-labelledby="g6final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g6finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- END Content Wrapper. Contains page content -->
              
              ';
              
  include('../sysadmin/master.php');
?>

<!-- page script -->
<script>
  $(document).ready(function(){
      $.ajax({
          type: "GET",
          url: "../teacher/api/read_shs_adviser.php?username=<?php echo $_GET['username']; ?>",
          dataType: 'json',
          success: function(data) {
              document.getElementById('section1').innerHTML = data['section1'];
              document.getElementById('section2').innerHTML = data['section2'];
            },
          error: function (result) {
            console.log(result);
          },
      });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 1 - Annunciation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g1q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 1 - Annunciation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g1q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 1 - Annunciation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g1q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 2 - Visitation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g2q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 2 - Visitation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g2q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 2 - Visitation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g2q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 3 - Nativity",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g3q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 3 - Nativity",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g3q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 3 - Nativity",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g3q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 4 - Presentation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g4q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 4 - Presentation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g4q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 4 - Presentation",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g4q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 5 - Resurrection",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g5q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 5 - Resurrection",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g5q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 5 - Resurrection",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g5q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 6 - Corpus Christi",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g6q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 6 - Corpus Christi",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g6q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 6 - Corpus Christi",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td class='bg-purple disabled color-palette' style='width:15%;'>"+data[user].name+"</td>";

                if (data[user].sub1<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else if (data[user].sub1==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;padding:10px 0px;'><center>"+data[user].sub1+"</center></td>";}

                if (data[user].sub2<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else if (data[user].sub2==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub2+"</center></td>";}

                if (data[user].sub3<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else if (data[user].sub3==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub3+"</center></td>";}

                if (data[user].sub4<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else if (data[user].sub4==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub4+"</center></td>";}

                if (data[user].sub5<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else if (data[user].sub5==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub5+"</center></td>";}

                if (data[user].sub6<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else if (data[user].sub6==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub6+"</center></td>";}

                if (data[user].sub7<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else if (data[user].sub7==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}

                if (data[user].sub10<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else if (data[user].sub10==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}

                if (data[user].sub11<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else if (data[user].sub11==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub11+"</center></td>";}

                if (data[user].sub12<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else if (data[user].sub12==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub12+"</center></td>";}

                if (data[user].sub13<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else if (data[user].sub13==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub13+"</center></td>";}

                if (data[user].sub14<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else if (data[user].sub14==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                else {
                  response += "<td class='bg-light disabled color-palette' style='width:5%;'><center>"+data[user].sub14+"</center></td>";}
                
                response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].unrounded+"</center></td>";

                if (data[user].rounded>89) {
                  response += "<td class='bg-lime color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<80 && data[user].rounded>74) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else if (data[user].rounded<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                else {
                  response += "<td class='bg-lime disabled color-palette' style='width:5%;'><center>"+data[user].rounded+"</center></td>";}
                
                if (data[user].award=="With Highest Honors") {
                  response += "<td class='bg-indigo disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With High Honors") {
                  response += "<td class='bg-primary disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else if (data[user].award=="With Honors") {
                  response += "<td class='bg-warning disabled color-palette' style='width:5%;'><center>"+data[user].award+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette'' style='width:5%;'><center>"+data[user].award+"</center></td>";}

                "</tr>";
            }
            $(response).appendTo($("#g6q3summ"));
        }
    });
  });

</script>