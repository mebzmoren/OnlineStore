<?php
  class MemberController {
    private $username;
    private $email;
    private $password;
    private $confirmPassword;
    
    public function construct($username, $email, $password, $confirmPassword) {
      $this->$username = $username;
      $this->$email = $email;
      $this->$password = $password;
      $this->$confirmPassword = $confirmPassword;
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
  }
?>