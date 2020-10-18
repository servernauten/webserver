<?php
session_start();
# ################################### #
# ##  servernauten - Webinterface  ## #
# ##  Author: Sebastian Wulf       ## #
# ##  www.servernauten.de          ## #
# ################################### #

if ( $_SESSION['AdminID'] != "" ){

  @require_once ('../config/config.inc.php');
  $db_link = mysqli_connect (
                       MYSQL_HOST,
                       MYSQL_BENUTZER,
                       MYSQL_KENNWORT,
                       MYSQL_DATENBANK
                      );
echo '
      <form>
        Servername: <input type="name" name="nameMasterServer" /><br>
        Server IP: <input type="name" name="ipMasterServer" /><br>
        FTP Port: <input type="number" name="ftpportMasterServer" /><br>
        SSH2 Port: <input type="number" name="sshportMasterServer" /><br>
        SSH2 Name: <input type="name" name="sshnameMasterServer" /><br>
        SSH2 Passwort: <input type="text" name="sshpwMasterServer" /><br>
      </form>
     ';

}else{
  header("Location: ../admin.php");
  exit;
}
?>
