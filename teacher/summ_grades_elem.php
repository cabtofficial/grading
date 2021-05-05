<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile_elem.php?username='.$_GET['username'].'" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-star"></i>
          <p>Advisory Class<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../teacher/student_list_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Class Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/summ_grades_elem.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Summarized Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/aea_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs</p>
            </a>
          </li>        
        </ul>
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
              <h3 class="card-title" id="section1">Summarized Grades</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">1st Quarter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">2nd Quarter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">3rd Quarter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">4th Quarter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab1" data-toggle="pill" href="#custom-content-below-settings1" role="tab" aria-controls="custom-content-below-settings1" aria-selected="false">Final Grading</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="quarter1">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="quarter2">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="quarter3">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                  No grades available yet for the 4th Grading.
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings1" role="tabpanel" aria-labelledby="custom-content-below-settings-tab1">
                  No grades available yet for the Final Grading.
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
        url: "../teacher/api/read_summ_1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
            $(response).appendTo($("#quarter1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
            $(response).appendTo($("#quarter2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
            $(response).appendTo($("#quarter3"));
        }
    });
  });

</script>