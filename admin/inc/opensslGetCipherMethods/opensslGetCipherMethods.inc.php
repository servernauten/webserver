<?php

function passwordHash($password,$cipher,$salt){
  if (in_array($cipher, openssl_get_cipher_methods()))
  {
      $ivlen = openssl_cipher_iv_length($cipher);
      $iv = openssl_random_pseudo_bytes($ivlen);

      // Hash aus DB
      $hashPassword = openssl_encrypt($password, $cipher, $salt, $options=0, $iv, $tag);
      //store $cipher, $iv, and $tag for decryption later
      $original_password = openssl_decrypt($hashPassword, $cipher, $salt, $options=0, $iv, $tag);



  }
  return $hashPassword;
}

function passwordPlain($password,$cipher,$salt){
  if (in_array($cipher, openssl_get_cipher_methods()))
  {
      $ivlen = openssl_cipher_iv_length($cipher);
      $iv = openssl_random_pseudo_bytes($ivlen);

      // Hash aus DB
      $hashPassword = openssl_encrypt($password, $cipher, $salt, $options=0, $iv, $tag);
      //store $cipher, $iv, and $tag for decryption later
      $original_password = openssl_decrypt($hashPassword, $cipher, $salt, $options=0, $iv, $tag);



  }
  return $original_password;
}

// passwordHash('anika1dsffgdfgdfg983','aes-128-gcm','ServernautenIQ29§4dky!!lso()sYQ');
// passwordPlain('anika1dsffgdfgdfg983','aes-128-gcm','ServernautenIQ29§4dky!!lso()sYQ');

/* $connection = ssh2_connect('192.168.2.128', 22);

if (ssh2_auth_password($connection, 'sebastian', $original_password)) {
  echo "Authentication Successful!\n";
} else {
  die('Authentication Failed...');
} */

//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes

?>
