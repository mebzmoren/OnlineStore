<?php
  class LoginController extends Login {
    private $email;
    private $password;
    
    public function __construct($email, $password) {
      $this->email = $email;
      $this->password = $password;
    }

    public function loginUser() {
      if($this->vadlidateInputs() == false) {
        // Empty inputs
        header("location ../index.php?error=emptyinput");
        die();
      }
      $this->getUser($this->email, $this->password);
    }

    private function vadlidateInputs() {
      $result = true;
      if(empty($this->email) || empty ($this->password)) {
        $result = false;
      }
      return $result;
    }
  }
?>