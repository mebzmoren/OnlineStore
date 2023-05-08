<?php
  if(isset($_POST["submit"])) {
    // Grab member data variables
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Initialize Controller Class
    include "../Database.php";
    include "../classes/Register.php";
    include "../controllers/RegisterController.php";

    $register = new RegisterController($username, $email, $password, $confirmPassword);

    // Error Handling
    $register->registerUser();

    // Redirect to FrontEnd Page
    header("location: ../index.php?success=usercreated");
  }
?>