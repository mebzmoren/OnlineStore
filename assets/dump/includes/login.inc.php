<?php
  if(isset($_POST["submit"])) {
    // Grab member data variables
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Initialize Controller Class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.class.php";

    $login = new LoginController($email, $password);
    
    // Error Handling
    $login->loginUser();
    header("location: ../index.php?error=none");

    // Redirect to FrontEnd Page
  }
?>