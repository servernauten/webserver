<?php

function serverCommands($serverIP,$serverSSHPort,$serverUser,$ServerPW){

  // ab hier wenn m�glich nichts mehr veraendern
  if($ssh = ssh2_connect($serverIP, $serverSSHPort )) {
          if(ssh2_auth_password($ssh, $serverUser, $ServerPW)) {
                  $stream = ssh2_exec($ssh, $command);
                  stream_set_blocking($stream, true);
                  $data = '';
                  while($buffer = fread($stream, 4096)) {
                          $data .= $buffer;
                  }
                  fclose($stream);
                  print $data;
           }else {
                   echo "Fehler: Es konnte keine Verbindung zum ausgew&auml;hlten Server hergestellt werden. Benutzername oder Passwort falsch.";
           }
  }else {
                   echo "Fehler: Es konnte keine Verbindung zum ausgew&auml;hlten Server hergestellt werden. Server-IP oder SSH Port falsch.";
  }

}
serverCommands('88.99.83.173','22','root','IbgiN.1983idO','reboot now');
?>
