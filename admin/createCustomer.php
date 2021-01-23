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

      $sql = "SELECT * FROM `admins` WHERE `id` = '{$_SESSION['admin_id']}'";
      foreach ($pdo->query($sql) as $row) {
         $adminFirstname  = $row['firstname'];
         $adminSurname    = $row['surname'];

      }
      if (!empty($_POST['submitCreateCustomer']) ){
        $createCustomer = '1';
        include('../inc/inputCheck/inputCheck.inc.php');
        include('inc/createCustomer/createCustomer.inc.php');
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
      <form method="POST" action="createCustomer.php">
        <div class="container-fluid ">
          <div class="row">
              <div class="col-12">

                  <h1>Create Customer</h1>
                  <div class="separator mb-5"></div>
              </div>
          </div>

            <div class="row">

                <div class="col-12">
                  <!-- Start Company / Address -->
                  <div class="row">
                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="mb-4">Company</h5>
                                  <!-- Start Customer Type -->
                                  <div class="form-group mb-3">
                                      <label>Customer Type</label>
                                      <select name="clientType" class="form-control select2-single" data-width="100%">
                                              <option value="1">Firmenkunde</option>
                                              <option value="2">Privatkunde</option>
                                      </select>
                                  </div>
                                  <!-- End Customer Type -->
                                  <!-- Start Company -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Company</label>
                                      <input name="company" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <!-- End Company -->
                              </div>
                          </div>
                      </div>

                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="mb-4">Address</h5>
                                  <!-- Start Address -->
                                  <div class="form-group mb-3">
                                      <label for="Address">Address</label>
                                      <textarea name="address" type="text" class="form-control" aria-label="With textarea"></textarea>
                                  </div>
                                  <!-- End Address -->
                                  <!-- Start Zip / Location -->
                                  <div class="form-group mb-3">
                                      <label for="Zip / Location">Zip / Location</label>
                                      <div class="input-group">
                                        <input name="zip" type="text" class="form-control"
                                            aria-describedby="basic-addon1" placeholder="zip">
                                          <span class="input-group-addon"></span>
                                          <input name="location" type="text" class="form-control"
                                              aria-describedby="basic-addon1" placeholder="location">
                                      </div>
                                  </div>
                                  <!-- End Zip / Location -->
                                  <!-- Start Country Type -->
                                  <div class="form-group mb-3">
                                      <label>Country</label>
                                      <select name="country" class="form-control select2-single" data-width="100%">

                                              <option value="DE">Deutschland</option>
                                              <option value="US">USA</option>
                                      </select>
                                  </div>
                                  <!-- End Country Type -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Company / Address -->

                  <!-- Start Contact Person -->
                  <div class="row">
                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="mb-4">Contact Person</h5>
                                  <!-- Start Salutation -->
                                  <div class="form-group mb-3">
                                      <label>Salutation</label>
                                      <select name="salutation" class="form-control select2-single" data-width="100%">
                                              <option value="1">Herr</option>
                                              <option value="2">Frau</option>
                                      </select>
                                  </div>
                                  <!-- End Salutation -->
                                  <!-- Start Firstname -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Firstname</label>
                                      <input name="firstname" type="text" class="form-control"
                                          aria-describedby="basic-addon1" required>
                                  </div>
                                  <!-- End Firstname -->
                                  <!-- Start Surname -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Surname</label>
                                      <input name="surname" type="text" class="form-control"
                                          aria-describedby="basic-addon1" required>
                                  </div>
                                  <!-- End Surname -->
                                  <!-- Start Login Active -->
                                  <div class="form-group row mb-1">
                                      <label class="col-12 col-form-label">Login Activate</label>
                                      <div class="col-12">
                                          <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                              <input name="loginActive" value="1" class="custom-switch-input" id="switchS1" type="checkbox">
                                              <label class="custom-switch-btn" for="switchS1"></label>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Login Active -->
                                  <!-- Start Newsletter -->
                                  <div class="form-group row mb-1">
                                      <label class="col-12 col-form-label">Newsletter</label>
                                      <div class="col-12">
                                          <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                              <input name="newsletter" value="1" class="custom-switch-input" id="switchS2" type="checkbox">
                                              <label class="custom-switch-btn" for="switchS2"></label>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Newsletter -->
                              </div>
                          </div>

                      </div>
                      <!-- End Contact Person -->
                      <!-- Start Contact Details -->
                      <div class="col-12 col-xl-6 mb-4">
                          <div class="card h-100">
                              <div class="card-body">
                                  <h5 class="mb-4">Contact Details</h5>
                                  <!-- Start Mobile -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Mobile</label>
                                      <input name="mobile" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <!-- End Mobile -->
                                  <!-- Start Phone -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Phone</label>
                                      <input name="phone" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <!-- End Phone -->
                                  <!-- Start Fax -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Fax</label>
                                      <input name="fax" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <!-- End Fax -->
                                  <!-- Start Mail -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Mail</label>
                                      <input name="mail" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <!-- End Mail -->
                                  <!-- Start Homepage -->
                                  <div class="form-group mb-3">
                                      <label for="Company">Homepage</label>
                                      <input name="homepage" type="text" class="form-control"
                                          aria-describedby="basic-addon1">
                                  </div>
                                  <input name="submitCreateCustomer" type="submit" class="btn btn-primary d-block mt-3" value="Create Customer"></input>
                                  <!-- End Homepage -->
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
