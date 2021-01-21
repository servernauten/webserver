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
