<?php
session_start();

  @include('inc/inputCheck/inputCheck.inc.php'); // Include des InputCheck
  @include('inc/config.inc.php'); // Include von Variable der Datenbankverbindung
  // Datenbank Verbindung wird hergestellt
  $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');
  // Wenn auf Submit Login geklickt wird
  if ( !empty($_POST['login']) ){
  // Speichern des Admin Login Check auf 1
  $AdminLoginCheck = '1';
  // Überprüfen ob Login richtig ist
  @include('inc/login/login.inc.php');
  }
// Ausgabe wenn E-Mail oder Passwort falsch
echo $errorLogin;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="css/dore.light.bluenavy.css" />
</head>

<body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>

                            <p class="white mb-0">
                                Please use your credentials to login.
                                <br>If you are not a member, please
                                <a href="#" class="white">register</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <h6 class="mb-4">Login</h6>
                            <form method="POST" action="admin.php">
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="text" name="email" />
                                    <span>E-mail</span>
                                </label>

                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" name="password" placeholder="" />
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#">Forget password?</a>
                                    <input class="btn btn-primary btn-lg btn-shadow" type="submit" name="login" value="Login"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.single.theme.js"></script>
</body>

</html>
