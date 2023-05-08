<?php
  class Login extends DatabaseController {

    protected function getUser($email, $password) {
      $statement = $this->connect()->prepare("SELECT password FROM member WHERE email = ? OR username = ?;");

      if (!$statement->execute(array($email, $password))) {
        $statement = null;
        header("location: ../index.php?error=stmtfailed");
        die();
      } 
      
      if($statement->rowCount() == 0) {
        $statement = null;
        header("location ../index.php?error=usernotfound");
        die();
      }

      $hashed_password = $statement->fetchAll(PDO::FETCH_ASSOC);
      $check_password = password_verify($password, $hashed_password[0]["password"]);
      $statement = null;
      
      if($check_password == false) {
        $statement = null;
        header("location ../index.php?error=wrongpassword");
        die();
      } else if ($check_password == true) {
        $statement = $this->connect()->prepare("SELECT * FROM member WHERE username = ? OR email = ? AND password = ?;");

        if (!$statement->execute(array($email, $email, $password))) {
          $statement = null;
          header("location: ../index.php?error=stmtfailed");
          die();
        }
        if($statement->rowCount() == 0) {
          $statement = null;
          header("location ../index.php?error=usernotfound");
          die();
        }
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["id"] = $user[0]["id"];
        $_SESSION["email"] = $user[0]["email"];
        $statement = null;
      }

      $statement = null;
    }
  }
?>