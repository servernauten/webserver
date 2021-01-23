<?php
session_start();

@include('../inc/config.inc.php'); // Include von Variable der Datenbankverbindung
// Datenbank Verbindung wird hergestellt
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');

if( $_SESSION['AdminSessionTrue'] != '1' ){
  header("Location: ../admin.php");
  exit;
}
else{
  if( $_SESSION['AdminSessionTrue'] == '1' ){

    $sql = "SELECT * FROM admins
            LEFT JOIN language ON admins.language_code = language.language_id
            WHERE `id` = '{$_SESSION['admin_id']}'";

    foreach ($pdo->query($sql) as $row) {
       $adminFirstname  = $row['firstname'];
       $adminSurname    = $row['surname'];
       $adminLangCode   = $row['language_code'];

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
            <div class="row">
                <div class="col-12">
                    <h1>Overview Customers</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table data-table-feature">
                                <thead>
                                    <tr>
                                        <th>KNr</th>
                                        <th>Firma</th>
                                        <th>Name</th>
                                        <th>Ort</th>
                                        <th>E-Mail</th>
                                        <th>Tel</th>
                                    </tr>
                                </thead>
                                <tbody>
      <?php
      $statement = $pdo->query("SELECT `id`,`company`,`firstname`,`surname`,`location`,`mail`,`phone`, `customerToken` FROM `customers`");
      while($row = $statement->fetch()) {
         echo '<tr>
                 <td><a href="overviewCustomer.php?CustomerID='.$row['customerToken'].'">KD'.$row['id'].'</a></td>
                 <td><a href="overviewCustomer.php?CustomerID='.$row['customerToken'].'">'.$row['company'].'</td>
                 <td><a href="overviewCustomer.php?CustomerID='.$row['customerToken'].'">'.$row['firstname'].' '.$row['surname'].'</a></td>
                 <td><a href="overviewCustomer.php?CustomerID='.$row['customerToken'].'">'.$row['location'].'</a></td>
                 <td><a href="mailto:'.$row['mail'].'">'.$row['mail'].'</a></td>
                 <td><a href="overviewCustomer.php?CustomerID='.$row['customerToken'].'">'.$row['phone'].'</a></td>
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
