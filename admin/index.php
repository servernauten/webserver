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

  $sql = "SELECT * FROM `admins` WHERE `id` = '{$_SESSION['AdminID']}'";
  $db_erg = mysqli_query( $db_link, $sql );
  $zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC);

  echo $zeile['id'];


}else{
  header("Location: ../admin.php");
  exit;
}
?>
