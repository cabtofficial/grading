<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile.php?username='.$_GET['username'].'" class="nav-link">
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
            <a href="../teacher/student_list.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Class Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Attendance</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>1st Quarter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>2nd Quarter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>3rd Quarter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>4th Quarter</p>
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
            <h1 class="m-0 text-dark">Student Profile</h1>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
    <!-- END Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img id="schoology_pic" 
                         class="profile-user-img img-fluid img-circle"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center" id="name">Name</h3>

                  <p class="text-muted text-center" id="level_section">Grade Level - Section</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Student Number</b> <a class="float-right" id="student_num">Student Number</a>
                    </li>
                    <li class="list-group-item">
                      <b>LRN</b> <a class="float-right" id="lrn">LRN</a>
                    </li>
                    <li class="list-group-item">
                      <b>Class Adviser</b> <a class="float-right" id="adviser">Adviser</a>
                    </li>
                  </ul>

                </div>
              </div>
              <!-- END Profile Image -->
          </div>

          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Student Information</a></li>
                  <li class="nav-item"><a class="nav-link" href="#grades" data-toggle="tab">Class Grades</a></li>
                  <li class="nav-item"><a class="nav-link" href="#absent" data-toggle="tab">Attendance</a></li>
                </ul>
              </div> <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="status" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="email_address" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Emergency Contact</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="emergency_contact" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">Emergency Contact Email</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="contact_email" placeholder="N/A" readonly></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Birthdate</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Previous School</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="phone" placeholder="N/A" readonly>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="grades">
                    <div class="col-md-12">
                      <!-- Subject Grades -->
                      <div class="card card-outline card-primary">
                        <div class="card-header bg-purple color-palette">
                          
                          <h3 class="card-title"><i class="fas fa-book-open"></i> REPORT ON LEARNER\'S ACHIEVEMENT</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table style="width:100%;">
                            <td style="width:50%;text-align:center;vertical-align:text-top;">
                              <table border="2" style="width:100%;border-style:ridge;" id="grades1">
                                <tr style="background-color: #DBB6D6;font-weight: bold;">
                                  <td rowspan="2" style="width:40%;">Learning Areas</td>
                                  <td colspan="4" style="width:40%;">Quarterly Rating</td>
                                  <td rowspan="2" style="width:10%;font-size:11px;">FINAL RATING</td>
                                  <td rowspan="2" style="width:20%;font-size:11px;">REMARKS</td>
                                </tr>
                                <tr style="background-color: #DBB6D6;font-weight: bold;">
                                  <td style="width:10%;">1</td>
                                  <td style="width:10%;">2</td>
                                  <td style="width:10%;">3</td>
                                  <td style="width:10%;">4</td>
                                </tr>
                                <tbody>
                                </tbody>
                                <tr style="background-color: #DBB6D6;font-weight:bold;">
                                  <td colspan="5" style="width:10%;">GENERAL AVERAGE</td>
                                  <td style="width:10%;" id="card_final"></td>
                                  <td style="width:10%;" id="card_remarks"></td>
                                </tr>
                              </table>
                              <table border="2" style="width:100%;border-style:ridge;" id="deportment" cellpadding="3">
                                <tr style="background-color: #DBB6D6;font-weight: bold;border-style:double;">
                                  <td style="width:40%;"></td>
                                  <td style="width:10%;"></td>
                                  <td style="width:10%;"></td>
                                  <td style="width:10%;"></td>
                                  <td style="width:10%;"></td>
                                  <td style="width:10%;"></td>
                                  <td style="width:10%;"></td>
                                </tr>
                                <tbody>
                                </tbody>
                              </table>
                            </td>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- Deportment -->
                      <div class="card card-outline card-primary">
                        <div class="card-header bg-purple color-palette">
                          <h3 class="card-title"><i class="fas fa-praying-hands"></i> REPORT ON LEARNER\'S OBSERVED VALUES</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table style="width:100%;">
                            <td style="width:50%;text-align:center;vertical-align:text-top;">
                              <table border="2" style="width:100%;border-style:ridge;">
                                <tr>
                                  <td rowspan="2" style="width:50%;">Core Values and Character Traits</td>
                                  <td colspan="5" style="width:50%;">Semestral Rating</td>
                                </tr>
                                <tr>
                                  <td style="width:10%;">1</td>
                                  <td style="width:10%;">2</td>
                                  <td style="width:10%;">3</td>
                                  <td style="width:10%;">4</td>
                                  <td style="width:10%;">FINAL</td>
                                </tr>
                              </table>
                              <table border="2" style="width:100%;border-style:ridge;" id="makadiyos">
                                <tr>
                                  <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Maka-Diyos</td>
                                </tr>
                                <tbody>
                                </tbody>
                              </table>
                              <table border="2" style="width:100%;border-style:ridge;" id="makatao">
                                <tr>
                                  <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makatao</td>
                                </tr>
                                <tbody>
                                </tbody>
                              </table>
                              <table border="2" style="width:100%;border-style:ridge;" id="makakalikasan">
                                <tr>
                                  <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makakalikasan</td>
                                </tr>
                                <tbody>
                                </tbody>
                              </table>
                              <table border="2" style="width:100%;border-style:ridge;" id="makabansa">
                                <tr>
                                  <td colspan="6" style="background-color: #DBB6D6;font-weight: bold;border-style:double;"">Makabansa</td>
                                </tr>
                                <tbody>
                                </tbody>
                              </table>
                            </td>
                          </table>
                        </div>
                      </div>
                      <!-- Grade Descriptors -->
                      <div class="card card-outline card-primary">
                        <div class="card-header bg-purple color-palette">
                          <h3 class="card-title"><i class="fas fa-shapes"></i> GRADE DESCRIPTORS</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <center><img src="../objects/grades.png" style="width:75%;"></center>
                        </div>
                      </div>
                      <!-- Attendace Report -->
                      <div class="card card-outline card-primary">
                        <div class="card-header bg-purple color-palette">
                          <h3 class="card-title"><i class="fas fa-calendar-alt"></i> ATTENDANCE REPORT</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table border="1px solid black;" style="width:100%;" id="attendance">
                            <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                              <td style="width:20%;">MONTH</td>
                              <td style="width:10%;font-size:10px;">AUG</td>
                              <td style="width:10%;font-size:10px;">SEP</td>
                              <td style="width:10%;font-size:10px;">OCT</td>
                              <td style="width:10%;font-size:10px;">NOV</td>
                              <td style="width:10%;font-size:10px;">DEC</td>
                              <td style="width:10%;font-size:10px;">JAN</td>
                              <td style="width:10%;font-size:10px;">FEB</td>
                              <!--
                              <td style="width:5%;font-size:10px;">MAR</td>
                              <td style="width:5%;font-size:10px;">APR</td>
                              -->
                              <td style="width:10%;">TOTAL</td>
                            </tr>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- Recognition and Achievement -->
                      <div class="card card-outline card-primary">
                        <div class="card-header bg-purple color-palette">
                          <h3 class="card-title"><i class="fas fa-award"></i> RECOGNITION AND ACHIEVEMENT</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table border="1" style="width:100%;background-position:center;background-size: contain;" background="https://www.msoutlook.info/pictures/bgconfidential.png" id="rank">
                            <thead>
                              <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                                <td style="width:20%;">Quarter</td>
                                <td style="width:40%;">Academic Excellence</td>
                                <td style="width:10%;">Rank</td>
                                <td style="width:30%;">Other Merit Awards</td>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                              <tr style="text-align:center;">
                                <td style="width:20%;padding:5px 0px;">4th</td>
                                <td style="width:40%;"></td>
                                <td style="width:10%;"></td>
                                <td style="width:30%;"></td>
                              </tr>
                              <tr style="background-color: #DBB6D6;font-weight:bold;text-align:center;">
                                <td style="width:20%;padding:5px 0px;">FINAL</td>
                                <td style="width:40%;"></td>
                                <td style="width:10%;"></td>
                                <td style="width:30%;"></td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="absent">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header bg-purple color-palette">
                              <h3 class="card-title">Subject Absences</h3>
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table class="table table-bordered" id="subj_absences">
                                <thead>                  
                                  <tr>
                                    <th>Subject</th>
                                    <th>Absences</th>
                                    <th style="width: 40px">Count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
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
                  url: "../student/api/read_single.php?username=<?php echo $_GET['user_id']; ?>",
                  dataType: 'json',
                  success: function(data) {
                      $('#card_name').val(data['name']);
                      $('#card_level_section').val(data['level_section']);
                      $('#card_lrn').val(data['lrn']);
                      document.getElementById('name').innerHTML = data['name'];
                      document.getElementById('level_section').innerHTML = data['level_section'];
                      document.getElementById('student_num').innerHTML = data['student_num'];
                      document.getElementById('lrn').innerHTML = data['lrn'];
                      document.getElementById('status').innerHTML = data['status'];
                      document.getElementById('email_address').innerHTML = data['email_address'];
                      document.getElementById('emergency_contact').innerHTML = data['emergency_contact'];
                      document.getElementById('contact_email').innerHTML = data['contact_email'];
                      document.getElementById('adviser').innerHTML = data['adviser'];
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
              url: "../student/api/read_grades_hs.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:10%;font-size:14px;text-align:left;padding:5px 0px 5px 20px;"><b>'+data[user].display_name+"</b></td>";
                      if (data[user].first<70){
                        response += "<td>70</td>";}
                      else {
                        response +="<td>"+data[user].first+"</td>";}
                      if (data[user].second<70){
                        response += "<td>70</td>";}
                      else {
                        response +="<td>"+data[user].second+"</td>";}
                      if (data[user].third<70){
                        response += "<td>70</td>";}
                      else {
                        response +="<td>"+data[user].third+"</td>";}
                      response += "<td> </td><td> </td><td> </td>";
                      //if (data[user].fourth<70){
                      //  response += "<td>70</td>";}
                      //else {
                      //  response +="<td>"+data[user].fourth+"</td>";}
                      //response += "<td><b>"+data[user].final+"</b></td>";
                      //if (data[user].final>74){
                      //  response += "<td style='color:#008000'>Passed</td>";}
                      //else {
                      //  response +="<td style='color:#FF0000'>Failed</td>";}
                      response +="</tr>";
                  }
                  $(response).appendTo($("#grades1"));
              }
          });
        });

        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_grades_sem1.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                document.getElementById('sem1_final').innerHTML = data['sem1_final'];
                if (data['sem1_final']>74){
                  document.getElementById('remarks1').innerHTML = "Passed";}
                else {
                  document.getElementById('remarks1').innerHTML = "Failed";}
              }
          });
        });

          $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_values.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      "<td>"+data[user].attribute2+"</td>"+
                      "<td>"+data[user].first_a+"</td>"+
                      "<td>"+data[user].second_a+"</td>"+
                      "<td>"+data[user].third_a+"</td>"+
                      "<td>"+data[user].fourth_a+"</td>"+
                      "<td>"+data[user].final_a+"</td>"+
                      "</tr>";
                  }
                  $(response).appendTo($("#values1"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment1_shs.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                      '<td style="width:10%;">'+data[user].first+"</td>"+
                      '<td style="width:10%;">'+data[user].second+"</td>"+
                      '<td style="width:10%;">'+data[user].third+"</td>"+
                      '<td style="width:10%;"> </td>'+
                      '<td style="width:10%;"> </td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#makadiyos"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment2_shs.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                      '<td style="width:10%;">'+data[user].first+"</td>"+
                      '<td style="width:10%;">'+data[user].second+"</td>"+
                      '<td style="width:10%;">'+data[user].third+"</td>"+
                      '<td style="width:10%;"> </td>'+
                      '<td style="width:10%;"> </td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#makatao"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment3_shs.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                      '<td style="width:10%;">'+data[user].first+"</td>"+
                      '<td style="width:10%;">'+data[user].second+"</td>"+
                      '<td style="width:10%;">'+data[user].third+"</td>"+
                      '<td style="width:10%;"> </td>'+
                      '<td style="width:10%;"> </td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#makakalikasan"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment4_shs.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += "<tr>"+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:50%;padding:5px 0px 5px 0px;">'+data[user].value+"</td>"+
                      '<td style="width:10%;">'+data[user].first+"</td>"+
                      '<td style="width:10%;">'+data[user].second+"</td>"+
                      '<td style="width:10%;">'+data[user].third+"</td>"+
                      '<td style="width:10%;"> </td>'+
                      '<td style="width:10%;"> </td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#makabansa"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += '<tr>'+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:40%;">'+data[user].subject+"</td>"+
                      '<td style="width:10%;">'+data[user].first+"</td>"+
                      '<td style="width:10%;">'+data[user].second+"</td>"+
                      '<td style="width:10%;">'+data[user].third+"</td>"+
                      '<td style="width:10%;">'+data[user].fourth+"</td>"+
                      '<td style="width:10%;">'+data[user].final+"</td>"+
                      "</tr>";
                  }
                  $(response).appendTo($("#deportment"));
              }
          });
        });

        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_deportment.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += '<tr>'+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td colspan="2" style="width:60%;padding:3px 0px 3px 0px;">'+data[user].subject+"</td>"+
                      '<td colspan="1" style="width:10%;padding:3px 0px 3px 0px;">'+data[user].third+"</td>"+
                      '<td colspan="1" style="width:10%;padding:3px 0px 3px 0px;"></td>'+
                      '<td colspan="1" style="width:10%;padding:3px 0px 3px 0px;"></td>'+
                      '<td colspan="2" style="width:10%;border-style:hidden hidden hidden none;padding:3px 0px;"></td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#deportment2"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_attendance.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += '<tr style="text-align:center;">'+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:20%;padding:5px 0px;">'+data[user].description+"</td>"+
                      '<td style="width:10%;">'+data[user].aug+"</td>"+
                      '<td style="width:10%;">'+data[user].sep+"</td>"+
                      '<td style="width:10%;">'+data[user].oct+"</td>"+
                      '<td style="width:10%;">'+data[user].nov+"</td>"+
                      '<td style="width:10%;">'+data[user].dece+"</td>"+
                      '<td style="width:10%;">'+data[user].jan+"</td>"+
                      '<td style="width:10%;">'+data[user].feb+"</td>"+
                      '<td style="width:10%;">'+data[user].total+"</td>"+
                      "</tr>";
                  }
                  $(response).appendTo($("#attendance"));
              }
          });
        });
      
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_rank.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += '<tr style="text-align:center;">'+
                      //"<td>"+data[user].user_id+"</td>"+
                      '<td style="width:20%;padding:5px 0px;">'+data[user].quarter+"</td>"+
                      '<td style="width:40%;">'+data[user].award+"</td>"+
                      '<td style="width:10%;"></td>'+
                      '<td style="width:30%;"></td>'+
                      "</tr>";
                  }
                  $(response).appendTo($("#rank"));
              }
          });
        });
        
        $(document).ready(function(){
          $.ajax({
              type: "GET",
              url: "../student/api/read_subj_absences.php?username=<?php echo $_GET['user_id']; ?>",
              dataType: 'json',
              success: function(data) {
                  var response="";
                  for(var user in data){
                      response += '<tr>'+
                      //"<td>"+data[user].user_id+"</td>"+
                      "<td>"+data[user].display_name+"</td>"+
                      '<td><div class="progress"><div class="progress-bar bg-danger" style="width: '+data[user].percent_absent+'%"></div></div></td>'+
                      '<td style="text-align:center;">'+data[user].subject_absences+"</td>"+
                      "</tr>";
                  }
                  $(response).appendTo($("#subj_absences"));
              }
          });
        });
      
      </script>

