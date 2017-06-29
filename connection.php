<?php

function Connect()
{
  $servername = "172.17.0.1";
  $username = "root";
  $password = "2success";
  $dbname = "Itally";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);
  return $conn;

}
?>
