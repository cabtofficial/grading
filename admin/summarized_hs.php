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
            <a href="../admin/summarized_elem.php?username='.$_GET['username'].'" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Elementary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/summarized_hs.php?username='.$_GET['username'].'" class="nav-link active">
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
              <h3 class="card-title">High School</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="g7-tab" data-toggle="pill" href="#g7" role="tab" aria-controls="g7" aria-selected="false">Grade 7</a></li>                
                <li class="nav-item"><a class="nav-link" id="g8-tab" data-toggle="pill" href="#g8" role="tab" aria-controls="g8" aria-selected="false">Grade 8</a></li>                
                <li class="nav-item"><a class="nav-link" id="g9-tab" data-toggle="pill" href="#g9" role="tab" aria-controls="g9" aria-selected="false">Grade 9</a></li>                
                <li class="nav-item"><a class="nav-link" id="g10-tab" data-toggle="pill" href="#g10" role="tab" aria-controls="g10" aria-selected="false">Grade 10</a></li>                
                <li class="nav-item"><a class="nav-link" id="g11a-tab" data-toggle="pill" href="#g11a" role="tab" aria-controls="g11a" aria-selected="false">Grade 11 ABM</a></li>                
                <li class="nav-item"><a class="nav-link" id="g11s-tab" data-toggle="pill" href="#g11s" role="tab" aria-controls="g11s" aria-selected="false">Grade 11 STEM</a></li>                
                <li class="nav-item"><a class="nav-link" id="g12a-tab" data-toggle="pill" href="#g12a" role="tab" aria-controls="g12a" aria-selected="false">Grade 12 ABM</a></li>                
                <li class="nav-item"><a class="nav-link" id="g12s-tab" data-toggle="pill" href="#g12s" role="tab" aria-controls="g12s" aria-selected="false">Grade 12 STEM</a></li>                
              </ul>
              <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="g7" role="tabpanel" aria-labelledby="g7-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g7q1-tab" data-toggle="pill" href="#g7q1" role="tab" aria-controls="g7q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g7q2-tab" data-toggle="pill" href="#g7q2" role="tab" aria-controls="g7q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g7q3-tab" data-toggle="pill" href="#g7q3" role="tab" aria-controls="g7q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g7q4-tab" data-toggle="pill" href="#g7q4" role="tab" aria-controls="g7q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g7final-tab" data-toggle="pill" href="#g7final" role="tab" aria-controls="g7final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g7q1" role="tabpanel" aria-labelledby="g7q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g7q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g7q2" role="tabpanel" aria-labelledby="g7q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g7q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g7q3" role="tabpanel" aria-labelledby="g7q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g7q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g7q4" role="tabpanel" aria-labelledby="g7q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g7q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g7final" role="tabpanel" aria-labelledby="g7final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g7finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g8" role="tabpanel" aria-labelledby="g8-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g8q1-tab" data-toggle="pill" href="#g8q1" role="tab" aria-controls="g8q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g8q2-tab" data-toggle="pill" href="#g8q2" role="tab" aria-controls="g8q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g8q3-tab" data-toggle="pill" href="#g8q3" role="tab" aria-controls="g8q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g8q4-tab" data-toggle="pill" href="#g8q4" role="tab" aria-controls="g8q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g8final-tab" data-toggle="pill" href="#g8final" role="tab" aria-controls="g8final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g8q1" role="tabpanel" aria-labelledby="g8q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g8q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g8q2" role="tabpanel" aria-labelledby="g8q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g8q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g8q3" role="tabpanel" aria-labelledby="g8q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g8q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g8q4" role="tabpanel" aria-labelledby="g8q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g8q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g8final" role="tabpanel" aria-labelledby="g8final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g8finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g9" role="tabpanel" aria-labelledby="g9-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g9q1-tab" data-toggle="pill" href="#g9q1" role="tab" aria-controls="g9q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g9q2-tab" data-toggle="pill" href="#g9q2" role="tab" aria-controls="g9q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g9q3-tab" data-toggle="pill" href="#g9q3" role="tab" aria-controls="g9q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g9q4-tab" data-toggle="pill" href="#g9q4" role="tab" aria-controls="g9q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g9final-tab" data-toggle="pill" href="#g9final" role="tab" aria-controls="g9final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g9q1" role="tabpanel" aria-labelledby="g9q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g9q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g9q2" role="tabpanel" aria-labelledby="g9q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g9q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g9q3" role="tabpanel" aria-labelledby="g9q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g9q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g9q4" role="tabpanel" aria-labelledby="g9q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g9q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g9final" role="tabpanel" aria-labelledby="g9final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g9finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g10" role="tabpanel" aria-labelledby="g10-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g10q1-tab" data-toggle="pill" href="#g10q1" role="tab" aria-controls="g10q1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g10q2-tab" data-toggle="pill" href="#g10q2" role="tab" aria-controls="g10q2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g10q3-tab" data-toggle="pill" href="#g10q3" role="tab" aria-controls="g10q3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g10q4-tab" data-toggle="pill" href="#g10q4" role="tab" aria-controls="g10q4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g10final-tab" data-toggle="pill" href="#g10final" role="tab" aria-controls="g10final" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g10q1" role="tabpanel" aria-labelledby="g10q1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g10q1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g10q2" role="tabpanel" aria-labelledby="g10q2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g10q2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g10q3" role="tabpanel" aria-labelledby="g10q3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g10q3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g10q4" role="tabpanel" aria-labelledby="g10q4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g10q4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g10final" role="tabpanel" aria-labelledby="g10final">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g10finalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g11a" role="tabpanel" aria-labelledby="g11a-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g11aq1-tab" data-toggle="pill" href="#g11aq1" role="tab" aria-controls="g11aq1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11aq2-tab" data-toggle="pill" href="#g11aq2" role="tab" aria-controls="g11aq2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11as1-tab" data-toggle="pill" href="#g11as1" role="tab" aria-controls="g11as1" aria-selected="true">1st Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11aq3-tab" data-toggle="pill" href="#g11aq3" role="tab" aria-controls="g11aq3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11aq4-tab" data-toggle="pill" href="#g11aq4" role="tab" aria-controls="g11aq4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11as2-tab" data-toggle="pill" href="#g11as2" role="tab" aria-controls="g11as2" aria-selected="true">2nd Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11afinal-tab" data-toggle="pill" href="#g11afinal" role="tab" aria-controls="g11afinal" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g11aq1" role="tabpanel" aria-labelledby="g11aq1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11aq2" role="tabpanel" aria-labelledby="g11aq2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11as1" role="tabpanel" aria-labelledby="g11as1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11aq3" role="tabpanel" aria-labelledby="g11aq3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11aq4" role="tabpanel" aria-labelledby="g11aq4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11as2" role="tabpanel" aria-labelledby="g11as2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11afinal" role="tabpanel" aria-labelledby="g11afinal">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11afinalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g11s" role="tabpanel" aria-labelledby="g11s-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g11sq1-tab" data-toggle="pill" href="#g11sq1" role="tab" aria-controls="g11sq1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11sq2-tab" data-toggle="pill" href="#g11sq2" role="tab" aria-controls="g11sq2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11ss1-tab" data-toggle="pill" href="#g11ss1" role="tab" aria-controls="g11ss1" aria-selected="true">1st Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11sq3-tab" data-toggle="pill" href="#g11sq3" role="tab" aria-controls="g11sq3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11sq4-tab" data-toggle="pill" href="#g11sq4" role="tab" aria-controls="g11sq4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11ss2-tab" data-toggle="pill" href="#g11ss2" role="tab" aria-controls="g11ss2" aria-selected="true">2nd Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g11sfinal-tab" data-toggle="pill" href="#g11sfinal" role="tab" aria-controls="g11sfinal" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g11sq1" role="tabpanel" aria-labelledby="g11sq1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11sq2" role="tabpanel" aria-labelledby="g11sq2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11ss1" role="tabpanel" aria-labelledby="g11ss1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11sq3" role="tabpanel" aria-labelledby="g11sq3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11sq4" role="tabpanel" aria-labelledby="g11sq4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11ss2" role="tabpanel" aria-labelledby="g11ss2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g11sfinal" role="tabpanel" aria-labelledby="g11sfinal">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g11sfinalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g12a" role="tabpanel" aria-labelledby="g12a-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g12aq1-tab" data-toggle="pill" href="#g12aq1" role="tab" aria-controls="g12aq1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12aq2-tab" data-toggle="pill" href="#g12aq2" role="tab" aria-controls="g12aq2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12as1-tab" data-toggle="pill" href="#g12as1" role="tab" aria-controls="g12as1" aria-selected="true">1st Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12aq3-tab" data-toggle="pill" href="#g12aq3" role="tab" aria-controls="g12aq3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12aq4-tab" data-toggle="pill" href="#g12aq4" role="tab" aria-controls="g12aq4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12as2-tab" data-toggle="pill" href="#g12as2" role="tab" aria-controls="g12as2" aria-selected="true">2nd Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12afinal-tab" data-toggle="pill" href="#g12afinal" role="tab" aria-controls="g12afinal" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g12aq1" role="tabpanel" aria-labelledby="g12aq1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12aq2" role="tabpanel" aria-labelledby="g12aq2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12as1" role="tabpanel" aria-labelledby="g12as1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12aq3" role="tabpanel" aria-labelledby="g12aq3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12aq4" role="tabpanel" aria-labelledby="g12aq4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12as2" role="tabpanel" aria-labelledby="g12as2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12aq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12afinal" role="tabpanel" aria-labelledby="g12afinal">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12afinalsumm"><tbody></tbody></table>
                      </div>              
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="g12s" role="tabpanel" aria-labelledby="g12s-tab">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="g12sq1-tab" data-toggle="pill" href="#g12sq1" role="tab" aria-controls="g12sq1" aria-selected="true">1st Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12sq2-tab" data-toggle="pill" href="#g12sq2" role="tab" aria-controls="g12sq2" aria-selected="true">2nd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12ss1-tab" data-toggle="pill" href="#g12ss1" role="tab" aria-controls="g12ss1" aria-selected="true">1st Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12sq3-tab" data-toggle="pill" href="#g12sq3" role="tab" aria-controls="g12sq3" aria-selected="true">3rd Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12sq4-tab" data-toggle="pill" href="#g12sq4" role="tab" aria-controls="g12sq4" aria-selected="true">4th Quarter</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12ss2-tab" data-toggle="pill" href="#g12ss2" role="tab" aria-controls="g12ss2" aria-selected="true">2nd Semester</a></li>
                      <li class="nav-item"><a class="nav-link" id="g12sfinal-tab" data-toggle="pill" href="#g12sfinal" role="tab" aria-controls="g12sfinal" aria-selected="true">Final Grading</a></li>      
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                      <div class="tab-pane fade show active" id="g12sq1" role="tabpanel" aria-labelledby="g12sq1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq1summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12sq2" role="tabpanel" aria-labelledby="g12sq2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12ss1" role="tabpanel" aria-labelledby="g12ss1">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12sq3" role="tabpanel" aria-labelledby="g12sq3">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq3summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12sq4" role="tabpanel" aria-labelledby="g12sq4">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq4summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12ss2" role="tabpanel" aria-labelledby="g12ss2">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sq2summ"><tbody></tbody></table>
                      </div>
                      <div class="tab-pane fade show" id="g12sfinal" role="tabpanel" aria-labelledby="g12sfinal">
                        <table style="font-size:12px;" class="table-xs table-bordered" id="g12sfinalsumm"><tbody></tbody></table>
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
        url: "../teacher/api/read_summ_1.php?section=Grade 7 - Transfiguration",
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
            $(response).appendTo($("#g7q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 7 - Transfiguration",
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
            $(response).appendTo($("#g7q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 7 - Transfiguration",
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
            $(response).appendTo($("#g7q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 8 - Assumption",
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
            $(response).appendTo($("#g8q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 8 - Assumption",
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
            $(response).appendTo($("#g8q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 8 - Assumption",
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
            $(response).appendTo($("#g8q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 9 - Coronation",
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
            $(response).appendTo($("#g9q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 9 - Coronation",
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
            $(response).appendTo($("#g9q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 9 - Coronation",
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
            $(response).appendTo($("#g9q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1.php?section=Grade 10 - Holy Trinity",
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
            $(response).appendTo($("#g10q1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2.php?section=Grade 10 - Holy Trinity",
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
            $(response).appendTo($("#g10q2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3.php?section=Grade 10 - Holy Trinity",
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
            $(response).appendTo($("#g10q3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1_shs.php?section=Grade 11 ABM - Fortitude",
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
            $(response).appendTo($("#g11aq1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=Grade 11 ABM - Fortitude",
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
            $(response).appendTo($("#g11aq2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=Grade 11 ABM - Fortitude",
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
            $(response).appendTo($("#g11aq3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1_shs.php?section=Grade 11 STEM - Piety",
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
            $(response).appendTo($("#g11sq1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=Grade 11 STEM - Piety",
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
            $(response).appendTo($("#g11sq2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=Grade 11 STEM - Piety",
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
            $(response).appendTo($("#g11sq3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1_shs.php?section=Grade 12 ABM - Counsel",
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
            $(response).appendTo($("#g12aq1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=Grade 12 ABM - Counsel",
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
            $(response).appendTo($("#g12aq2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=Grade 12 ABM - Counsel",
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
            $(response).appendTo($("#g12aq3summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_1_shs.php?section=Grade 12 STEM - Wisdom",
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
            $(response).appendTo($("#g12sq1summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_2_shs.php?section=Grade 12 STEM - Wisdom",
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
            $(response).appendTo($("#g12sq2summ"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/read_summ_3_shs.php?section=Grade 12 STEM - Wisdom",
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
            $(response).appendTo($("#g12sq3summ"));
        }
    });
  });

</script>