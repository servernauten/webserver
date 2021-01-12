<?php
session_start();

  if( $_SESSION['AdminSessionTrue'] != '1' ){
    header("Location: ../admin.php");
  }
  else{
    if( $_SESSION['AdminSessionTrue'] == '1' ){

      echo 'Admin ID: ';
      echo $_SESSION['admin_id'];
      echo '<br>';
      echo 'Session True: ';
      echo $_SESSION['AdminSessionTrue'];
    }

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
        </div>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                         data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>
            <?php include('tpl/sidebar.tpl.php'); ?>
            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <?php ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Dashboard</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>

            </div>


            <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Master Server</h6>
                            <div role="progressbar"
                                class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                aria-valuenow="5" aria-valuemax="10" data-show-percent="false">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Kunden</h6>
                            <div role="progressbar"
                                class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                aria-valuenow="7" aria-valuemax="25" data-show-percent="false">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Gameserver</h6>
                            <div role="progressbar"
                                class="progress-bar-circle progress-bar-banner position-relative"
                                data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                aria-valuenow="7" aria-valuemax="10" data-show-percent="false">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Webserver</h6>
                              <div role="progressbar"
                                  class="progress-bar-circle progress-bar-banner position-relative"
                                  data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                  aria-valuenow="7" aria-valuemax="10" data-show-percent="false">
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Website Visits</h5>
                                    <span class="text-muted text-small d-block">Unique Visitors</span>
                                </div>
                            </div>
                            <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Conversion Rates</h5>
                                    <span class="text-muted text-small d-block">Per Session</span>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-file mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">5 Files</p>
                                            <p class="text-small text-white">Pending for print</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="5" aria-valuemax="12" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">4 Orders</p>
                                            <p class="text-small text-white">On approval process</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="4" aria-valuemax="6" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#"
                                    class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="8" aria-valuemax="10" data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-search">
                        <div class="card-body">
                            <h5 class="text-white mb-3">Advanced Search</h5>
                            <div class="form-container">
                                <form>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label>Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">

                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Price Range</label>
                                        <div>
                                            <div class="slider" id="dashboardPriceRange"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg mt-3">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart2"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dashboard-top-rated">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="simple-icon-refresh"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-3">
                                <a class="dropdown-item" href="#">Top Sold Items</a>
                                <a class="dropdown-item" href="#">Top Commented Items</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Top Rated Items</h5>

                            <div class="glide best-rated-items">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides">
                                        <div class="glide__slide">
                                            <img src="img/carousels/1.jpg" alt="Cheesecake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">1.</span>Cheesecake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="img/carousels/2.jpg" alt="Chocolate Cake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">2.</span>Chocolate Cake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="img/carousels/3.jpg" alt="Cremeschnitte" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">3.</span>Cremeschnitte</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">servernauten.de</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
