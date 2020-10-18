<?php
function loginAdmins($AdminsEmail, $AdminsPassword, $db_link){

  $AdminsEmail  =   trim($AdminsEmail);
  $AdminsEmail  =   stripslashes($AdminsEmail);
  $AdminsEmail  =   htmlspecialchars($AdminsEmail);

  $sql = "SELECT * FROM `admins` WHERE `email` = '{$AdminsEmail}'";
  $db_erg = mysqli_query( $db_link, $sql );
  $zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC);


  if (password_verify($AdminsPassword, $zeile['hash'])) {
    header("Location: admin/index.php");
    $_SESSION['AdminID'] = $zeile['id'];
    exit;

  }else{
    header("Location: admin.php");
    exit;
  }

}
?>
