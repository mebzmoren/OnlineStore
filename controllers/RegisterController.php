<?php
  class RegisterController extends Register {
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

    public function registerUser() {
      if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)) {
        header("location: ../index.php?error=missingfields");
        throw new Exception('There are missing fields.');
      } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../index.php?error=emailerror");
        throw new Exception('Please enter a proper email address.');
      } elseif ($this->password != $this->confirmPassword) {
        header("location: ../index.php?error=passwordnotmatch");
        throw new Exception('Password do not match.');
      } elseif (!$this->isUserValid($this->username, $this->email)) {
        header("location: ../index.php?error=userexists");
        throw new Exception('User already exists.');
      } else {
        $this->createUser($this->username, $this->email, $this->password);
      }
    }
  }
?>