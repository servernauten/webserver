<?php
if( $createMasterServer == '1' ){

  $anyIdentifier              = inputCheck($_POST['anyIdentifier']);
  $reseller                   = inputCheck($_POST['reseller']);
  $serverActive               = inputCheck($_POST['serverActive']);
  $ssh2IP                     = inputCheck($_POST['ssh2IP']);
  $ftpPort                    = inputCheck($_POST['ftp']);
  if($ftpPort == ""){$ftpPort = '21';}
  $ssh2Port                   = inputCheck($_POST['ssh2Port']);
  if($ssh2Port == ""){$ssh2Port = '22';}
  $ssh2Username               = inputCheck($_POST['ssh2Username']);
  $ssh2Password               = inputCheck($_POST['ssh2Password']);
  $ssh2Password               = passwordHash($ssh2Password,'aes-128-gcm','ServernautenIQ29§4dky!!lso()sYQ');
  $operatingSystem            = inputCheck($_POST['operatingSystem']);
  $core                       = inputCheck($_POST['core']);
  $ram                        = inputCheck($_POST['ram']);
  $description                = inputCheck($_POST['description']);
  $maximumSlots               = inputCheck($_POST['maximumSlots']);
  $maximumServer              = inputCheck($_POST['maximumServer']);
  $MasterServerTokenFirst     = openssl_random_pseudo_bytes(128); // Erstellt einen Random Token
  $MasterServerToken          = bin2hex($MasterServerTokenFirst); // Speichert den Token in $token

  $sql = "SELECT COUNT(*) AS FormCheck FROM customers WHERE `customerToken`='{$MasterServerToken}'";
  foreach ($pdo->query($sql) as $row) {
     $FormCheck  = $row['FormCheck'];
  }
  if( $FormCheck < '1' ){
    $statement = $pdo->prepare("INSERT INTO `server_MasterServer`(`id`, `anyIdentifier`, `reseller`, `serverActive`, `ssh2IP`, `ftpPort`, `ssh2Port`, `ssh2Username`, `ssh2Password`, `operatingSystem`, `core`, `ram`, `description`, `maximumSlots`, `maximumServer`, `MasterServerToken`)
                                VALUES ( :id, :anyIdentifier, :reseller, :serverActive, :ssh2IP, :ftpPort, :ssh2Port, :ssh2Username, :ssh2Password, :operatingSystem, :core, :ram, :description, :maximumSlots, :maximumServer, :MasterServerToken)");
    $statement->execute(array('id' => NULL, 'anyIdentifier' => $anyIdentifier, 'reseller' => $reseller, 'serverActive' => $serverActive, 'ssh2IP' => $ssh2IP, 'ftpPort' => $ftpPort, 'ssh2Port' => $ssh2Port, 'ssh2Username' => $ssh2Username, 'ssh2Password' => $ssh2Password, 'operatingSystem' => $operatingSystem, 'core' => $core, 'ram' => $ram, 'description' => $description, 'maximumSlots' => $maximumSlots, 'maximumServer' => $maximumServer, 'MasterServerToken' => $MasterServerToken));

    if($MasterServerToken != ""){
      header("Location: overviewMasterServer.php?MasterServerID=$MasterServerToken");
      exit;
    }
  }
}
?>
