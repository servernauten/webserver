<?php
session_start();
# ################################### #
# ##  servernauten - Webinterface  ## #
# ##  Author: Sebastian Wulf       ## #
# ##  www.servernauten.de          ## #
# ################################### #

if ( $_SESSION['CustomersID'] != "" ){

  @require_once ('../config/config.inc.php');
  $db_link = mysqli_connect (
                       MYSQL_HOST,
                       MYSQL_BENUTZER,
                       MYSQL_KENNWORT,
                       MYSQL_DATENBANK
                      );

}else{
  header("Location: ../index.php");
  exit;
}
?>
