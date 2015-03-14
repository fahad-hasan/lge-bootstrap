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
                    <li class="nav-active">
                      <a href="settings-hours.php"><div><i class="icon-hours menu-icon-small"></i><small>Available Hours</small></div></a>
                      <ul class="filter-nav-left sub-nav">
                        <li class="nav-active">
                          <a href="#"><div style="border-color:#ec5642"><small>Melissa Bates</small></div></a>
                        </li>
                        <li class="dash no-line"></li>
                        <li>
                          <a href="#"><div style="border-color:#42b1ff"><small>Emily Bergman</small></div></a>
                        </li>
                        <li class="dash no-line"></li>
                        <li>
                          <a href="#"><div style="border-color:#58ba47"><small>Claire Nolle</small></div></a>
                        </li>
                        <li class="dash no-line"></li>
                        <li>
                          <a href="#"><div style="border-color:#ff8a00"><small>Andrew Hudson</small></div></a>
                        </li>
                        <li class="dash no-line"></li>
                        <li>
                          <a href="#"><div style="border-color:#ec42e6"><small>Shabbir Hossain</small></div></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <a href="settings-reminder.php"><div><i class="icon-reminder menu-icon-small"></i><small>Reminder</small></div></a>
                    </li>
                    <li class="dash"></li>
                    <li>
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
          <div class="row topbar">
            <div class="col-md-5 topbar-widget">
              <div class="settings-header">
                <button type="button" class="btn visible-xs offcanvas-toggle pull-left" data-toggle="offcanvas">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="header-span">
                  <i class="icon-locations icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">Available Hours</span>
                  <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                </div>
              </div>
            </div>
            <div class="col-md-3 topbar-widget">
              <div class="form-group small-label">
                <label for="first-name">Pick location</label>
                <select class="form-control">
                  <option>Eltham</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 topbar-widget">
              <div class="lge-toolbar-right" style="margin-right:0">
                <h4>THIS WEEK</h4>
                <div class="btn-group btn-group-xs">
                  <button type="button" class="btn btn-default btn-transparent"><i class="icon-arrow icon-left-arrow"></i></button>
                  <button type="button" class="btn btn-default btn-transparent"><i class="icon-arrow icon-right-arrow"></i></button>
                </div>
                <button type="button" class="btn btn-default">REPEAT WEEK</button>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="right-nav-box">

                <table class="dashboard-table-header">
                  <thead>
                    <tr>
                      <th>&nbsp;</th>
                      <th><h6>Monday</h6><small>May 19, 2014</small></th>
                      <th><h6>Tuesday</h6><small>May 20, 2014</small></th>
                      <th><h6>Wednesday</h6><small>May 21, 2014</small><i class="icon-repeat"></i></th>
                      <th><h6>Thursday</h6><small>May 22, 2014</small></th>
                      <th><h6>Friday</h6><small>May 22, 2014</small></th>
                      <th><h6>Saturday</h6><small>May 23, 2014</small></th>
                      <th><h6>Sunday</h6><small>May 24, 2014</small></th>
                    </tr>
                  </thead>
                </table>
                <div class="dashboard-table-body height-push-footer">
                  <table class="dashboard-table">
                    <tbody>
                      <tr>
                        <td>8:00</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>8:30</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>9:00</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>9:30</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>8:00</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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