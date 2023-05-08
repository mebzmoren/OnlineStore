<?php
  class MemberController extends Member {
    private $username;
    private $email; 
    private $password;
    private $confirmPassword;
    
    public function __construct($username, $email, $password, $confirmPassword) {
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
      $this->confirmPassword = $confirmPassword;
    }

    public function signupUser() {
      if($this->vadlidateInputs() == false) {
        // Empty inputs
        header("location ../index.php?error=emptyinput");
        die();
      }
      if ($this->validateEmail() == false) {
        // Invalid Email
        header("location ../index.php?error=email");
        die();
      }
      if ($this->validatePassword() == false) {
        // Password don't match
        header("location ../index.php?error=email");
        die();
      }
      if ($this->userCheck() == false) {
        // User or Email Taken
        header("location ../index.php?error=useroremailtaken");
        die();
      }
      $this->setUser($this->username, $this->email, $this->password);
    }

    private function vadlidateInputs() {
      $result = true;
      if(empty($this->username) || empty($this->email) || empty($this->password) || empty ($this->confirmPassword)) {
        $result = false;
      }
      return $result;
    }

    private function validateEmail() {
      $result = true;
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
      }
      return $result;
    }

    private function validatePassword() {
      $result = true;
      if($this->password != $this->confirmPassword) {
        $result= false;
      }
      return $result;
    }

    private function userCheck() {
      $result = true;
      if(!$this->validateUser($this->username, $this->email)) {
        $result= false;
      }
      return $result;
    }
  }
?>