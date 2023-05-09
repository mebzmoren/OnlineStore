<?php 
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "online_store";

  $conn = mysqli_connect($host, $username, $password, $dbname);

  if(!$conn) {
    die("Connection error: " . mysqli_connect_error());
  }
?>