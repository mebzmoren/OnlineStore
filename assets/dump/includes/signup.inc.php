<?php
  if(isset($_POST["submit"])) {
    // Grab member data variables
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Initialize Controller Class
    include "../classes/dbh.classes.php";
    include "../classes/signup.class.php";
    include "../classes/signup-contr.class.php";

    $signup = new MemberController($username, $email, $password, $confirmPassword);

    // Error Handling
    $signup->signupUser();

    // Redirect to FrontEnd Page
    header("location: ../index.php?error=none");
  }
?>