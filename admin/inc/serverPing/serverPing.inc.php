<?php

function serverPing($host){
exec("ping -c 2 " . $host, $output, $result);

echo '<div class="alert alert-warning" role="alert">';
if ($result == 0)

echo ''.$host.' Ping successful!';

else

echo ''.$host.' Ping unsuccessful!';

echo '</div>';
}

function serverPingCheckForCommand($host){
exec("ping -c 2 " . $host, $output, $result);

if ($result == 0){

  $PingStatus = '1';
  return $PingStatus;
  }
  else{

  $PingStatus = '0';
  return $PingStatus;
  }
}
?>
