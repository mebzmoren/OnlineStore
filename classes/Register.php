<?php
  class Register extends DatabaseController {

    protected function createUser(string $username, string $email, string $password) {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $statement = $this->connect()->prepare("INSERT INTO member (username, email, password) VALUES (?, ?, ?);");

        if (!$statement->execute([$username, $email, $hash_password])) {
            throw new Exception('Failed to create user');
        } 

        $statement = null;
    }

    protected function isUserValid(string $username, string $email): bool {
        $statement = $this->connect()->prepare("SELECT id FROM member WHERE id = ? OR email = ?;");

        if (!$statement->execute([$username, $email])) {
            throw new Exception('Failed to validate user');
        } 

        return $statement->rowCount() == 0;
    }
  }
?>