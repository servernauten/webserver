<?php
/**
 * simple method to encrypt or decrypt a plain text string
 * initialization vector(IV) has to be the same when encrypting and decrypting
 *
 * @param string $action: can be 'encrypt' or 'decrypt'
 * @param string $string: string to encrypt or decrypt
 *
 * @return string
 */
function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'ServernautenIQ29§4dky!!lso()sYQ';
    $secret_iv = 'Servernauten8uOJKXusjdkqowjxx!%';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}
// Passwort in Klartext
//$plain_txt = "anika1983";

// Passwort verschlüsselt
//$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
//$encrypted_txt = 'anFDTHE5YmE4RCtxTmhrbVVWVkdOdz09';
// Passwort entschlüsselt und wieder in Klartext
//$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);



?>
