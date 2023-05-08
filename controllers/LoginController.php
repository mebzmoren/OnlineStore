<?php
  class LoginController extends Login {
    private $email;
    private $password;
    
    public function __construct($email, $password) {
      $this->email = $email;
      $this->password = $password;
    }

    public function loginUser() {
      if(empty($this->email) || empty ($this->password)) {
        header("location: ../index.php?error=missingfields");
        throw new Exception('There are missing fields.');
      } else {
        $this->getUser($this->email, $this->password);
      }
    }
  }
?>