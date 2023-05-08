<?php
  class DatabaseController {
    protected function connect() {
      try {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_store";
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        return $dbh;
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "<br/>";
        die();
      }
    }
  }
?>