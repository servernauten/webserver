<?php
function serverCommands($serverIP,$serverUser,$serverPassword,$serverPort,$serverCommand){
  $connection = ssh2_connect($serverIP, $serverPort);

  if (ssh2_auth_password($connection, $serverUser, $serverPassword)) {

   ssh2_exec($connection, 'sudo -S <<< '.$serverPassword.' '.$serverCommand.'');
  } else {
    die('Authentication Failed...');
  }

}
//serverCommands('10.211.55.14','sebastian','anika1983','22','init 6');
?>
