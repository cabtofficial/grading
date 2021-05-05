<?php
  $content = '
  
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="../teacher/profile_shs.php?username='.$_GET['username'].'" class="nav-link active">
          <i class="nav-icon fas fa-address-card"></i>
          <p>Faculty Profile</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
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
            <a href="../teacher/summ_grades_shs.php?username='.$_GET['username'].'" class="nav-link">
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
            <h1 class="m-0 text-dark">Faculty Profile</h1>
          </div><!-- /.col -->
        </div>
      </div>
    </div>
    <!-- END Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img id="schoology_pic" 
                         class="profile-user-img img-fluid img-circle"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center" id="name">Teacher Name</h3>

                  <p class="text-muted text-center" id="faculty_num">Employee Number</p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Position</b> <a class="float-right" id="designation">N/A</a>
                    </li>
                    <li class="list-group-item">
                      <b>Status</b> <a class="float-right" id="status">N/A</a>
                    </li>
                    <li class="list-group-item">
                      <b>Gender</b> <a class="float-right" id="gender">N/A</a>
                    </li>
                  </ul>

                </div>
              </div>
              <!-- END Profile Image -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#govt" data-toggle="tab">Government Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#emergency" data-toggle="tab">Emergency Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#test" data-toggle="tab">Test Tab</a></li>
                </ul>
              </div> <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="personal">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Last name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="last_name" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">First name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="first_name" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Middle name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="middle_name" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Date of birth</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="birthday" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Civil Status</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="civil" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Degree</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="degree" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Major</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="major" placeholder="N/A" readonly>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="govt">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Tax Status</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="tax_status" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">SSS</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="sss" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">TIN</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="tin" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Pag-ibig</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="pagibig" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Philhealth</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="philhealth" placeholder="N/A" readonly>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="emergency">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Contact Name</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="emergency_contact" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="address" placeholder="N/A" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Contact Number</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="contact_num" placeholder="N/A" readonly>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="test">
                    <div id="like_button_container"></div>
                  </div>
                  <!-- /.tab-pane -->
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
            url: "../teacher/api/read_single.php?username=<?php echo $_GET['username']; ?>",
            dataType: 'json',
            success: function(data) {
                document.getElementById('name').innerHTML = data['first_name'] + ' ' + data['last_name'];
                document.getElementById('faculty_num').innerHTML = data['faculty_num'];
                document.getElementById('designation').innerHTML = data['designation'];
                document.getElementById('status').innerHTML = data['status'];
                document.getElementById('gender').innerHTML = data['gender'];

                var firstName = data['first_name'];
                var newFirstName = firstName.substr(0,firstName.length-3);
                $("#first_name").attr("placeholder", newFirstName);
                $("#last_name").attr("placeholder", data['last_name']);

                var middleName = data['middle_name'];
                var newMiddleName = middleName[0] + middleName.substr(1).toLowerCase();
                $("#middle_name").attr("placeholder", newMiddleName);

                $("#birthday").attr("placeholder", data['birthday']);
                $("#sss").attr("placeholder", data['sss']);
                $("#tin").attr("placeholder", data['tin']);
                $("#pagibig").attr("placeholder", data['pagibig']);
                $("#philhealth").attr("placeholder", data['philhealth']);
                $("#emergency_contact").attr("placeholder", data['emergency_contact']);
                $("#address").attr("placeholder", data['address']);
                $("#contact_num").attr("placeholder", data['contact_num']);
                $("#degree").attr("placeholder", data['degree']);
                $("#major").attr("placeholder", data['major']);
                $("#civil").attr("placeholder", data['civil']);
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
        url: "../teacher/api/read_grades.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                response += "<tr>"+
                "<td>"+data[user].student_num+"</td>"+
                "<td>"+data[user].subject+"</td>"+
                "<td>"+data[user].name+"</td>"+
                "<td>"+data[user].first+"</td>";
                if (data[user].remarks=="Passed"){
                  response += "<td style='color:#008000'>"+data[user].remarks+"</td>";}
                else {
                  response +="<td style='color:#FF0000'>"+data[user].remarks+"</td>";}
                "</tr>";
            }
            $(response).appendTo($("#faculty_grades"));
        }
    });
  });

</script>