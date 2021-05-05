<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile_shs.php?username='.$_GET['username'].'" class="nav-link">
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
            <a href="../teacher/student_list_shs.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Class Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/summ_grades_shs.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Summarized Grades</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../teacher/aea_shs_abm.php?username='.$_GET['username'].'" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>ABM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../teacher/aea_shs_stem.php?username='.$_GET['username'].'" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>STEM</p>
                </a>
              </li>
            </ul>
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
                  <a class="nav-link active" id="custom-content-below-home-tab1" data-toggle="pill" href="#custom-content-below-home1" role="tab" aria-controls="custom-content-below-home1" aria-selected="true">1st Sem 1st Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab1" data-toggle="pill" href="#custom-content-below-profile1" role="tab" aria-controls="custom-content-below-profile1" aria-selected="false">1st Sem 2nd Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab11" data-toggle="pill" href="#custom-content-below-profile11" role="tab" aria-controls="custom-content-below-profile11" aria-selected="false">1st Sem Final</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-messages-tab1" data-toggle="pill" href="#custom-content-below-messages1" role="tab" aria-controls="custom-content-below-messages1" aria-selected="false">2nd Sem 3rd Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab1" data-toggle="pill" href="#custom-content-below-settings1" role="tab" aria-controls="custom-content-below-settings1" aria-selected="false">2nd Sem 4th Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab11" data-toggle="pill" href="#custom-content-below-settings11" role="tab" aria-controls="custom-content-below-settings11" aria-selected="false">2nd Sem Final</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-home1" role="tabpanel" aria-labelledby="custom-content-below-home-tab1">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section1sem1quarter1">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile1" role="tabpanel" aria-labelledby="custom-content-below-profile-tab1">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section1sem1quarter2">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile11" role="tabpanel" aria-labelledby="custom-content-below-profile-tab11">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section1sem1final">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-messages1" role="tabpanel" aria-labelledby="custom-content-below-messages-tab1">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section1sem2quarter3">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings1" role="tabpanel" aria-labelledby="custom-content-below-settings-tab1">
                  No grades available yet for the 2nd Sem 4th Qtr Grading.
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings11" role="tabpanel" aria-labelledby="custom-content-below-settings-tab11">
                  No grades available yet for the 2nd Sem Final Grading.
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title" id="section2">Summarized Grades</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-content-below-home-tab2" data-toggle="pill" href="#custom-content-below-home2" role="tab" aria-controls="custom-content-below-home2" aria-selected="true">1st Sem 1st Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab2" data-toggle="pill" href="#custom-content-below-profile2" role="tab" aria-controls="custom-content-below-profile2" aria-selected="false">1st Sem 2nd Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-profile-tab12" data-toggle="pill" href="#custom-content-below-profile12" role="tab" aria-controls="custom-content-below-profile12" aria-selected="false">1st Sem Final</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-messages-tab2" data-toggle="pill" href="#custom-content-below-messages2" role="tab" aria-controls="custom-content-below-messages2" aria-selected="false">2nd Sem 3rd Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab2" data-toggle="pill" href="#custom-content-below-settings2" role="tab" aria-controls="custom-content-below-settings2" aria-selected="false">2nd Sem 4th Qtr</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-content-below-settings-tab12" data-toggle="pill" href="#custom-content-below-settings12" role="tab" aria-controls="custom-content-below-settings12" aria-selected="false">2nd Sem Final</a>
                </li>
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-home2" role="tabpanel" aria-labelledby="custom-content-below-home-tab2">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section2sem1quarter1">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile2" role="tabpanel" aria-labelledby="custom-content-below-profile-tab2">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section2sem1quarter2">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-profile12" role="tabpanel" aria-labelledby="custom-content-below-profile-tab12">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section2sem1final">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-messages2" role="tabpanel" aria-labelledby="custom-content-below-messages-tab2">
                  <table style="font-size:12px;" class="table-xs table-bordered" id="section2sem2quarter3">
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings2" role="tabpanel" aria-labelledby="custom-content-below-settings-tab2">
                  No grades available yet for the 2nd Sem 4th Qtr Grading.
                </div>
                <div class="tab-pane fade" id="custom-content-below-settings12" role="tabpanel" aria-labelledby="custom-content-below-settings-tab12">
                  No grades available yet for the 2nd Sem Final Grading.
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
        url: "../teacher/api/read_summ_1_shs.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section1sem1quarter1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section1sem1quarter2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=<?php echo $_SESSION["adviser1"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section1sem2quarter3"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1_shs.php?section=<?php echo $_SESSION["adviser2"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section2sem1quarter1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=<?php echo $_SESSION["adviser2"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section2sem1quarter2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=<?php echo $_SESSION["adviser2"]; ?>",
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
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub7+"</center></td>";}

                if (data[user].sub8<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else if (data[user].sub8==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub8+"</center></td>";}

                if (data[user].sub9<75) {
                  response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else if (data[user].sub9==79) {
                  response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                else {
                  response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub9+"</center></td>";}
                
                if ((data[user].sub10>=50&&data[user].sub10<=100)||(data[user].sub10=='Values Education and Christian Living')) {
                  if (data[user].sub10<75) {
                    response += "<td class='bg-maroon color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else if (data[user].sub10==79) {
                    response += "<td class='bg-warning color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}
                  else {
                    response += "<td class='bg-light color-palette' style='width:5%;'><center>"+data[user].sub10+"</center></td>";}}
                else {
                  response += "";}

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
            $(response).appendTo($("#section2sem2quarter3"));
        }
    });
  });

</script>