<?php
session_start();
require_once ('config/config.inc.php');
$db_link = mysqli_connect (
                MYSQL_HOST,
                MYSQL_BENUTZER,
                MYSQL_KENNWORT,
                MYSQL_DATENBANK
              );

              ini_set('display_errors', 1);
              ini_set('display_startup_errors', 1);
              error_reporting(E_ALL);

    if ( !empty($_POST['login']) ){

      include('lib/function/loginAdmins.php');
      loginAdmins($_POST['AdminsEmail'], $_POST['AdminsPassword'], $db_link);
    }

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Seite 1</title>
    <link rel="stylesheet" href="css/login.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/squery.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  </head>
  <body data-home-page-title="Seite 1" class="u-body"><header class="u-align-left u-clearfix u-header u-header" id="sec-c748"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_8bd8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center-sm u-align-center-xs u-border-10 u-border-palette-1-base u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h3 class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-default u-text-1">Admin Login</h3>
            <div class="u-form u-form-1">
              <form action="admin.php" method="POST" style="padding: 10px" source="email" name="form">
                <div class="u-form-email u-form-group u-form-group-2">
                  <label for="email-a97b" class="u-form-control-hidden u-label">E-Mail</label>
                  <input type="email" placeholder="E-Mail" name="AdminsEmail" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-email u-form-group u-form-group-2">
                  <label for="email-a97b" class="u-form-control-hidden u-label">Passwort</label>
                  <input type="password" placeholder="Passwort" name="AdminsPassword" class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit u-form-group-3">
                  <a href="#" class="u-btn u-btn-submit u-button-style">Login</a>
                  <input type="submit" name="login" class="u-form-control-hidden">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="u-align-left u-clearfix u-footer" id="sec-d7a9"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
  </body>
</html>
