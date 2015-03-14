<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LittleGreenEngine">
    <meta name="author" content="Fahad Hasan">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Little Green Engine - Dashboard</title>
    <link href="assets/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="row user-info pull-right visible-xs">
            <div class="col-xs-8">
              <h5 class="user-name">Reid Bates</h5>
              <small><a class="logout" href="#">Logout</a></small>
            </div>
            <div class="col-xs-4">
              <img class="img-circle user-icon" src="assets/images/user.jpg" alt="" >
            </div>
          </div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">
            <img class="lge_logo" src="assets/images/logo.png" />
          </a>
          
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav nav-pills navbar-right">
            <li><a href="settings.php"><i class="icon-large icon-settings1"></i></a></li>
            <li><a id="messages" href="#"><i class="icon-large icon-messages"></i><span class="badge">5</span></a></li>
            <li><a href="#"><i class="icon-large icon-help"></i></a></li>
            <li class="hidden-xs">
              <div class="row user-info">
                <div class="col-xs-8" style="padding:0">
                  <h5 class="user-name">Reid Bates</h5>
                  <small><a class="logout" href="#">Logout</a></small>
                </div>
                <div class="col-xs-4">
                  <img class="img-circle user-icon" src="assets/images/user.jpg" alt="" >
                </div>
              </div>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container-fluid">

      <div class="row row-offcanvas row-offcanvas-left">


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="left-nav-box">
            <div class="banded-header">
              <h5>Settings</h5>
              <small>Add, Modify, Remove your bookings</small>
            </div>
            
            <div id="dashboard-filters" class="filters">
              <div class="filter">
                <div class="filter-body">
                  <ul class="filter-nav-left">
                    <li>
                      <a href="settings.php"><div><i class="icon-settings menu-icon-small"></i><small>General Settings</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-location.php"><div><i class="icon-locations menu-icon-small"></i><small>Locations</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-users.php"><div><i class="icon-users menu-icon-small"></i><small>Users</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-services.php"><div><i class="icon-services menu-icon-small"></i><small>Services</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-hours.php"><div><i class="icon-hours menu-icon-small"></i><small>Available Hours</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-reminder.php"><div><i class="icon-reminder menu-icon-small"></i><small>Reminder</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li class="nav-active">
                      <a href="settings-activity.php"><div><i class="icon-activity menu-icon-small"></i><small>Activity Log</small></div></a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div><!--/span-->

        <div class="col-xs-12 col-sm-9">
          
          <!-- TOP TOOLBAR -->
          <div class="row">
            <div class="col-md-12">
              <div class="settings-header">
                <button type="button" class="btn visible-xs offcanvas-toggle pull-left" data-toggle="offcanvas">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="header-span">
                  <i class="icon-activity icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">Activity Log</span>
                  <small>Lorem ipsum dolor sit amet</small>
                </div>
                <div class="header-span pull-right">
                  <span class="paging-title hidden-xs">Log page 1 of 8</span>
                  <a href="#"><span class="move-left"></span></a>
                  <a href="#"><span class="move-right active"></span></a>
                </div>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="right-nav-box">

                <div class="table-top-widget">
                  <div class="col2" style="width:100%;border:0;height:auto;">
                    <p>This page lists your last 250 successful text messages. If a message is listed here, it means that it was successfully delivered to your client's telephone company for processing. 
You are only charged for text messages that are successful. Sometimes, if you alter the default reminder or confirmation message, you may be charged for two credits if the 
length of the message goes beyong 160 characters. This is a limit imposed by the phone companies. Many people are comfortable in paying more for longer, more detailed 
messages, other cost-concious people will need to make sure their messages remain short and sharp.</p>
                  </div>
                </div>

                <table class="table-header">
                  <thead>
                    <tr>
                      <th style="width:20%;"><h6>TIME</h6><small></small></th>
                      <th style="width:60%;"><h6>MESSAGE</h6><small></small></th>
                      <th style="width:20%;"><h6>ACTION TAKEN BY</h6><small>Name</small></th>
                    </tr>
                  </thead>
                </table>

                <div class="table-body height-push-footer">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td style="width:20%;">Jan 4th, 2:28pm</td>
                        <td style="width:60%;">BOOKING CONFIRMATION:  Clinic: Eltham, Therapist: Claire Nollev.<br/>Please call (03) 9439 2266 with any queries.</td>
                        <td style="width:20%;">Jan Stewert</td>
                      </tr>
                      <tr>
                        <td style="width:20%;">Jan 4th, 2:13pm</td>
                        <td style="width:60%;">BOOKING CONFIRMATION:  Clinic: Eltham, Therapist: Claire Nollev.<br/>Please call (03) 9439 2266 with any queries.</td>
                        <td style="width:20%;">Jan Stewert</td>
                      </tr>
                      <tr>
                        <td style="width:20%;">Jan 4th, 2:13pm</td>
                        <td style="width:60%;">BOOKING CONFIRMATION:  Clinic: Eltham, Therapist: Claire Nollev.<br/>Please call (03) 9439 2266 with any queries.</td>
                        <td style="width:20%;">Jan Stewert</td>
                      </tr>
                      <tr>
                        <td style="width:20%;">Jan 4th, 12:02pm</td>
                        <td style="width:60%;">BOOKING CONFIRMATION:  Clinic: Eltham, Therapist: Claire Nollev.<br/>Please call (03) 9439 2266 with any queries.</td>
                        <td style="width:20%;">Jan Stewert</td>
                      </tr>
                      <tr>
                        <td style="width:20%;">Jan 4th, 11:02am</td>
                        <td style="width:60%;">BOOKING CONFIRMATION:  Clinic: Eltham, Therapist: Claire Nollev.<br/>Please call (03) 9439 2266 with any queries.</td>
                        <td style="width:20%;">Jan Stewert</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
          
        </div><!--/span-->
      </div><!--/row-->
      <footer>
        <p>Copyright © 2014 Little Green Engine. All rights reserved.</p>
      </footer>

    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery.ui.core.js"></script>
    <script src="assets/js/jquery.ui.widget.js"></script>
    <script src="assets/js/jquery.ui.datepicker.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/offcanvas.js"></script>
    
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!--script src="assets/js/jquery-ui-1.10.4.custom.js"></script-->