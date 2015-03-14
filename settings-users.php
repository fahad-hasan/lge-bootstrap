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
                    <li class="nav-active">
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
                  <i class="icon-users icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">Users</span>
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
                    <button style="margin-top:7px;" data-toggle="modal" data-target=".add-user" type="button" class="btn btn-success add-btn">ADD NEW USER</button>
                  </div>
                  <div class="col2">
                    <h5>User Panel</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>

                <table class="table-header">
                  <thead>
                    <tr>
                      <th style="width:18%"><h6>FULL NAME</h6><small></small></th>
                      <th style="width:15%"><h6>USERNAME</h6><small></small></th>
                      <th style="width:18%"><h6>EMAIL ADDRESS</h6><small></small></th>
                      <th style="width:12%"><h6>LOCATION</h6><small></small></th>
                      <th style="width:12%"><h6>CALENDAR</h6><small></small></th>
                      <th style="width:12%"><h6>STATUS</h6><small></small></th>
                      <th style="width:13%"><h6>EDIT</h6><small></small></th>
                    </tr>
                  </thead>
                </table>

                <div class="table-body height-push-footer">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td style="width:18%"><span class="td-text">Melissa Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Claire Nolle</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Emily Bergman</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Reid Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%"><span class="red-text">Administrator</span></td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Elizabeth Conquest</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Melissa Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Melissa Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Claire Nolle</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Emily Bergman</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Reid Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Elizabeth Conquest</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
                      </tr>
                      <tr>
                        <td style="width:18%"><span class="td-text">Melissa Bates</span><img class="hover-img" src="assets/images/hover_user.jpg"/></td>
                        <td style="width:15%">melissa.bates</td>
                        <td style="width:18%"><span class="email">mel@osteo.com</span></td>
                        <td style="width:12%">Eltham</td>
                        <td style="width:12%">Message</td>
                        <td style="width:12%">User</td>
                        <td style="width:13%"><a href="#"><i class="icon-edit menu-icon-small"></i></a></td>
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
    <div class="modal fade add-user" tabindex="-1" role="dialog" aria-labelledby="editlocation" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Create New User</h4>
            <h5 class="modal-subtitle">Create new user with detailed information</h5>
          </div>
          <div class="modal-wrapper">
            <div class="modal-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first-name">Full Name</label>
                    <input type="text" class="form-control" value="" id="first-name" placeholder="Enter Full Name">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Username</label>
                    <input type="text" class="form-control" value="" id="first-name" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Password</label>
                    <input type="password" class="form-control" id="first-name" value="" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Confirm Password</label>
                    <input type="password" class="form-control" id="first-name" value="" placeholder="Re-type Password">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Mobile Number</label>
                    <input type="text" class="form-control" id="first-name" value="" placeholder="Enter Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Email Address</label>
                    <input type="text" class="form-control" id="first-name" value="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Status</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Default Calendar</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Default Location</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="img-upload-container">
                      <img src="assets/images/user.jpg" class="img-thumbnail">
                      <div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-open"></span></button>
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                      </div>
                    </div>
                    <div class="hint">You can only upload JPG, GIF, PNG formatted file and the file size should be maximum 5MB.</div>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Practitioner Color</label>
                    <input type="text" class="form-control" value="#FFFFFF (White)" id="first-name" placeholder="Choose Color">
                  </div>
                  <div class="form-group">
                    <label for="first-name">Available For</label>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="checkbox small">
                          <label>
                            <input checked="true" type="checkbox"> Ostheopathy
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Massage
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Myotherapy
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Podiatry
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Relaxation Massage
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Nutrition Advice
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Remedial Massage
                          </label>
                        </div>
                        <div class="checkbox small">
                          <label>
                            <input type="checkbox"> Other
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Notify practitioner when</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="first-name">Notify practitioner with</label>
                    <select class="form-control">
                      <option>Select...</option>
                    </select>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">CREATE</button>
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