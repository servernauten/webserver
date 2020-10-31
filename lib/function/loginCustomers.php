<?php
function loginCustomers($CustomersEmail, $CustomersPassword, $db_link){

  $CustomersEmail  =   trim($CustomersEmail);
  $CustomersEmail  =   stripslashes($CustomersEmail);
  $CustomersEmail  =   htmlspecialchars($CustomersEmail);

  $sql = "SELECT * FROM `customers` WHERE `email` = '{$CustomersEmail}'";
  $db_erg = mysqli_query( $db_link, $sql );
  $zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC);


  if (password_verify($CustomersPassword, $zeile['hash'])) {
    header("Location: customers/index.php");
    $_SESSION['CustomersID'] = '0';
    $_SESSION['CustomersID'] = $zeile['id'];
  echo 'password istr richtig';
    exit;

  }else{
    header("Location: index.php");
    exit;
  }

}
?>
