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
  <?php
  
  $sql = "SELECT COUNT(*) AS overviewCustomerCheck FROM customers WHERE `customerToken`='{$_GET['CustomerID']}'";
  foreach ($pdo->query($sql) as $row) {
     $overviewCustomerCheck  = $row['overviewCustomerCheck'];
  }
  if( $overviewCustomerCheck == '1' ){
    $sql = "SELECT customers.*, customerType.customerType_{$adminLangCode} AS customerTypeName, customerSalutation.salutation_{$adminLangCode} AS customerSalutation, countries.{$adminLangCode} AS customerCountries FROM customers LEFT JOIN customerType ON customers.customerType_id = customerType.customerType_id LEFT JOIN customerSalutation ON customers.salutation_id = customerSalutation.salutation_id LEFT JOIN countries ON customers.country_code = countries.code WHERE `customerToken` = '{$_GET['CustomerID']}'";
    foreach ($pdo->query($sql) as $row) {
      $ID                   = $row['id'];
      $CustomerSalutation   = $row['customerSalutation'];
      $CustomerTypeName     = $row['customerTypeName'];
      $CustomerCompany      = $row['company'];
      $CustomerAddress      = $row['address'];
      $CustomerZip          = $row['zip'];
      $CustomerLocation     = $row['location'];
      $CustomerCountries    = $row['customerCountries'];
      $CustomerFirstname    = $row['firstname'];
      $CustomerSurname      = $row['surname'];
      $CustomerMobile       = $row['mobile'];
      $CustomerPhone        = $row['phone'];
      $CustomerFax          = $row['fax'];
      $CustomerEmail        = $row['mail'];
      $CustomerHomepage     = $row['homepage'];


    }
  }
  ?>
    <main>
      <form method="POST" action="createCustomer.php">
        <div class="container-fluid ">
          <div class="row">
              <div class="col-12">

                  <h1>Overview Customer</h1>
                  <div class="separator mb-5"></div>
              </div>
          </div>

            <div class="row">

                <div class="col-12">
                  <!-- Start Company / Address -->
                  <div class="row">
                      <div class="col-12 col-xl-2 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="mb-4">Sebastian Wulf</h5>
                                  <hr>
                                  <!-- Start Customer Type -->
                                  <div class="mb-3">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link active iconsminds-diamond" href="#"> Kundenübersicht</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link iconsminds-server-2" href="#"> Server Liste</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link simple-icon-docs" href="#"> Dokumente</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link iconsminds-feather" href="#"> Kommentare</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link simple-icon-bell" href="#"> History</a>
                                </li>
                            </ul>
                                  </div>
                                  <hr>
                                  <div class="mb-3">
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link active iconsminds-file-edit" href="editCustomer.php?CustomerID=<?php echo $_GET['CustomerID']; ?>"> Kunden bearbeiten</a>
                                </li>
                            </ul>
                                  </div>
                                  <!-- End Customer Type -->
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-5 col-md-12 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Details</h5>
                                  <table class="table table-hover">
                                      <tbody>
                                          <tr>
                                              <th scope="row">Kundennummer:</th>
                                              <td>KD<?php echo $ID; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Firma:</th>
                                              <td><?php echo $CustomerCompany; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Endkunde:</th>
                                              <td colspan="2"><?php echo $CustomerTypeName; ?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <br>
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Anschrift</h5>
                                  <table class="table table-hover">
                                      <tbody>
                                          <tr>
                                              <th scope="row">Adresse:</th>
                                              <td><?php echo $CustomerAddress; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">PLZ / Ort:</th>
                                              <td><?php echo $CustomerZip; ?> <?php echo $CustomerLocation; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Land:</th>
                                              <td colspan="2"><?php echo $CustomerCountries; ?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <br>
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Sonstige</h5>
                                  <table class="table table-hover">
                                      <tbody>
                                          <tr>
                                              <th scope="row">Website:</th>
                                              <td><?php echo $CustomerHomepage; ?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-12 mb-4">
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Ansprechpartner</h5>
                                  <table class="table table-hover">
                                      <tbody>
                                          <tr>
                                              <th scope="row">Anrede:</th>
                                              <td><?php echo $CustomerSalutation; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Nachname:</th>
                                              <td><?php echo $CustomerSurname; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Vorname:</th>
                                              <td colspan="2"><?php echo $CustomerFirstname; ?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <br>
                          <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title">Kontakt</h5>
                                  <table class="table table-hover">
                                      <tbody>
                                          <tr>
                                              <th scope="row">Telefon:</th>
                                              <td><?php echo $CustomerPhone; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Fax:</th>
                                              <td><?php echo $CustomerFax; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Mobil:</th>
                                              <td colspan="2"><?php echo $CustomerMobile; ?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">E-Mail:</th>
                                              <td colspan="2"><?php echo $CustomerEmail; ?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Company / Address -->


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
