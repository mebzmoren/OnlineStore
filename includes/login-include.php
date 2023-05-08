<?php
  if(isset($_POST["submit"])) {
    // Grab member data variables
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Initialize Controller Class
    include "../Database.php";
    include "../classes/Login.php";
    include "../controllers/LoginController.php";

    $login = new LoginController($email, $password);
    
    // Error Handling
    $login->loginUser();
    
    // Redirect to FrontEnd Page
    header("location: ../index.php?success=loggedin");
  }
?>