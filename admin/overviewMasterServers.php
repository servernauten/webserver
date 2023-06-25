<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include('../inc/config.inc.php'); // Include von Variable der Datenbankverbindung
// Datenbank Verbindung wird hergestellt
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');

if( $_SESSION['AdminSessionTrue'] != '1' ){
  header("Location: ../admin.php");
  exit;
}
else{
  if( $_SESSION['AdminSessionTrue'] == '1' ){

    @include('inc/serverPing/serverPing.inc.php');
    @include('inc/serverCommands/serverCommands.inc.php');
    @include('inc/opensslGetCipherMethods/opensslGetCipherMethods.inc.php');

    $sql = "SELECT * FROM admins
            LEFT JOIN language ON admins.language_code = language.language_id
            WHERE `id` = '{$_SESSION['admin_id']}'";

    foreach ($pdo->query($sql) as $row) {
       $adminFirstname  = $row['firstname'];
       $adminSurname    = $row['surname'];
       $adminLangCode   = $row['language_code'];

       // Start API Licence
       $servernautenUrl = 'https://www.servernauten.de/API/licenceData.php?APIKEY='.$row['licencekey'].'';
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
    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/dore.light.bluenavy.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
  <?php include('tpl/nav.tpl.php'); ?>
  <?php include('tpl/sidebar.tpl.php'); ?>
    <main>
        <div class="container-fluid">
          <?php include('inc/licence/licenceCheck.inc.php'); ?>
          <?php echo licenceCheck($servernautAPI,$timeStamp); ?>
            <div class="row">
                <div class="col-12">
                    <h1>Overview Master Servers</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>
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

                              echo '<div class="alert alert-success" role="alert">Der Server mit der IP '.$_POST['ssh2IP'].' wird neugestartet.</div>';
                          }
                          // ENDE Server neustarten
                          // BEGIN Server runterfahren
                          if (!empty($_POST['ShutdownMasterServerTrue']) AND serverPingCheckForCommand($_POST['ssh2IP']) == '1'){
              
                              $sql = "SELECT * FROM server_MasterServer WHERE `ssh2IP` = '{$_POST['ssh2IP']}'";
                              $ShutdownMasterServer = $pdo->query($sql)->fetch();

                              $decrypted_password = encrypt_decrypt('decrypt', $ShutdownMasterServer['ssh2Password']);

                              $server = serverCommands($_POST['ssh2IP'],$ShutdownMasterServer['ssh2Username'],$decrypted_password,$ShutdownMasterServer['ssh2Port'],'init 0');

                              echo '<div class="alert alert-success" role="alert">Der Server mit der IP '.$_POST['ssh2IP'].' wird heruntergefahren.</div>';
                          }
                          // ENDE Server runtefahren
                          // BEGIN Server löschen
                          if (!empty($_POST['DeleteMasterServerTrue'])){

                            $sql = $pdo->prepare("DELETE FROM `server_MasterServer` WHERE `ssh2IP` = ?");
                            $sql->execute(array(''.$_POST['ssh2IP'].''));
                            echo '<div class="alert alert-success" role="alert">Der Server mit der IP '.$_POST['ssh2IP'].' wurde gelöscht.</div>';
                            
                          }
                          // ENDE Server löschen

                          // BEGIN Abfrage ob Server bearbeitet werden soll
                          if(!empty($_POST['EditMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
                            echo '<div class="alert alert-warning" role="alert">
                                      <p>Soll der Master Server mit der IP '.$_POST['ssh2IP'].' bearbeitet werden?</p>
                                      <div class="mb-4">                       
                                        <a href="editMasterServer.php?Server='.$_POST['ssh2IP'].'" class="btn btn-success btn-xs mb-1">Ja</a>
                                        <a href="overviewMasterServers.php" class="btn btn-danger btn-xs mb-1">Nein</a>
                                      </div>
                                  </div>';
                        }
                          // ENDE Abfrage ob Server bearbeitet werden soll
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
                                      <form method="POST" action="overviewMasterServers.php">
                                        <input type="hidden" name="ssh2IP" value="'.$_POST['ssh2IP'].'" />
                                        <input type="submit" name="DeleteMasterServerTrue" class="btn btn-success btn-xs mb-1" value="Ja"></input>
                                        <input type="submit" name="DeleteMasterServerFalse" class="btn btn-danger btn-xs mb-1" value="Nein"></input>
                                      </form>
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
                     <input type="submit" name="PingMasterServer" class="btn btn-info btn-xs mb-1" value="Server Ping"></input>
                     <input type="submit" name="EditMasterServer" class="btn btn-success btn-xs mb-1" value="Edit"></input>
                     <input type="submit" name="RebootMasterServer" class="btn btn-primary btn-xs mb-1" value="Reboot"></input>
                     <input type="submit" name="ShutdownMasterServer" class="btn btn-warning btn-xs mb-1" value="Shutdown"></input>
                     <input type="submit" name="DeleteMasterServer" class="btn btn-danger btn-xs mb-1" value="Delete"></input>
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
    </main>

    <?php include('tpl/footer.tpl.php'); ?>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.single.theme.js"></script>

</body>

</html>
