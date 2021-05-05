<?php

  /*
  function form_submit()
  {
    // Include config file
    include_once "login/config.php";

    // Define variables and initialize with empty values
    $student_firstname = "";

    if(isset($_POST['confirm'])){
      echo $_POST['student_firstname'];
      }

      echo "Hello";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      // Insert login date/time to User Log Table
      $sql = "INSERT INTO registration (student_firstname) VALUES ('".$student_firstname."')";
      if(mysqli_query($link, $sql)){
          echo "Records were updated successfully.";
      } else {
          echo "ERROR: Could not execute $sql. " . mysqli_error($link);
      }

      // Close connection
      mysqli_close($link);

    } 

  }
  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="robots" content="noindex,nofollow">

  <title>CABT Pre-Registration Form</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../objects/school.ico" />

  <link href="/css/theme.css" rel="stylesheet">
  
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    .nav-pills .nav-link.active {background-color: #6f42c1;}
    .copper { font-family: "Copperplate Gothic Light"; font-style: normal; font-variant: normal; font-weight: 700; color: #6f42c1;}
    .small { font-size: 20px;}
    .big { font-size: 28px;}
  </style>

</head>

<body class="bg-purple">
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bold">

    </section>

    <!-- Main content -->
    <section class="content text-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form action="" method="post">
              <div class="card">
                <div class="card-header p-2">
                  <h2 class="copper big"><img src='objects/school_logo.png' width='5%'> The Centennial Academy of the Blessed Trinity Online Pre-Registration for AY 2021-2022</h2>
                </div> <!-- /.card-header -->
                <div class="card-body bg-gray">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="tab-content" id="vert-tabs-tabContent" width="500" height="500">
                        <div class="card card-outline shadow">
                          <div class="card-header bg-purple">
                            <h3>Personal Information</h3>
                          </div>
                          <div class="card-body text-dark">
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Last Name</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="student_firstname">First Name</label>
                                  <input type="text" name="student_firstname" class="form-control" id="student_firstname" placeholder="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Middle Name</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Extension Name e.g. Jr., III</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label>Date of Birth</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Birthplace</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="state">Gender</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Religion</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Learner's Contact Number</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Citizenship</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="firstName">PSA Birth Certificate No. (if available upon enrollment)</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-7 mb-3">
                                  <label for="state">Does the learner have special education needs? (i.e. physical, mental, developmental disability, medical condition, giftedness, among others)</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="firstName">If yes, please specify.</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>
                          </div>     
                        </div>   
                        <div class="card card-outline shadow">
                          <div class="card-header bg-purple">
                            <h3>Learner Information</h3>
                          </div>
                          <div class="card-body text-dark">
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="country">Grade Level to enroll</label>
                                  <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>Nursery</option>
                                    <option>Kinder</option>
                                    <option>Grade 1</option>
                                    <option>Grade 2</option>
                                    <option>Grade 3</option>
                                    <option>Grade 4</option>
                                    <option>Grade 5</option>
                                    <option>Grade 6</option>
                                    <option>Grade 7</option>
                                    <option>Grade 8</option>
                                    <option>Grade 9</option>
                                    <option>Grade 10</option>
                                    <option>Grade 11</option>
                                    <option>Grade 12</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid country.
                                  </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                  <label for="state">For Senior High School: strand to enroll in</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>ABM (Accounting, Business and Management)</option>
                                    <option>STEM (Science, Technology, Engineering and Mathematics)</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="firstName">Learner Reference Number (LRN)</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                  <label for="state">Learner Type</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Old Student</option>
                                    <option>New Student</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="firstName">Last school attended before CABT</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-7 mb-3">
                                  <label for="firstName">For transferees: Address of last school attended</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="country">Last grade level completed</label>
                                  <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>Nursery</option>
                                    <option>Kinder</option>
                                    <option>Grade 1</option>
                                    <option>Grade 2</option>
                                    <option>Grade 3</option>
                                    <option>Grade 4</option>
                                    <option>Grade 5</option>
                                    <option>Grade 6</option>
                                    <option>Grade 7</option>
                                    <option>Grade 8</option>
                                    <option>Grade 9</option>
                                    <option>Grade 10</option>
                                    <option>Grade 11</option>
                                    <option>Grade 12</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid country.
                                  </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                  <label for="state">For Senior High School: strand completed</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Not Applicable (for PRE-SCHOOL to GRADE 10 Students)</option>
                                    <option>ABM (Accounting, Business and Management)</option>
                                    <option>STEM (Science, Technology, Engineering and Mathematics)</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="state">Last school year completed</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>2020-2021</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="country">Is the learner an ESC Grantee?</label>
                                  <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>Not Applicable (for PRE-SCHOOL, ELEMENTARY or SENIOR HIGH SCHOOL)</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please select a valid country.
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="state">For ESC Grantee: please provide the ESC Number</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Not Applicable (for PRE-SCHOOL, ELEMENTARY or SENIOR HIGH SCHOOL)</option>
                                    <option>Not an ESC grantee</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-7 mb-3">
                                  <label for="state">For Senior High School: Is the learner a Voucher Program Beneficiary?</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Not Applicable (Learner is from PRE-SCHOOL, ELEMENTARY or JUNIOR HIGH SCHOOL)</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                  <label for="state">Scholarship or Financial Assistance</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Not Applicable</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                              </div>
                              
                          </div>
                        </div>   
                        <div class="card card-outline shadow">
                          <div class="card-header bg-purple">
                            <h3>Current Address</h3>
                          </div>
                          <div class="card-body text-dark">
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">House Number and Street</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Subdivision, Village or Zone</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">Barangay </label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="firstName">City or Municipality</label>
                                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                  <div class="invalid-feedback">
                                    Valid first name is required.
                                  </div>
                                </div>
                              </div>

                          </div>
                        </div> 
                        <div class="card card-outline shadow">
                          <div class="card-header bg-purple">
                            <h3>Payment of Fees</h3>
                          </div>
                          <div class="card-body text-dark">
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="state">Mode of Payment</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Cash</option>
                                    <option>Semestral</option>
                                    <option>Quarterly</option>
                                    <option>Monthly</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="state">Method of Payment</label>
                                  <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>Accounting Office</option>
                                    <option>Bank Deposit</option>
                                    <option>Online Fund Transfer</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please provide a valid state.
                                  </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <br>
                                  <button type="button" class="btn-lg btn-success btn-block" data-toggle="modal" data-target="#modal-default">
                                    Submit
                                  </button>
                                </div>
                              </div>
                          </div>     
                        </div>
                        <div class="card card-outline shadow">
                          <div class="card-header bg-purple">
                            <h3>Reminder on the Refund of School Fees</h3>
                          </div>
                          <div class="card-body text-dark">
                            <p class="lead">A student is enrolled for one year. In case of drop or transfer, the student will be charged:</p>
                            <ul class="lead">
                              <li>10% of the total amount due for if he withdraws within the 1st week of classes</li>
                              <li>20% of the total amount due for if he withdraws within the 2nd week of classes</li>
                              <li>in full, if he withdraws anytime after the 2nd week of classes regardless of whether or not he has actually attended classes</li>
                            </ul><br>
                            <p class="lead">(based on the Manual of Regulation for Private Schools 8th Edition, 1992, Section 66)</p>
                          </div>     
                        </div>
                        <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header bg-purple">
                                <h4 class="modal-title">Are you sure?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="text-dark">You are about to submit the information provided in this form.<br>
                                  Click <b>Confirm</b> if you wish to proceed.
                                </p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button name="confirm" type="submit" class="btn btn-primary bg-purple" data-dismiss="modal" data-toggle="modal" data-target="#modal-lg">Confirm</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header bg-purple">
                                <h4 class="modal-title">The Centennial Academy of the Blessed Trinity <br>Online Pre-Registration for AY 2021-2022</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body text-dark">
                                <p>Thank you for pre-registering your child via the Online Pre-Registration Portal for AY 2020-2021. <br>Please be sure to settle your fees to officially enroll your child.</p>
                                <p>For inquiries, you may call our Accounting Office at <b>(046) 432-3668</b>. </p>
                                <p>Keep safe and healthy! May the Triune God bless you!</p>
                                <p><div class="copper small">THE CENTENNIAL ACADEMY OF THE BLESSED TRINITY - CAVITE, INC.</div>
                                <b>Sampalucan, City of General Trias, Cavite</b><br><br>
                                <b>Contact Nos.:</b> (046) 450-0805 / (046) 432-3668<br>
                                <b>Email Address:</b> depedgentri.cabt2012@gmail.com<br>
                                <b>Facebook Link:</b> <a href="https://www.facebook.com/cabt.gentri">https://www.facebook.com/cabt.gentri</a><br>
                                <b>Website:</b> <a href="https://cabtofficial.wixsite.com/cabt">https://cabtofficial.wixsite.com/cabt</a></p>
                                </p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   
            </form>
          </div>      
        </div>
      </div>
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="adminlte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="adminlte/plugins/raphael/raphael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="adminlte/dist/js/pages/dashboard2.js"></script>

<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

</body>
</html>
