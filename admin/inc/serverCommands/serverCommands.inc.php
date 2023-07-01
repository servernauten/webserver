<?php
// Funktion um Befehler an einen Server zu senden
function serverCommands($serverIP,$serverUser,$serverPassword,$serverPort,$serverCommand){
  // Verbindet sich mit IP und Port an den Server
  $connection = ssh2_connect($serverIP, $serverPort);

  // Wenn verbunden, Abfrage von Username und Passwort
  if (ssh2_auth_password($connection, $serverUser, $serverPassword)) {

   
   ssh2_exec($connection, 'sudo -S <<< '.$serverPassword.' '.$serverCommand.'');
  } else {
    die('Authentication Failed...');
    exit;
  }

}

#serverCommands('192.168.2.125','sebastian','.Anika.1983.','22','init 6');
?>
