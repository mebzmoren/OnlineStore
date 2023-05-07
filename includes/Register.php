<?php
  if(isset($_POST["submit"])) {
    // Grab member data variables
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Initialize Controller Class
    include "../includes/Register.php";
    include "../classes/Member.php";

    $Member = new MemberController($username, $email , $password, $confirmPassword);
    // Redirect to FrontEnd Page
  }
?>