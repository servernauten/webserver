<?php
include('inc/config.inc.php');

$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$dbuser .'', ''.$password.'');

$sql = "SELECT * FROM `admins`";
foreach ($pdo->query($sql) as $row) {
   echo $row['id'];
}



?>
