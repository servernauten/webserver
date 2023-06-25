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

      $sql = "SELECT * FROM `admins` WHERE `id` = '{$_SESSION['admin_id']}'";
      foreach ($pdo->query($sql) as $row) {
         $adminFirstname  = $row['firstname'];
         $adminSurname    = $row['surname'];

         // Start API Licence
         $servernautenUrl = 'https://www.servernauten.de/API/licenceData.php?APIKEY='.$row['licencekey'].'';
         $servernautAPI = file_get_contents($servernautenUrl);
         $servernautAPI = json_decode($servernautAPI);
         $timeStamp = time();
         // End API Licence

      }
      if (!empty($_POST['submitCreateMasterServer']) AND md5($_SERVER['SERVER_NAME']) == $servernautAPI->DomainKey AND $timeStamp < $servernautAPI->LicenceEnd ){
        $createMasterServer = '1';
        @include('../inc/inputCheck/inputCheck.inc.php');
        @include('inc/opensslGetCipherMethods/opensslGetCipherMethods.inc.php');
        @include('inc/createMasterServer/createMasterServer.inc.php');

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
      <form method="POST" action="createMasterServer.php">
        <div class="container-fluid ">
          <?php include('inc/licence/licenceCheck.inc.php'); ?>
          <?php echo licenceCheck($servernautAPI,$timeStamp); ?>
          <div class="row">
              <div class="col-12">
                  <h1>Edit Master Server</h1>
                  <div class="separator mb-5"></div>
              </div>
          </div>

            <div class="row">

                <div class="col-12">
                  <div class="row">
                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <!-- Start any identifier -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Any Identifier</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="anyIdentifier" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['anyIdentifier'].'">';
        }
    ?> 
                                  </div>
                                  <!-- End any identifier -->
                                  <!-- Start Reseller True -->
                                  <div class="form-group mb-3">
                                      <label>Reseller</label>
                                      <select name="reseller" class="form-control select2-single" data-width="100%">
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            if( $row['reseller'] == '0' ){
                echo '<option value="0">No</option>
                      <option value="1">Yes</option>';
            }else{
                echo '<option value="1">Yes</option>
                      <option value="0">No</option>';
            }
        }
    ?> 
                                              
                                      </select>
                                  </div>
                                  <!-- End Reseller True -->
                                  <!-- Start Server active -->
                                  <div class="form-group mb-3">
                                      <label>Server Active</label>
                                      <select name="serverActive" class="form-control select2-single" data-width="100%">
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            if( $row['serverActive'] == '0' ){
                echo '<option value="0">No</option>
                      <option value="1">Yes</option>';
            }else{
                echo '<option value="1">Yes</option>
                      <option value="0">No</option>';
            }
        }
    ?> 
                                              
                                      </select>
                                  </div>
                                  <!-- End Server active -->
                              </div>
                          </div>
                      </div>

                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                <!-- Start SSH2 IP Address -->
                                <div class="form-group mb-3">
                                    <label for="ssh2ip">SSH2 IP Address</label> 
  <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="ssh2IP" type="text" class="form-control"
            aria-describedby="basic-addon1" required value="'.$row['ssh2IP'].'">'; 
        }
    ?>                                   
                                </div>
                                <!-- End SSH2 IP Address -->
                                  <!-- Start FTP / SSH2 Port -->
                                  <div class="form-group mb-3">
                                      <label for="FTP / SSH2 Port">FTP / SSH2 Port</label>
                                      <div class="input-group">
  <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="ftp" type="text" class="form-control"
            aria-describedby="basic-addon1" placeholder="ftp port" value="'.$row['ftpPort'].'">';
        }
    ?>                                      
                                          <span class="input-group-addon"></span>
   <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="ssh" type="text" class="form-control"
            aria-describedby="basic-addon1" placeholder="ftp port" value="'.$row['ssh2Port'].'">';
        }
    ?>  
                                      </div>
                                  </div>
                                  <!-- End FTP / SSH2 Port -->
                                  <!-- Start SSH2 IP Address -->
                                  <div class="form-group mb-3">
                                      <label for="ssh2Username">SSH2 Username</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="ssh2Username" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['ssh2Username'].'">';
        }
    ?> 
                                      
                                  </div>
                                  <!-- End SSH2 IP Address -->
                                  <!-- Start SSH2 IP Address -->
                                  <div class="form-group mb-3">
                                      <label for="ssh2Password">SSH2 Password</label>
                                      <input name="ssh2Password" type="text" class="form-control"
                                          aria-describedby="basic-addon1" value="DATENBANK NOCH VERBINDEN">
                                  </div>
                                  <!-- End SSH2 IP Address -->
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <!-- Start Operating System -->
                                  <div class="form-group mb-3">
                                      <label>Operating System</label>
                                      <select name="operatingSystem" class="form-control select2-single" data-width="100%">
                                              <option value="1">Linux</option>
                                      </select>
                                  </div>
                                  <!-- End Operating System -->
                                  <!-- Start Core -->
                                  <div class="form-group mb-3">
                                      <label for="core">Core</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="core" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['core'].'">';
        }
    ?>  
                                  </div>
                                  <!-- End Core -->
                                  <!-- Start Ram (MB) -->
                                  <div class="form-group mb-3">
                                      <label for="ram">Ram (MB)</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="ram" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['ram'].'">';
        }
    ?> 
                                  </div>
                                  <!-- End Ram (MB) -->
                                  <!-- Start description -->
                                  <div class="form-group mb-3">
                                      <label for="description">Description</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="description" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['description'].'">';
        }
    ?>  
                                  </div>
                                  <!-- End description -->
                                  <!-- Start maximum Slots -->
                                  <div class="form-group mb-3">
                                      <label for="maximumSlots">maximum Slots</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="maximumSlots" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['maximumSlots'].'">';
        }
    ?>  
                                      
                                  </div>
                                  <!-- End maximum Slots -->
                                  <!-- Start maximum Server -->
                                  <div class="form-group mb-3">
                                      <label for="maximumServer">maximum Server</label>
    <?php $sql = "SELECT * FROM `server_MasterServer` WHERE `ssh2IP` = '{$_GET['Server']}'";
        foreach ($pdo->query($sql) as $row) {
            echo '<input name="maximumServer" type="text" class="form-control"
            aria-describedby="basic-addon1" value="'.$row['maximumServer'].'">';
        }
    ?>  
                                      
                                  </div>
                                  <!-- End maximum Server -->
                              </div>
                          </div>

                      </div>

                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <!-- Start Mobile -->
                                  <!-- Start Create Master Server Button -->
                                  <?php
                                  $statement = $pdo->prepare("SELECT COUNT(*) AS masterServerQuantity FROM server_MasterServer");
                                  $statement->execute();
                                  $row = $statement->fetch();
                                  if( $row['masterServerQuantity'] <= $servernautAPI->MasterServer OR $row['masterServerQuantity'] == 'unlimited' ){
                                    echo '<input name="submitCreateMasterServer" type="submit" class="btn btn-primary d-block mt-3" value="Edit Master Server"></input>';
                                  }else {
                                    echo '<div class="alert alert-danger" role="alert">
                                            Sie haben die maximale Anzahl von '.$servernautAPI->MasterServer.' erreicht.
                                    </div>';

                                  }
                                  ?>
                                  <!-- End Create Master Server Button -->

                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Contact Details -->
                  </form>
    </main>

    <?php include('tpl/footer.tpl.php'); ?>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/dropzone.min.js"></script>
    <script src="js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/cropper.min.js"></script>
    <script src="js/vendor/typeahead.bundle.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore-plugins/select.from.library.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.single.theme.js"></script>

</body>

</html>
