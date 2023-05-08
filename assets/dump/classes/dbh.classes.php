<?php
  class DatabaseController {
    protected function connect() {
      try {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=online_store', $username, $password);
        return $dbh;
      } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . "<br/>";
        die();
      }
    }

  }
?>