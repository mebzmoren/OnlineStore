<?php
  class Member extends DatabaseController {

    protected function setUser($username, $email, $password) {
      $statement = $this->connect()->prepare("INSERT INTO member (username, email, password) VALUES (?, ?, ?);");

      $hash_password = password_hash($password, PASSWORD_DEFAULT);

      if (!$statement->execute(array($username, $email, $hash_password))) {
        $statement = null;
        header("location: ../index.php?error=stmtfailed");
        die();
      } 
      
      $statement = null;
    }

    protected function validateUser($username, $email) {
      $statement = $this->connect()->prepare("SELECT id FROM member WHERE id = ? OR email = ?;");

      if (!$statement->execute(array($username, $email))) {
        $statement = null;
        header("location: ../index.php?error=stmtfailed");
        die();
      } 
      
      $result = true;
      if ($statement->rowCount() > 0) {
        $result = false;
      }

      return $result;
    }
  }
?>