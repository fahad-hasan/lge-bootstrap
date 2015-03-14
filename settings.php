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
                    <li class="nav-active">
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
          <div class="row">
            <div class="col-md-12">
              <div class="settings-header">
                <button type="button" class="btn visible-xs offcanvas-toggle pull-left" data-toggle="offcanvas">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="header-span">
                  <i class="icon-settings icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">General Settings</span>
                  <small>Add, Modify, Remove your bookings</small>
                </div>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="right-nav-box">

                <div class="titled-section">
                  <small class="title">Company Details</small>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Full Company Name</label>
                        <input type="text" class="form-control" value="Osteologic Healthcare" placeholder="Company Name">
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Company Address</label>
                        <textarea rows="5" class="form-control" placeholder="Company address">40 Brougham St. Eltham VIC 3095</textarea>
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Opening Time</label>
                        <div class="row">
                          <div class="col-xs-3">
                            <select class="form-control">
                              <option>08</option>
                            </select>
                          </div>
                          <div class="col-xs-3">
                            <select class="form-control">
                              <option>45</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Short Name (For SMS)</label>
                        <input type="text" class="form-control" value="Osteologic" placeholder="">
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Email Address</label>
                        <input type="text" class="form-control" value="reid@reidbates.com" placeholder="">
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Phone Number</label>
                        <input type="text" class="form-control" value="(03) 9439 2266" placeholder="">
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Closing Time</label>
                        <div class="row">
                          <div class="col-xs-3">
                            <select class="form-control">
                              <option>21</option>
                            </select>
                          </div>
                          <div class="col-xs-3">
                            <select class="form-control">
                              <option>15</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="titled-section">
                  <small class="title">Calendar Settings</small>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-5">
                            <div class="form-group">
                              <small class="required">*</small>
                              <label for="first-name">Currency Symbol</label>
                              <select class="form-control">
                                <option>$ Dollar</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-xs-7">
                            <div class="form-group">
                              <small class="required">*</small>
                              <label for="first-name">Order Appointment Types By</label>
                              <select class="form-control">
                                <option>Modality then length</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Calendar Intervals<small class="help" title="Calendar Intervals">?</small></label>
                        <select class="form-control">
                          <option>30 Minutes (Recommended)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                     <div class="form-group">
                        <div class="row">
                          <div class="col-xs-5">
                            <div class="form-group">
                              <small class="required">*</small>
                              <label for="first-name">Time Zone</label>
                              <select class="form-control">
                                <option>Australia/Melbourne</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-xs-7">
                            <div class="form-group">
                              <small class="required">*</small>
                              <label for="first-name">Country Code (For SMS)</label>
                              <select class="form-control">
                                <option>Australia +61</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <small class="required">*</small>
                        <label for="first-name">Public Booking Cutoff<small class="help" title="Public Booking Cutoff">?</small></label>
                        <input type="text" class="form-control" value="60" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="footer-submit">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="" checked="true">
                          Allow Booking Notes
                        </label>
                        <span class="help-block">Allow practitioners and clients to enter notes when making a booking.</span>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-danger pull-right">SAVE INFORMATION</button>
                    </div>
                  </div>
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