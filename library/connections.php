<?php
function acmeConnect(){
 $server = 'localhost';
 $dbname= 'acme';
 $username = 'iClient';
 $password = 'Dado201094';
 $dsn = "mysql:host=$server;dbname=$dbname";
 $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

 // Create the actual connection object and assign it to a variable
 try {
  $link = new PDO($dsnd, $username, $password, $options);

  return $link;
 } catch(PDOException $e) {
  header('Location: ../view/500.php');
  exit;
 }



}
  acmeConnect();
 ?>
