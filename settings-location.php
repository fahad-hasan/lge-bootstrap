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
                    <li class="nav-active">
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
                  <i class="icon-locations icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">Locations</span>
                  <small>Lorem ipsum dolor sit amet</small>
                </div>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="right-nav-box">

                <div class="table-top-widget">
                  <div class="col1">
                    <button style="margin-top:7px;" data-toggle="modal" data-target=".add-location" type="button" class="btn btn-success add-btn">ADD NEW CLINIC</button>
                  </div>
                  <div class="col2">
                    <h5>Multiple Clinic Locations</h5>
                    <p>If you operate out of more than one location, you can list locations here.</p>
                  </div>
                </div>

                <table class="table-header col-5">
                  <thead>
                    <tr>
                      <th><h6>Location</h6><small>Name</small></th>
                      <th><h6>Phone</h6><small>Number</small></th>
                      <th><h6>Country</h6><small>Name</small></th>
                      <th><h6>Email</h6><small>Address</small></th>
                      <th><h6>Edit</h6><small>Clinic Information</small></th>
                    </tr>
                  </thead>
                </table>

                <div class="table-body height-push-footer">
                  <table class="table col-5">
                    <tbody>
                      <tr>
                        <td>Eltham</td>
                        <td>(03) 9439 2266</td>
                        <td>Australia</td>
                        <td><span class="email">info@littlegreenengine.co.au</span></td>
                        <td><a data-toggle="modal" data-target=".edit-location" href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td>Eltham</td>
                        <td>(03) 9439 2266</td>
                        <td>Australia</td>
                        <td><span class="email">info@littlegreenengine.co.au</span></td>
                        <td><a data-toggle="modal" data-target=".edit-location" href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td>Eltham</td>
                        <td>(03) 9439 2266</td>
                        <td>Australia</td>
                        <td><span class="email">info@littlegreenengine.co.au</span></td>
                        <td><a data-toggle="modal" data-target=".edit-location" href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td>Eltham</td>
                        <td>(03) 9439 2266</td>
                        <td>Australia</td>
                        <td><span class="email">info@littlegreenengine.co.au</span></td>
                        <td><a data-toggle="modal" data-target=".edit-location" href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td>Eltham</td>
                        <td>(03) 9439 2266</td>
                        <td>Australia</td>
                        <td><span class="email">info@littlegreenengine.co.au</span></td>
                        <td><a data-toggle="modal" data-target=".edit-location" href="#"><i class="icon-edit menu-icon-small"></i></a></td>
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

    <!-- MODALS -->
    <div class="modal fade edit-location" tabindex="-1" role="dialog" aria-labelledby="editlocation" aria-hidden="true">
      <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update Information</h4>
            <h5 class="modal-subtitle">Update your clinic information</h5>
          </div>
          <div class="modal-wrapper">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="first-name">Location Name</label>
                    <input type="text" class="form-control" value="Allanooka" id="first-name" placeholder="Enter Location Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Email Address</label>
                    <input type="text" class="form-control" id="first-name" value="info@littlegreenengine.co.au" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Country</label>
                    <select class="form-control">
                      <option>Australia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Phone Number</label>
                    <input type="text" class="form-control" id="first-name" value="(03) 9439 2266" placeholder="Enter Phone Number">
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">UPDATE</button>
            </div>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade add-location" tabindex="-1" role="dialog" aria-labelledby="editlocation" aria-hidden="true">
      <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add New Clinic</h4>
            <h5 class="modal-subtitle">Add a new clinic</h5>
          </div>
          <div class="modal-wrapper">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="first-name">Location Name</label>
                    <input type="text" class="form-control" value="" id="first-name" placeholder="Enter Location Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Email Address</label>
                    <input type="text" class="form-control" id="first-name" value="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Country</label>
                    <select class="form-control">
                      <option>Australia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Phone Number</label>
                    <input type="text" class="form-control" id="first-name" value="" placeholder="Enter Phone Number">
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">SAVE</button>
            </div>
        </div>
        </div>
      </div>
    </div>

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