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
<form method="POST" action="admin.php">
  <input type="text" name="email" />
  <input type="password" name="password" />
  <input type="submit" name="login" value="Login" />
</form>
