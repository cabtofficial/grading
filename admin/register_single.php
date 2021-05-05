<?php
  include("../sysadmin/fusioncharts.php");

  $content = '

  <!-- /.search form -->
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->

    <!-- Settings -->
    <li>
      <a href="../admin/index.php">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
        </span>
      </a>
    </li>

    <li>
      <a href="../admin/calendar.php">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
          </span>
      </a>
    </li>
    
    <li class="active treeview">
      <a href="#"><i class="fa fa-group "></i> <span>Students</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class"active"><a href="../admin/enrollees.php"><i class="fa fa-circle-o"></i> Enrollees</a></li>
        <li><a href="../admin/register.php"><i class="fa fa-circle-o"></i> Pre-registered</a></li>
      </ul>
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
      Pre-registration Form
      <small id="lrn1"></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Pre-registration Form</li>
      
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <ul class="list-group list-group-unbordered">
              <h3 class="profile-username text-center">Registrant Name</h3>
              <li class="list-group-item">
                <b>Last Name</b> <a class="pull-right" id="lastname">N/A</a>
              </li>
              <li class="list-group-item">
                <b>First Name</b> <a class="pull-right" id="firstname">N/A</a>
              </li>
              <li class="list-group-item">
                <b>Middle Name</b> <a class="pull-right" id="middlename">N/A</a>
              </li>
              <li class="list-group-item">
                <b>Extension Name</b> <a class="pull-right" id="extension">N/A</a>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#a" data-toggle="tab">Learner Information</a></li>
            <li><a href="#b" data-toggle="tab">Parent/Guardian Information</a></li>
            <li><a href="#c" data-toggle="tab">Emergency Contact Information</a></li>
            <li><a href="#d" data-toggle="tab">Payment of Fees</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="a">
              <div class="box-body box-profile">
                <ul class="list-group list-group-unbordered">
                  <h3 class="profile-username text-center">Registrant Name</h3>
                  <li class="list-group-item">
                    <b>Grade Level to enroll</b> <a class="pull-right" id="lastname">N/A</a>
                  </li>
                  <li class="list-group-item">
                    <b>First Name</b> <a class="pull-right" id="firstname">N/A</a>
                  </li>
                  <li class="list-group-item">
                    <b>Middle Name</b> <a class="pull-right" id="middlename">N/A</a>
                  </li>
                  <li class="list-group-item">
                    <b>Extension Name</b> <a class="pull-right" id="extension">N/A</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="b">
              <!-- The timeline -->
              <ul class="timeline timeline-inverse">
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-red">
                        10 Feb. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-xs">Read more</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-user bg-aqua"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                    </h3>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-comments bg-yellow"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                    <div class="timeline-body">
                      Take me to your leader!
                      Switzerland is small and neutral!
                      We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class="time-label">
                      <span class="bg-green">
                        3 Jan. 2014
                      </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-camera bg-purple"></i>

                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                    <div class="timeline-body">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                      <img src="http://placehold.it/150x100" alt="..." class="margin">
                    </div>
                  </div>
                </li>
                <!-- END timeline item -->
                <li>
                  <i class="fa fa-clock-o bg-gray"></i>
                </li>
              </ul>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="c">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="d">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
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
</div>
<!-- /.content-wrapper -->

            ';
include('../sysadmin/master.php');

?>

<!-- page script -->
<!-- page script -->

<script>

var win_url = new URL(window.location.href);
var search_params = win_url.searchParams; 
var id = search_params.get('lrn');
console.log(id);

var spreadsheetId = "1MMFXqBQ02a06QLmkjbOAhxIOh8bGsSzNB_OHpaDwDn4",
  url = "https://spreadsheets.google.com/feeds/list/" +
  spreadsheetId +
  "/1/public/values?alt=json";

  $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            //dataSrc: 'feed.entry',
            success: function(data) {
              document.getElementById('lastname').innerHTML = data.feed.entry[id].gsx$lastname.$t;
              document.getElementById('firstname').innerHTML = data.feed.entry[id].gsx$firstname.$t;
              document.getElementById('middlename').innerHTML = data.feed.entry[id].gsx$middlename.$t;
              document.getElementById('extension').innerHTML = data.feed.entry[id].gsx$extensionnamee.g.jr.iiiifapplicable.$t;
              },
            error: function (result) {
              console.log(result);
            },
        });
    });

</script>

<!--

var data = 'https://spreadsheets.google.com/feeds/list/1MMFXqBQ02a06QLmkjbOAhxIOh8bGsSzNB_OHpaDwDn4/1/public/values?alt=json';
                document.getElementById('name').innerHTML = data[0].title.$t;
                document.getElementById('card_remarks').innerHTML = data['remarks'];
