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
                            <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <?php
                          // BEGIN Server neustarten
                          if (!empty($_POST['RebootMasterServerTrue']) AND serverPingCheckForCommand($_POST['ssh2IP']) == '1'){

                              $sql = "SELECT * FROM server_MasterServer WHERE `ssh2IP` = '{$_POST['ssh2IP']}'";
                              $RebootMasterServer = $pdo->query($sql)->fetch();

                              $decrypted_password = encrypt_decrypt('decrypt', $RebootMasterServer['ssh2Password']);

                              $server = serverCommands($_POST['ssh2IP'],$RebootMasterServer['ssh2Username'],$decrypted_password,$RebootMasterServer['ssh2Port'],'init 6');

                          }
                          // ENDE Server neustarten
                          // BEGIN Server runterfahren
                          if (!empty($_POST['ShutdownMasterServerTrue']) AND serverPingCheckForCommand($_POST['ssh2IP']) == '1'){
              
                              $sql = "SELECT * FROM server_MasterServer WHERE `ssh2IP` = '{$_POST['ssh2IP']}'";
                              $ShutdownMasterServer = $pdo->query($sql)->fetch();

                              $decrypted_password = encrypt_decrypt('decrypt', $ShutdownMasterServer['ssh2Password']);

                              $server = serverCommands($_POST['ssh2IP'],$ShutdownMasterServer['ssh2Username'],$decrypted_password,$ShutdownMasterServer['ssh2Port'],'init 0');

                          }
                          // ENDE Server runtefahren
                          // BEGIN Server löschen
                          //
                          //
                          //
                          //
                          // ENDE Server löschen
                          // BEGIN Abfrage ob Server neugestartet werden soll
                          if(!empty($_POST['RebootMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
                              echo '<div class="alert alert-warning" role="alert">
                                        <p>Soll der Master Server mit der IP '.$_POST['ssh2IP'].' neugestartet werden?</p>
                                        <div class="mb-4">
                                        <form method="POST" action="overviewMasterServers.php">
                                          <input type="hidden" name="ssh2IP" value="'.$_POST['ssh2IP'].'" />
                                          <input type="submit" name="RebootMasterServerTrue" class="btn btn-success btn-xs mb-1" value="Ja"></input>
                                          <input type="submit" name="RebootMasterServerFalse" class="btn btn-danger btn-xs mb-1" value="Nein"></input>
                                        </form>
                                        </div>
                                    </div>';
                          }
                          // ENDE Abfrage ob Server neugestartet werden soll
                          // BEGIN Abfrage ob Server runtergefahren werden soll
                          if(!empty($_POST['ShutdownMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
                            echo '<div class="alert alert-warning" role="alert">
                                      <p>Soll der Master Server mit der IP '.$_POST['ssh2IP'].' runtergefahren werden?</p>
                                      <div class="mb-4">
                                      <form method="POST" action="overviewMasterServers.php">
                                        <input type="hidden" name="ssh2IP" value="'.$_POST['ssh2IP'].'" />
                                        <input type="submit" name="ShutdownMasterServerTrue" class="btn btn-success btn-xs mb-1" value="Ja"></input>
                                        <input type="submit" name="ShutdownMasterServerFalse" class="btn btn-danger btn-xs mb-1" value="Nein"></input>
                                      </form>
                                      </div>
                                  </div>';
                          }
                          // ENDE Abfrage ob Server runtergefahren werden soll
                          // BEGIN Abfrage ob Server gelöscht werden soll
                          if(!empty($_POST['DeleteMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
                            echo '<div class="alert alert-warning" role="alert">
                                      <p>Soll der Master Server mit der IP '.$_POST['ssh2IP'].' gelöscht werden?</p>
                                      <div class="mb-4">
                                      <input type="submit" name="DeleteMasterServerTrue" class="btn btn-success btn-xs mb-1" value="Ja"></input>
                                      <input type="submit" name="DeleteMasterServerFalse" class="btn btn-danger btn-xs mb-1" value="Nein"></input>
                                      </div>
                                  </div>';
                          }
                          // ENDE Abfrage ob Server gelöscht werden soll
                          // BEGIN Ausgabe Server Ping
                          if(!empty($_POST['PingMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
                            echo serverPing($_POST['ssh2IP']);
                          }
                          // ENDE Ausgabe Server Ping
                          ?>

                            <table class="data-table data-table-feature">
                                <thead>
                                    <tr>
                                        <th>IP</th>
                                        <th>Active</th>
                                        <th>Description</th>
                                        <th>Server installed</th>
                                        <th>Ram</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
      <?php
      $statement = $pdo->query("SELECT `id`,`ssh2IP`,`serverActive`,`description`,`maximumServer`,`ram`,`MasterServerToken` FROM `server_MasterServer`");
      while($row = $statement->fetch()) {
         echo '<tr>
                 <td><a href="overviewMasterServer.php?MasterServerID='.$row['MasterServerToken'].'">'.$row['ssh2IP'].'</a></td>
                 <td><a href="overviewMasterServer.php?MasterServerID='.$row['MasterServerToken'].'">'.$row['serverActive'].'</td>
                 <td><a href="overviewMasterServer.php?MasterServerID='.$row['MasterServerToken'].'">'.$row['description'].'</a></td>
                 <td><a href="overviewMasterServer.php?MasterServerID='.$row['MasterServerToken'].'">0 / '.$row['maximumServer'].'</a></td>
                 <td><a href="overviewMasterServer.php?MasterServerID='.$row['MasterServerToken'].'">'.$row['ram'].'</a></td>
                 <td><div class="mb-4">
                     <form method="POST" action="overviewMasterServers.php">
                     <input type="hidden" name="serverID" value="'.$row['id'].'">
                     <input type="hidden" name="ssh2IP" value="'.$row['ssh2IP'].'">
                     <input type="submit" name="PingMasterServer" class="btn btn-success btn-xs mb-1" value="Server Online"></input>
                     <input type="submit" name="EditMasterServer" class="btn btn-danger btn-xs mb-1" value="Server Offline"></input>
                     </form>
                 </div></td>
              </tr>';
}
      ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
