<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include('../inc/config.inc.php'); // Include von Variable der Datenbankverbindung
@include('inc/licence/licenceCheck.inc.php');

// Datenbank Verbindung wird hergestellt
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');

  if( $_SESSION['AdminSessionTrue'] != '1' ){
    header("Location: ../admin.php");
    exit;
  }
  else{
    if( $_SESSION['AdminSessionTrue'] == '1' ){

      $sql = "SELECT * FROM `admins` WHERE `id` = '{$_SESSION['admin_id']}'";
      foreach ($pdo->query($sql) as $row) {
         $adminFirstname  = $row['firstname'];
         $adminSurname    = $row['surname'];

         // Start API Licence
         $servernautenUrl = $servernautenUrl . $row['licencekey'];
         $servernautAPI = file_get_contents($servernautenUrl);
         $servernautAPI = json_decode($servernautAPI);
         $timeStamp = time();
         // End API Licence

      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>servernauten.de - Webinterface</title>
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
    <link rel="stylesheet" href="css/dore.light.bluenavy.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
  <?php include('tpl/nav.tpl.php'); ?>
  <?php include('tpl/sidebar.tpl.php'); ?>
    <main>
        <div class="container-fluid">
          <?php licenceCheck($servernautAPI,$timeStamp); ?>
            <div class="row">
                <div class="col-12">
                    <h1>Dashboard</h1>
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
                        <?php
                        if( $servernautAPI->MasterServer == '0' ){
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Master Server</h6>';

                              $sql = "SELECT COUNT(id) AS MasterServerCount FROM server_MasterServer";
                              $MasterServer = $pdo->query($sql)->fetch();

                              echo '<div role="progressbar"
                                  class="position-relative"><h2><span class="badge badge-secondary">'.$MasterServer['MasterServerCount'].' / Unlimited</span></h2>
                              </div>
                          </div>';
                        }else{
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Master Server</h6>';

                              $sql = "SELECT COUNT(id) AS MasterServerCount FROM server_MasterServer";
                              $MasterServer = $pdo->query($sql)->fetch();

                              echo '<div role="progressbar"
                                  class="progress-bar-circle progress-bar-banner position-relative"
                                  data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                  aria-valuenow="'.$MasterServer['MasterServerCount'].'" aria-valuemax="'.$servernautAPI->MasterServer.'" data-show-percent="false">
                              </div>
                          </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <?php
                        if( $servernautAPI->Customer == '0' ){
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Kunden</h6>';

                              $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                              $Customers = $pdo->query($sql)->fetch();

                              echo '<div role="progressbar"
                                  class="position-relative"><h2><span class="badge badge-secondary">'.$Customers['CustomersCount'].' / Unlimited</span></h2>
                              </div>
                          </div>';
                        }else{
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Kunden</h6>';

                                $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                                $Customers = $pdo->query($sql)->fetch();

                              echo '<div role="progressbar"
                                  class="progress-bar-circle progress-bar-banner position-relative"
                                  data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                  aria-valuenow="'.$Customers['CustomersCount'].'" aria-valuemax="'.$servernautAPI->Customer.'" data-show-percent="false">
                              </div>
                          </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <?php
                        if( $servernautAPI->GameServer == '0' ){
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Gameserver</h6>';

                            /*  $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                              $Customers = $pdo->query($sql)->fetch(); */

                              echo '<div role="progressbar"
                                  class="position-relative"><h2><span class="badge badge-secondary">2 / Unlimited</span></h2>
                              </div>
                          </div>';
                        }else{
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Gameserver</h6>';

                              /*  $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                                $Customers = $pdo->query($sql)->fetch(); */

                              echo '<div role="progressbar"
                                  class="progress-bar-circle progress-bar-banner position-relative"
                                  data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                  aria-valuenow="2" aria-valuemax="'.$servernautAPI->GameServer.'" data-show-percent="false">
                              </div>
                          </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <?php
                        if( $servernautAPI->WebServer == '0' ){
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Webserver</h6>';

                            /*  $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                              $Customers = $pdo->query($sql)->fetch(); */

                              echo '<div role="progressbar"
                                  class="position-relative"><h2><span class="badge badge-secondary">2 / Unlimited</span></h2>
                              </div>
                          </div>';
                        }else{
                          echo '<div class="card-body d-flex justify-content-between align-items-center">
                              <h6 class="mb-0">Webserver</h6>';

                              /*  $sql = "SELECT COUNT(id) AS CustomersCount FROM customers";
                                $Customers = $pdo->query($sql)->fetch(); */

                              echo '<div role="progressbar"
                                  class="progress-bar-circle progress-bar-banner position-relative"
                                  data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                  aria-valuenow="2" aria-valuemax="'.$servernautAPI->WebServer.'" data-show-percent="false">
                              </div>
                          </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 mb-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Übersicht Masterserver</h5>
                            <form class="needs-validation tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Name is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="number" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Age is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" required></textarea>
                                    <div class="invalid-tooltip">
                                        Details are required!
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Radio</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom
                                            radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other
                                            custom radio</label>
                                    </div>
                                    <div class="invalid-tooltip">
                                        Radio is required!
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="customCheck1">Check first</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="customCheck2">Check second</label>
                                    </div>
                                    <div class="invalid-tooltip">
                                        Checkboxes are required!
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>State</label>
                                    <select class="custom-select" required>
                                        <option value=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        State is required!
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 error-l-200">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1"
                                        required>
                                    <label class="custom-control-label" for="customControlValidation1">Check this custom
                                        checkbox</label>
                                    <div class="invalid-tooltip">Check this!</div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Übersicht Rechnungen</h5>
                            <form id="exampleForm" class="tooltip-label-right" novalidate>
                                <div class="form-group position-relative error-l-50">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="jQueryName" required>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Age</label>
                                    <input type="number" class="form-control" required name="jQueryAge">
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>Details</label>
                                    <textarea class="form-control" rows="2" name="jQueryDetail" required></textarea>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Radio</label>
                                    <div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio1" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio1">Toggle this
                                                custom
                                                radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jQueryCustomRadio2" name="jQueryCustomRadio"
                                                class="custom-control-input" required>
                                            <label class="custom-control-label" for="jQueryCustomRadio2">Or toggle this
                                                other
                                                custom
                                                radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative">
                                    <label>Check</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck1"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck1">Check first</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryCustomCheck2"
                                            name="jQueryCheckbox" required>
                                        <label class="custom-control-label" for="jQueryCustomCheck2">Check
                                            second</label>
                                    </div>
                                </div>
                                <div class="form-group position-relative error-l-50">
                                    <label>State</label>
                                    <select class="custom-select" required>
                                        <option value=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group position-relative error-l-200">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="jQueryControlValidation"
                                            name="jQueryControlValidation" required>
                                        <label class="custom-control-label" for="jQueryControlValidation">Check this
                                            custom
                                            checkbox</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Submit</button>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
            
        </div>
    </main>

    <?php include('tpl/footer.tpl.php'); ?>

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
    <script src="js/scripts.single.theme.js"></script>
</body>

</html>
