<?php
    if($AdminLoginCheck == '1'){
      // wird aktiviert sobald das Formular "Submit" gedrückt wurde

      $emailCheck   =   inputCheck($_POST['email']); // Prüft den Inhalt des Input auf einen Angriff

      $sql = "SELECT (SELECT COUNT(`email`) AS MailCheck FROM `admins` WHERE `email` = '{$emailCheck}' ) as MailCheck"; // Wenn die Email vorhanden ist wird 1 ausgegeben
      foreach ($pdo->query($sql) as $row) {

          if ( $row['MailCheck'] == '1' ){ // Ist die E-Mail vorhanden dann weiter ....

            $sql = "SELECT * FROM `admins` WHERE `email` = '{$emailCheck}'"; // Datenbank Abfrage über die E-Mail Addresse
            foreach ($pdo->query($sql) as $row) {
              if(password_verify($_POST['password'], $row['password']) ){ // Wenn der Hash im Passwort stimmt dann weiter ...

                $_SESSION['admin_id'] = $row['id']; // Schreiben der Admin ID Session
                $_SESSION['AdminSessionTrue'] = '1'; // Schreiben der Admin True Session

              }
              if($_SESSION['AdminSessionTrue'] == '1'){ // Wenn Session True gleich 1 dann weiter ..
                header("Location: admin/index.php"); // Weiterleitung zur Admin Seite
                exit; // Beendet alle Codes die ab hier noch kommen 
              }
            }
        }else{
          $errorLogin = '<div class="rounded-md px-5 py-4 mb-2 bg-theme-12 text-white">Kundenkonto nicht vorhanden oder freigeschaltet!</div>';
        }
      }
    }
?>
