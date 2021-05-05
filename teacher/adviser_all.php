<?php
  $content = '
  
  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->

    <li>
      <a href="../teacher/index_all.php?username='.$_GET['username'].'">
        <i class="fa fa-address-card"></i></i> <span>Faculty Profile</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li class="active">
      <a href="../teacher/adviser_all.php?username='.$_GET['username'].'#g12">
        <i class="fa fa-star"></i></i> <span>1st Quarter Grades</span>
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
      <li class="active"><a href="#k1" data-toggle="tab">Kinder</a></li>
      <li><a href="#g1" data-toggle="tab">Grade 1</a></li>
      <li><a href="#g2" data-toggle="tab">Grade 2</a></li>
      <li><a href="#g3" data-toggle="tab">Grade 3</a></li>
      <li><a href="#g4" data-toggle="tab">Grade 4</a></li>
      <li><a href="#g5" data-toggle="tab">Grade 5</a></li>
      <li><a href="#g6" data-toggle="tab">Grade 6</a></li>
      <li><a href="#g7" data-toggle="tab">Grade 7</a></li>
      <li><a href="#g8" data-toggle="tab">Grade 8</a></li>
      <li><a href="#g9" data-toggle="tab">Grade 9</a></li>
      <li><a href="#g10" data-toggle="tab">Grade 10</a></li>
      <li><a href="#g11" data-toggle="tab">Grade 11</a></li>
      <li><a href="#g12" data-toggle="tab">Grade 12</a></li>
    </ul>
    <div class="tab-content">
      <!-- /.tab-pane -->
      <!-- Kinder -->
      <div class="active tab-pane" id="k1">
        
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
                  <table style="font-size:12px;" id="kinder" class="table table-bordered table-striped">
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
          </div>
        </section>
        <!-- /.content -->
      </div> 
      <!-- Grade 1 -->
      <div class="tab-pane" id="g1">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 1 - Annunciation</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade1" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Mother Tongue</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">1 - Computer</th>                        
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
          </div>
        </section>
        <!-- /.content -->
      </div> 
      <!-- Grade 2 -->
      <div class="tab-pane" id="g2">
    
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 2 - Visitation</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade2" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Mother Tongue</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">2 - Computer</th>
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
          </div>
        </section>
        <!-- /.content -->
      </div> 
      <!-- Grade 3 -->
      <div class="tab-pane" id="g3">
    
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 3 - Nativity</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade3" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Mother Tongue</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">3 - Computer</th>                        
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 4 -->
      <div class="tab-pane" id="g4">
    
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 4 - Presentation</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade4" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - HELE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">4 - Computer</th>                                              
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 5 -->
      <div class="tab-pane" id="g5">
    
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 5 - Resurrection</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade5" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - HELE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">5 - Computer</th>                                                                     
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 6 -->
      <div class="tab-pane" id="g6">
    
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 6 - Corpus Christi</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade6" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - TLE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Penmanship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">6 - Computer</th>                                                                                            
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 7 -->
      <div class="tab-pane" id="g7">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 7 - Transfiguration</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade7" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
                    <thead style="background-color:#f5cbef;position: sticky; top: 0;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - TLE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Music</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Arts</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">P.E.</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Speech & Drama</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">7 - Computer</th>                                                                                    
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:5%;font-size:10px;border: 2px solid black;">General Average</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Academic Excellence Award</th>                                        
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 8 -->
      <div class="tab-pane" id="g8">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 8 - Assumption</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade8" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - TLE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Music</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Arts</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">P.E.</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Technical Writing</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">8 - Computer</th>                                                                                   
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>       
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                
                        <th style="width:5%;font-size:10px;border: 2px solid black;">General Average</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Academic Excellence Award</th>                                        
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 9 -->
      <div class="tab-pane" id="g9">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 9 - Coronation</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade9" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - TLE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Music</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Arts</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">P.E.</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Journalism</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">9 - Computer</th>                                                                                    
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th> 
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:5%;font-size:10px;border: 2px solid black;">General Average</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Academic Excellence Award</th>                                        
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 10 -->
      <div class="tab-pane" id="g10">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 10 - Holy Trinity</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade10" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Trigonometry</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Filipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - TLE</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - MAPEH</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Music</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Arts</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">P.E.</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Araling Panlipunan</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - English</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">10 - Computer</th>                                                                                   
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:5%;font-size:10px;border: 2px solid black;">General Average</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Academic Excellence Award</th>                                        
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
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 11 -->
      <div class="tab-pane" id="g11">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <!-- Grade 11 STEM Piety -->
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 11 STEM - Piety </h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade11stem" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Pre-Calculus</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - General Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Physical Education and Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Oral Communication in Context</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Earth Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Empowerment Technologies</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Personal Development</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Filipino sa Piling Larang</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:7%;font-size:14px;border: 2px solid black;">General Average</th>
                        <th style="width:10%;font-size:14px;border: 2px solid black;">Academic Excellence Award</th>                                        
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Grade 11 ABM Fortitude -->
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 11 ABM - Fortitude </h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade11abm" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - General Mathematics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Physical Education and Health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Oral Communication in Context</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Empowerment Technologies</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Organization and Management</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Personal Development</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Physical Science</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">11 - Filipino sa Piling Larang</th>                                                                                 
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:7%;font-size:14px;border: 2px solid black;">General Average</th>
                        <th style="width:10%;font-size:14px;border: 2px solid black;">Academic Excellence Award</th>                                        
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>              
            </div>
            <!-- /.row -->
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- Grade 12 -->
      <div class="tab-pane" id="g12">
        
        <!-- Map box -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <!-- Grade 12 STEM - Wisdom-->
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 12 STEM - Wisdom</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade12stem" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Physical education and health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - General Chemistry 2</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - General Physics 1</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Practical Research 2</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - General Biology 1</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Entrepreneurship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Understanding Culture, Society and Politics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - English For Academic and Professional Purposes</th>                                                                                   
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:7%;font-size:14px;border: 2px solid black;">General Average</th>
                        <th style="width:10%;font-size:14px;border: 2px solid black;">Academic Excellence Award</th>                                        
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Grade 12 ABM - Counsel -->
              <div class="box">
                <div class="box-header">
                  <h3 class="card-title">Grade 12 ABM - Counsel</h3>
                </div>
                <!-- /.box-header -->
                <div class="card-body">
                  <table style="font-size:12px;" id="grade12abm" class="table table-bordered table-striped">
                    <thead style="background-color:#f5cbef;">
                      <tr>
                        <th style="width:14%;border: 2px solid black;">Student Name</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Physical education and health</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Fundamental of Accountancy, Business and Management 2</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Applied Economics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Practical Research 2</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Business Marketing</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Entrepreneurship</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - VE/CL</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - Understanding Culture, Society and Politics</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">12 - English For Academic and Professional Purposes</th>                                                                                   
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Deportment Grade</th>
                        <th style="width:5%;font-size:10px;border: 2px solid black;">Unrounded Average</th>                      
                        <th style="width:7%;font-size:14px;border: 2px solid black;">General Average</th>
                        <th style="width:10%;font-size:14px;border: 2px solid black;">Academic Excellence Award</th>                                        
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
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
        url: "../teacher/api/principal/read_grades_q1_11stem.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade11stem"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_11abm.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade11abm"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_12stem.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade12stem"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_12abm.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade12abm"));
        }
    });
  });  

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_10.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].music>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].music+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].music+'</td>';}
                if (data[user].arts>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].arts+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].arts+'</td>';}
                if (data[user].pe>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].pe+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].pe+'</td>';}
                if (data[user].health>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].health+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].health+'</td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade10"));
        }
    });
  });  

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_9.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].music>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].music+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].music+'</td>';}
                if (data[user].arts>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].arts+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].arts+'</td>';}
                if (data[user].pe>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].pe+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].pe+'</td>';}
                if (data[user].health>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].health+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].health+'</td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade9"));
        }
    });
  });  

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_8.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].music>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].music+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].music+'</td>';}
                if (data[user].arts>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].arts+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].arts+'</td>';}
                if (data[user].pe>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].pe+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].pe+'</td>';}
                if (data[user].health>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].health+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].health+'</td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade8"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_7.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].music>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].music+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].music+'</td>';}
                if (data[user].arts>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].arts+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].arts+'</td>';}
                if (data[user].pe>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].pe+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].pe+'</td>';}
                if (data[user].health>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].health+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].health+'</td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].unrounded>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].unrounded+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;">'+data[user].unrounded+'</td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade7"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_1.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade1"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_2.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade2"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_3.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade3"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_4.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade4"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_5.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
          var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
          }
            $(response).appendTo($("#grade5"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_6.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].sub09>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub09+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub09+'</b></td>';}
                if (data[user].sub10>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub10+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub10+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#grade6"));
        }
    });
  });

  $(document).ready(function(){
    $.ajax({
        type: "GET",
        url: "../teacher/api/principal/read_grades_q1_kinder.php?username=<?php echo $_GET['username']; ?>",
        dataType: 'json',
        success: function(data) {
            var response="";
            for(var user in data){
              response += "<tr>"+
                '<td style="width:7%;font-size:10px;border: 2px solid black;background-color:#fae8f7;"><b>'+data[user].name+"</b></td>";
                if (data[user].sub01>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub01+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub01+'</b></td>';}
                if (data[user].sub02>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub02+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub02+'</b></td>';}
                if (data[user].sub03>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub03+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub03+'</b></td>';}
                if (data[user].sub04>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub04+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub04+'</b></td>';}
                if (data[user].sub05>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub05+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub05+'</b></td>';}
                if (data[user].sub06>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub06+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub06+'</b></td>';}
                if (data[user].sub07>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub07+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub07+'</b></td>';}
                if (data[user].sub08>74){	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;">'+data[user].sub08+'</td>';}	else {	response += '<td style="width:6%;font-size:14px;border: 2px solid black;text-align:center;color:#FF0000;"><b>'+data[user].sub08+'</b></td>';}
                if (data[user].deport>74){	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;">'+data[user].deport+'</td>';}	else {	response += '<td style="width:5%;font-size:14px;border: 2px solid black;text-align:center;background-color:#ccfaff;"><b>'+data[user].deport+'</b></td>';}
                if (data[user].final>74){	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;">'+data[user].final+'</td>';}	else {	response += '<td style="width:7%;font-size:14px;border: 2px solid black;text-align:center;background-color:#dff0e3;"><b>'+data[user].final+'</b></td>';}
                if (data[user].award=="With Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#c9e2f0;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With High Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#ffe7cc;"><i>'+data[user].award+"</i></td>";}
                else if (data[user].award=="With Highest Honors"){
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;background-color:#b5e8b0;"><i>'+data[user].award+"</i></td>";}
                else {
                  response += '<td style="width:10%;font-size:10px;border: 2px solid black;text-align:center;"><i>'+data[user].award+"</i></td>";}
                "</tr>";
            }
            $(response).appendTo($("#kinder"));
        }
    });
  });

</script>