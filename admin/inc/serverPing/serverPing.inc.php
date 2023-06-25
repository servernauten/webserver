<?php

function serverPing($host){
exec("ping -c 2 " . $host, $output, $result);

if ($result == 0){
  echo '<div class="alert alert-success" role="alert">';
  echo ''.$host.' Ping successful!';
  echo '</div>';
  }
  else{
  echo '<div class="alert alert-danger" role="alert">';
  echo ''.$host.' Ping unsuccessful!';
  echo '</div>';
  }
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
