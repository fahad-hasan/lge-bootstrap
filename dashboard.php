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
              <h5>Select clinic</h5>
              <small>Please select a clinic from the list</small>
            </div>
            <div class="left-nav-search">
              <select>
                <option>Eltham</option>
              </select>
            </div>
            
            <div id="dashboard-filters" class="filters">
              <div class="filter">
                <div class="filter-header">
                  <h5>Osteopathy</h5>
                  <small>Subsequent Osteo Appt.</small>
                </div>
                <div class="filter-body">
                  <ul>
                    <li>
                      <div class="filter-checkbox border-left-red"><input checked="checked" type="checkbox" /><small>Mellisa Bates</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-sky"><input checked="checked" type="checkbox" /><small>Emily Bergman</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-green"><input type="checkbox" /><small>Claire Nolle</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-magenta"><input checked="checked" type="checkbox" /><small>Andrew Hudson</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-sky"><input type="checkbox" /><small>SHabbir Hossain</small></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <div class="filter-header">
                  <h5>Podiatry</h5>
                  <small>Review Podiatry Consultation</small>
                </div>
                <div class="filter-body">
                  <ul>
                    <li>
                      <div class="filter-checkbox border-left-orange"><input type="checkbox" /><small>Elizabeth Conquest</small></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <div class="filter-header">
                  <h5>Nutrition Advice</h5>
                  <small>Subsequent dietitian consultant</small>
                </div>
                <div class="filter-body">
                  <ul>
                    <li>
                      <div class="filter-checkbox border-left-green"><input type="checkbox" /><small>Elizabeth Conquest</small></div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <div class="filter-header">
                  <h5>Myotherapy</h5>
                  <small>Initial MYO Consultant</small>
                </div>
                <div class="filter-body">
                  <ul>
                    <li>
                      <div class="filter-checkbox border-left-orange"><input type="checkbox" /><small>Melissa Bates</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-sky"><input type="checkbox" /><small>Elizabeth Conquest</small></div>
                    </li>
                    <li class="dash"></li>
                    <li>
                      <div class="filter-checkbox border-left-magenta"><input type="checkbox" /><small>Claire Nolle</small></div>
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
            <div class="lge-toolbar-left">
              <button type="button" class="btn visible-xs offcanvas-toggle" data-toggle="offcanvas">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="btn-group btn-group-lg calendar-view-buttons">
                <a href="dashboard_daily.php" class="btn btn-default"><i class="icon-medium icon-daily"></i><small>DAILY</small></a>
                <a href="#" class="btn btn-default hidden-xs active"><i class="icon-medium icon-weekly"></i><small>WEEKLY</small></a>
                <a href="#" id="calendar-button" type="button" class="btn btn-default"><i class="icon-medium icon-calendar"></i><small>CALENDAR</small></a>
              </div>
            </div>
            <div class="lge-toolbar-right">
              <h4 class="hidden-xs">THIS WEEK</h4>
              <h4 class="visible-xs">MONDAY</h4>
              <div class="btn-group btn-group-xs">
                <button type="button" class="btn btn-default btn-transparent"><i class="icon-arrow icon-left-arrow"></i></button>
                <button type="button" class="btn btn-default btn-transparent"><i class="icon-arrow icon-right-arrow"></i></button>
              </div>
              <div class="btn-group toggle-view-buttons hidden-xs">
                <button type="button" class="btn btn-default active"><i class="icon-view-normal"></i></button>
                <button type="button" class="btn btn-default"><i class="icon-view-full"></i></button>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row hidden-xs large-table">
            <div class="col-md-12">
              <div class="right-nav-box">
                <table class="dashboard-table-header">
                  <thead>
                    <tr>
                      <th>&nbsp;</th>
                      <th><h6>Monday</h6><small>May 19, 2014</small></th>
                      <th><h6>Tuesday</h6><small>May 20, 2014</small></th>
                      <th><h6>Wednesday</h6><small>May 21, 2014</small></th>
                      <th><h6>Thursday</h6><small>May 22, 2014</small></th>
                      <th><h6>Friday</h6><small>May 22, 2014</small></th>
                      <th><h6>Saturday</h6><small>May 23, 2014</small></th>
                      <th><h6>Sunday</h6><small>May 24, 2014</small></th>
                    </tr>
                  </thead>
                </table>
                <div class="dashboard-table-body">
                  <table class="dashboard-table">
                    <tbody>
                      <tr>
                        <td>8:00</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>8:30</td>
                        <td></td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>9:00</td>
                        <td><div class="w-relative"><div title="Kylie Groom" class="apt apt-red"><span data-tip="2">Kylie Groom</span></div></div></td>
                        <td><div class="w-relative"><div title="Carolyn Frith" class="apt apt-sky"><span>Carolyn Frith</span></div></div></td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td><div class="w-relative"><div title="Kylie Groom" class="apt apt-orange"><span>Kylie Groom</span></div></div></td>
                        <td><div class="w-relative"><div title="Fiona Moran" class="apt apt-magenta span-2"><span>Fiona Moran</span><a class="action action-clock" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>9:30</td>
                        <td><div class="w-relative"><div title="Fiona Moran" class="apt apt-red"><span>Fiona Moran</span></div></div></td>
                        <td></td>
                        <td><div class="w-relative"><div title="Eve Britton" class="apt apt-magenta"><span>Eve Britton</span></div></div></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>10:00</td>
                        <td><div class="w-relative"><div title="Rhonda Bain" class="apt apt-orange"><span>Rhonda Bain</span></div></div></td>
                        <td><div class="w-relative"><div title="Rhonda Bain" class="apt apt-orange span-3"><span>Rhonda Bain</span><a class="action action-clock" href="#"></a></div></div></td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking"class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>10:30</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>11:00</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>11:30</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div class="w-relative"><div title="Tailem Daniel" class="apt apt-half-left apt-sky"><span>Tailem Daniel</span></div><div class="apt apt-half-right apt-orange apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>12:00</td>
                        <td><div class="w-relative"><div title="Leeann Devisser" class="apt apt-green"><span>Leeann Devisser</span></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>12:30</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1:00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1:30</td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2:00</td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2:30</td>
                        <td></td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3:00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3:30</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4:00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- TABLE FOR SMALL DEVICES -->
          <div class="row visible-xs single-table">
            <div class="col-md-12">
              <div class="right-nav-box">
                <table class="dashboard-table-header small">
                  <thead>
                    <tr>
                      <th>&nbsp;</th>
                      <th><h6>Monday</h6><small>May 19, 2014</small></th>
                    </tr>
                  </thead>
                </table>
                <div class="dashboard-table-body">
                  <table class="dashboard-table small">
                    <tbody>
                      <tr>
                        <td>8:00</td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                      </tr>
                      <tr>
                        <td>8:30</td>
                        <td><div class="w-relative"><div class="apt apt-red apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                      </tr>
                      <tr>
                        <td>9:00</td>
                        <td><div class="w-relative"><div title="Kylie Groom" class="apt apt-red"><span data-tip="2">Kylie Groom</span><a data-toggle="modal" data-target=".edit-booking" class="action action-edit" href="#"></a></div></div></td>
                      </tr>
                      <tr>
                        <td>9:30</td>
                        <td><div class="w-relative"><div title="Fiona Moran" class="apt apt-red"><span>Fiona Moran</span></div></div></td>
                      </tr>
                      <tr>
                        <td>10:00</td>
                        <td><div class="w-relative"><div title="Rhonda Bain" class="apt apt-orange"><span>Rhonda Bain</span></div></div></td>
                      </tr>
                      <tr>
                        <td>10:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>11:00</td>
                        <td><div class="w-relative"><div class="apt apt-sky apt-add"><a data-toggle="modal" data-target=".new-booking" class="action action-add" href="#"></a></div></div></td>
                      </tr>
                      <tr>
                        <td>11:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>12:00</td>
                        <td><div class="w-relative"><div title="Leeann Devisser" class="apt apt-green"><span>Leeann Devisser</span></div></div></td>
                      </tr>
                      <tr>
                        <td>12:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1:00</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2:00</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3:00</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3:30</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4:00</td>
                        <td></td>
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
    <div class="modal fade new-booking" tabindex="-1" role="dialog" aria-labelledby="newbooking" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">New Booking</h4>
            <h5 class="modal-subtitle">Enter your booking information</h5>
          </div>
          <div class="modal-wrapper">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Last Name</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Mobile Number</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Appointment Type</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <small>Optional</small>
                    <label for="first-name">Note</label>
                    <textarea class="form-control" placeholder="This is dummy text content for note."></textarea>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="gray-box">
                    <div class="popover-custom-content">
                      <div class="popover-content-line">
                        <i class="icon-calendar-pop"></i><span>Friday, May 23, 2014</span>
                      </div>
                      <div class="popover-content-line">
                        <i class="icon-clock-pop"></i><span>9:00am</span>
                      </div>
                      <div class="popover-content-line">
                        <i class="icon-pin-pop"></i><span>Eltham</span>
                      </div>
                      <div class="popover-content-line">
                        <i class="icon-human-pop"></i><span>Fiona Moran</span>
                      </div>
                    </div>
                  </div>
                  <div class="gray-box">
                    <div class="popover-custom-content">
                      <div class="popover-content-line">
                        <i class="icon-calendar-pop"></i><span>Friday, May 23, 2014</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade edit-booking" tabindex="-1" role="dialog" aria-labelledby="newbooking" aria-hidden="true">
      <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Client Booking</h4>
            <h5 class="modal-subtitle">Update your booking information</h5>
          </div>
          <div class="modal-wrapper">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="first-name">Booking Name</label>
                    <input type="text" class="form-control" value="Kylie Groom" id="first-name" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Mobile Number</label>
                    <input type="text" class="form-control" id="first-name" value="723682634876" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <small>Optional</small>
                    <label for="first-name">Note</label>
                    <textarea class="form-control" placeholder="This is dummy text content for note."></textarea>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Send SMS Confirmation
                    </label>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Consultation Type</label>
                    <select class="form-control">
                      <option>Subsequent Osteo Appt. (30m)</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="pull-left delete-booking"><i class="icon-delete"></i>DELETE THIS BOOKING</a>
              <button type="button" class="btn btn-primary">Save</button>
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