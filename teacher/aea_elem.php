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
            <a href="../teacher/summ_grades_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Summarized Grades</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../teacher/aea_elem.php?username='.$_GET['username'].'" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>AEAs</p>
            </a>
            <!--
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
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
            -->
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
          <h1 class="m-0 text-dark">Academic Excellence Awardees</h1>
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
            <div class="card-body disabled">
              <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
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
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <h4 class="text-center">1st Quarter</h4>
                              <div class="col-md-12">
                                <div class="callout callout-success bg-success">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                    <table class="table table-borderless" id="q1_1">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-warning bg-warning">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                    <table class="table table-borderless" id="q1_2">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-info bg-info">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                    <table class="table table-borderless" id="q1_3">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees by Subject</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="6"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="7"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="8"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="9"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="10"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="11"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="12"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="13"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <h4 class="text-center" id="q1_sub1">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub2">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub3">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub4">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub5">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub6">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub7">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub8">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub9">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub10">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub11">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub12">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub13">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q1_sub14">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q1_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q1_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q1_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <h4 class="text-center">2nd Quarter</h4>
                              <div class="col-md-12">
                                <div class="callout callout-success bg-success">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                    <table class="table table-borderless" id="q2_1">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-warning bg-warning">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                    <table class="table table-borderless" id="q2_2">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-info bg-info">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                    <table class="table table-borderless" id="q2_3">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees by Subject</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="6"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="7"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="8"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="9"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="10"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="11"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="12"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="13"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <h4 class="text-center" id="q2_sub1">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub2">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub3">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub4">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub5">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub6">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub7">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub8">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub9">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub10">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub11">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub12">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub13">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q2_sub14">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q2_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q2_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q2_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <h4 class="text-center">3rd Quarter</h4>
                              <div class="col-md-12">
                                <div class="callout callout-success bg-success">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                    <table class="table table-borderless" id="q3_1">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-warning bg-warning">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                    <table class="table table-borderless" id="q3_2">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="callout callout-info bg-info">
                                  <div class="card-body">
                                    <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                    <table class="table table-borderless" id="q3_3">
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="callout callout-danger">
                            <div class="card-header">
                              <h3 class="card-title">Academic Excellence Awardees by Subject</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="6"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="7"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="8"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="9"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="10"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="11"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="12"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="13"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <h4 class="text-center" id="q3_sub1">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub1_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub2">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub2_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub3">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub3_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub4">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub4_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub5">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub5_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub6">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub6_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub7">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub7_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub8">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub8_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub9">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub9_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub10">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub10_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub11">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub11_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub12">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub12_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub13">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub13_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <h4 class="text-center" id="q3_sub14">Subject</h4>
                                    <div class="col-md-12">
                                      <div class="callout callout-success bg-success">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Highest Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q3_1">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-warning bg-warning">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With High Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q3_2">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="callout callout-info bg-info">
                                        <div class="card-body">
                                          <h4 class="text-center lead shadow-lg p-3 rounded"><b>With Honors</b></h4>
                                          <table class="table table-borderless" id="sub14_q3_3">
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
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
          url: "../teacher/api/read_subjects.php?section=<?php echo $_SESSION['adviser1']; ?>",
          dataType: 'json',
          success: function(data) {
              document.getElementById('q1_sub1').innerHTML = data['sub1'];
              document.getElementById('q1_sub2').innerHTML = data['sub2'];
              document.getElementById('q1_sub3').innerHTML = data['sub3'];
              document.getElementById('q1_sub4').innerHTML = data['sub4'];
              document.getElementById('q1_sub5').innerHTML = data['sub5'];
              document.getElementById('q1_sub6').innerHTML = data['sub6'];
              document.getElementById('q1_sub7').innerHTML = data['sub7'];
              document.getElementById('q1_sub8').innerHTML = data['sub8'];
              document.getElementById('q1_sub9').innerHTML = data['sub9'];
              document.getElementById('q1_sub10').innerHTML = data['sub10'];
              document.getElementById('q1_sub11').innerHTML = data['sub11'];
              document.getElementById('q1_sub12').innerHTML = data['sub12'];
              document.getElementById('q1_sub13').innerHTML = data['sub13'];
              document.getElementById('q1_sub14').innerHTML = data['sub14'];
              document.getElementById('q2_sub1').innerHTML = data['sub1'];
              document.getElementById('q2_sub2').innerHTML = data['sub2'];
              document.getElementById('q2_sub3').innerHTML = data['sub3'];
              document.getElementById('q2_sub4').innerHTML = data['sub4'];
              document.getElementById('q2_sub5').innerHTML = data['sub5'];
              document.getElementById('q2_sub6').innerHTML = data['sub6'];
              document.getElementById('q2_sub7').innerHTML = data['sub7'];
              document.getElementById('q2_sub8').innerHTML = data['sub8'];
              document.getElementById('q2_sub9').innerHTML = data['sub9'];
              document.getElementById('q2_sub10').innerHTML = data['sub10'];
              document.getElementById('q2_sub11').innerHTML = data['sub11'];
              document.getElementById('q2_sub12').innerHTML = data['sub12'];
              document.getElementById('q2_sub13').innerHTML = data['sub13'];
              document.getElementById('q2_sub14').innerHTML = data['sub14'];
              document.getElementById('q3_sub1').innerHTML = data['sub1'];
              document.getElementById('q3_sub2').innerHTML = data['sub2'];
              document.getElementById('q3_sub3').innerHTML = data['sub3'];
              document.getElementById('q3_sub4').innerHTML = data['sub4'];
              document.getElementById('q3_sub5').innerHTML = data['sub5'];
              document.getElementById('q3_sub6').innerHTML = data['sub6'];
              document.getElementById('q3_sub7').innerHTML = data['sub7'];
              document.getElementById('q3_sub8').innerHTML = data['sub8'];
              document.getElementById('q3_sub9').innerHTML = data['sub9'];
              document.getElementById('q3_sub10').innerHTML = data['sub10'];
              document.getElementById('q3_sub11').innerHTML = data['sub11'];
              document.getElementById('q3_sub12').innerHTML = data['sub12'];
              document.getElementById('q3_sub13').innerHTML = data['sub13'];
              document.getElementById('q3_sub14').innerHTML = data['sub14'];
            },
          error: function (result) {
            console.log(result);
          },
      });
  });
  
  // 1st
  // Final

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q1_3"));
        }
    });
  });
  
  // sub1
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q1_3"));
        }
    });
  });

  // sub2
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q1_3"));
        }
    });
  });

  // sub3
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q1_3"));
        }
    });
  });

  // sub4
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q1_3"));
        }
    });
  });

  // sub5
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q1_3"));
        }
    });
  });

  // sub6
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q1_3"));
        }
    });
  });

  // sub7
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q1_3"));
        }
    });
  });

  // sub8
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q1_3"));
        }
    });
  });

  // sub9
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q1_3"));
        }
    });
  });

  // sub10
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q1_3"));
        }
    });
  });

  // sub11
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q1_3"));
        }
    });
  });

  // sub12
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q1_3"));
        }
    });
  });

  // sub13
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q1_3"));
        }
    });
  });

  // sub14
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q1_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q1_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q1.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q1_3"));
        }
    });
  });

  // 2nd
  // Final

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q2_3"));
        }
    });
  });
  
  // sub1
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q2_3"));
        }
    });
  });

  // sub2
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q2_3"));
        }
    });
  });

  // sub3
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q2_3"));
        }
    });
  });

  // sub4
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q2_3"));
        }
    });
  });

  // sub5
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q2_3"));
        }
    });
  });

  // sub6
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q2_3"));
        }
    });
  });

  // sub7
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q2_3"));
        }
    });
  });

  // sub8
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q2_3"));
        }
    });
  });

  // sub9
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q2_3"));
        }
    });
  });

  // sub10
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q2_3"));
        }
    });
  });

  // sub11
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q2_3"));
        }
    });
  });

  // sub12
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q2_3"));
        }
    });
  });

  // sub13
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q2_3"));
        }
    });
  });

  // sub14
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q2_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q2_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q2.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q2_3"));
        }
    });
  });

  // 3rd
  // Final

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="Final") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#q3_3"));
        }
    });
  });
  
  // sub1
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub1") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub1_q3_3"));
        }
    });
  });

  // sub2
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub2") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub2_q3_3"));
        }
    });
  });

  // sub3
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub3") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub3_q3_3"));
        }
    });
  });

  // sub4
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub4") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub4_q3_3"));
        }
    });
  });

  // sub5
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub5") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub5_q3_3"));
        }
    });
  });

  // sub6
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub6") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub6_q3_3"));
        }
    });
  });

  // sub7
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub7") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub7_q3_3"));
        }
    });
  });

  // sub8
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub8") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub8_q3_3"));
        }
    });
  });

  // sub9
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub9") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub9_q3_3"));
        }
    });
  });

  // sub10
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub10") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub10_q3_3"));
        }
    });
  });

  // sub11
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub11") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub11_q3_3"));
        }
    });
  });

  // sub12
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub12") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub12_q3_3"));
        }
    });
  });

  // sub13
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub13") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub13_q3_3"));
        }
    });
  });

  // sub14
  
  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Highest Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q3_1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With High Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q3_2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_aea_q3.php?section=<?php echo $_SESSION["adviser1"]; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
                if (data[user].award=="With Honors" && data[user].subject=="sub14") {
                  response += "<tr><td><center>"+data[user].last_name+", "+data[user].first_name+"</center></td></tr>";}
            }
            $(response).appendTo($("#sub14_q3_3"));
        }
    });
  });

</script>