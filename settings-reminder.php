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
                    <li class="nav-active">
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
                  <i class="icon-reminder icon-extra-large"></i>
                </div>
                <div class="header-span">
                  <span class="title">Reminders</span>
                  <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                </div>
              </div>
            </div>
          </div>

          <!-- TABLE -->
          <div class="row">
            <div class="col-md-12">

              <ul class="nav nav-tabs lge-tabs">
                <li class="active"><a href="#balance" data-toggle="tab">Balance</a></li>
                <li><a href="#reminders" data-toggle="tab">SMS Reminders</a></li>
                <li class="pull-right balance"><span>AU $0.00</span><small>Current Balance</small></li>
              </ul>

              <div class="right-nav-box square" style="border-top:0;">
                
                <div class="table-top-widget square">
                  <div class="col2" style="width:100%;height:auto;border-left:0;">
                    <p>When you create a new Clinicalendar account, you receive $12 worth of SMS credit to see how it works. After which SMS credits cost 25 cents (Australian Dollars) each.</p>
                    <h5>SMS Reminders</h5>
                    <p>are messages that are sent the day before a booking is scheduled. You can specify what time the day before messages are sent. It is recommended that you set this to as late as possible to 
                    ensure bookings made on that day receive the reminder as well. </p>
                    <h5>SMS Booking Confirmations</h5>
                    <p>are sent when a booking is made to confirm specific details of the booking. You can turn this off by default for booking you and your staff enter, however if a client books themselves in this 
                    confirmation sms is required.</p>
                    <h5>SMS Verifications</h5>
                    <p>are messages sent to your clients when they attempt to book themselves in. In this message is a verification code that must be entered into the website as they book. This ensures that you 
                    definitely have the contact information of everyone who books themselves in. This seems to dramatically decrease no-shows. This too is a compulsory SMS if you are allowing your clients to 
                    book themselves in.</p>
                    <h5>Refunds</h5>
                    <p>If you decide to no longer use Clinicalendar, simply email us and we will refund the balance to you (minus any of the original gifted $12 credit).</p>
                  </div>
                </div>

                <div class="tab-content square">

                  <div class="tab-pane active square" id="balance">
                    <table class="table-header">
                      <thead>
                        <tr>
                          <th style="width:44%"><h6>Package</h6><small>Credits</small></th>
                          <th style="width:44%"><h6>$COST/$SMS</h6><small>Cost</small></th>
                          <th style="width:12%"><h6>BUY</h6><small>Credits</small></th>
                        </tr>
                      </thead>
                    </table>
                    <div class="table-body height-push-footer">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td style="width:44%">100</td>
                            <td style="width:44%">AU$25.00($0.25ea)</td>
                            <td style="width:12%"><a href="#"><i class="icon-cart2 menu-icon-small"></i></a></td>
                          </tr>
                          <tr>
                            <td style="width:44%">450</td>
                            <td style="width:44%">AU$100.00(inc 40 Free SMS)</td>
                            <td style="width:12%"><a href="#"><i class="icon-cart2 menu-icon-small"></i></a></td>
                          </tr>
                          <tr>
                            <td style="width:44%">370</td>
                            <td style="width:44%">AU$200.00($0.25ea)</td>
                            <td style="width:12%"><a href="#"><i class="icon-cart2 menu-icon-small"></i></a></td>
                          </tr>
                          <tr>
                            <td style="width:44%">500</td>
                            <td style="width:44%">AU$25.00($0.25ea)</td>
                            <td style="width:12%"><a href="#"><i class="icon-cart2 menu-icon-small"></i></a></td>
                          </tr>
                          <tr>
                            <td style="width:44%">760</td>
                            <td style="width:44%">AU$25.00($0.25ea)</td>
                            <td style="width:12%"><a href="#"><i class="icon-cart2 menu-icon-small"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="tab-pane" id="reminders">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="titled-section">
                          <small class="title">SMS Reminders</small>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="" checked="true">
                             Use the SMS Reminder Function
                            </label>
                          </div>
                          <div class="form-group">
                            <label for="first-name">Booking Reminder Message<small class="help" title="Calendar Intervals">?</small></label>
                            <textarea rows="5" class="form-control" placeholder="Company address">Hi [firstname], reminding you of your treatment tomorrow at [company_short_name] with [practitioner] at [time]. To  change please call [phone]. If you fail to attend, a cancellation fee may be charged.</textarea>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-xs-7">
                                <div class="form-group">
                                  <small class="required">*</small>
                                  <label for="first-name">Send reminder messages at<small class="help" title="Calendar Intervals">?</small></label>
                                  <select class="form-control">
                                    <option>10:00 AM</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-xs-5">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="titled-section">
                          <small class="title">SMS Booking Confirmations</small>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="" checked="true">
                              Send Booking Confirmations by Default<small class="help" title="Calendar Intervals">?</small>
                            </label>
                          </div>
                          <div class="form-group">
                            <label for="first-name">Booking Confirmation<small class="help" title="Calendar Intervals">?</small></label>
                            <textarea rows="10" class="form-control" placeholder="Company address">
                              BOOKING CONFIRMATION:
                              Clinic: [location]
                              Therapist: [practitioner]
                              Date: [date]
                              Time: [time]
                              Please call [phone] with any queries.
                            </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="footer-submit">
                  <div class="row">
                    <div class="col-md-12">
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