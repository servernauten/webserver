<?php
if( $createCustomer == '1' ){
  $clientType             = inputCheck($_POST['clientType']);
  $company                = inputCheck($_POST['company']);
  $address                = inputCheck($_POST['address']);
  $zip                    = inputCheck($_POST['zip']);
  $location               = inputCheck($_POST['location']);
  $country                = inputCheck($_POST['country']);
  $salutation             = inputCheck($_POST['salutation']);
  if($salutation != '1'){$salutation = '0';}
  $firstname              = inputCheck($_POST['firstname']);
  $surname                = inputCheck($_POST['surname']);
  $mobile                 = inputCheck($_POST['mobile']);
  $phone                  = inputCheck($_POST['phone']);
  $fax                    = inputCheck($_POST['fax']);
  $mail                   = inputCheck($_POST['mail']);
  $homepage               = inputCheck($_POST['homepage']);
  $loginActive            = inputCheck($_POST['loginActive']);
  if($loginActive != '1'){$loginActive = '0';}
  $newsletter             = inputCheck($_POST['newsletter']);
  if($newsletter != '1'){$newsletter = '0';}
  $customerTokenFirst     = openssl_random_pseudo_bytes(128); // Erstellt einen Random Token
  $customerToken          = bin2hex($customerTokenFirst); // Speichert den Token in $token

  $statement = $pdo->prepare("INSERT INTO `customers`(`id`, `salutation_id`, `customerType_id`, `email`, `company`, `address`, `zip`, `location`, `country_code`, `firstname`, `surname`, `mobile`, `phone`, `fax`, `mail`, `homepage`, `loginActive`, `newsletter`, `customerToken`, `hash`)
                              VALUES ( :customerID, :salutation_id, :customerType_id, :email, :company, :address, :zip, :location, :country_code, :firstname, :surname, :mobile, :phone, :fax, :mail, :homepage, :loginActive, :newsletter, :customerToken, :hash)");
  $statement->execute(array('customerID' => NULL, 'salutation_id' => $salutation, 'customerType_id' => $clientType, 'email' => $mail, 'company' => $company, 'address' => $address, 'zip' => $zip, 'location' => $location, 'country_code' => $country, 'firstname' => $firstname, 'surname' => $surname, 'mobile' => $mobile, 'phone' => $phone, 'fax' => $fax, 'mail' => $mail, 'homepage' => $homepage, 'loginActive' => $loginActive, 'newsletter' => $newsletter, 'customerToken' => $customerToken, 'hash' => NULL));

  if($customerToken != '0'){
    header("Location: overviewCustomer.php?CustomerID=$customerToken");
  }
}
?>





<?php

@include('../inc/inputCheck/inputCheck.inc.php');
@include('../inc/config.inc.php'); // Include von Variable der Datenbankverbindung
// Datenbank Verbindung wird hergestellt
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');



if( !empty($_POST['submitCreateCustomer']) ){
$$createCustomer = '1';
@include('inc/createCustomer/createCustomer.inc.php');
}
?>
<form method="POST" action="createCustomer.php">
  clientType
  <select name="clientType">
    <option value="1">Firmenkunde</option>
    <option value="2">Privatkunde</option>
</select>
<br>
company
<input type="text" name="company" />
<br>
address
<input type="text" name="address" />
<br>
zip
<input type="text" name="zip" />
<br>
location
<input type="text" name="location" />
<br>
country
<input type="text" name="country" />
<br>
salutation
  <select name="salutation">
    <option value="1">Herr</option>
    <option value="2">Frau</option>
  </select>
<br>
firstname
<input type="text" name="firstname" />
<br>
surname
<input type="text" name="surname" />
<br>
mobile
<input type="text" name="mobile" />
<br>
phone
<input type="text" name="phone" />
<br>
fax
<input type="text" name="fax" />
<br>
mail
<input type="text" name="mail" />
<br>
homepage
<input type="text" name="homepage" />
<br>
loginActive
<input type="checkbox" name="loginActive" value="1">
<br>
newsletter
<input type="checkbox" name="newsletter" value="1">
<br>
<input type="submit" name="submitCreateCustomer" value="Create Customer" />
</form>
