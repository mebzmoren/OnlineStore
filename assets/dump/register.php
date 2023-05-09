<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    include_once '../core/database.php';
    include_once '../core/register-controller.php';

    if(validateFields($username, $email, $password, $confirmPassword)) {
      header("location: ../member-register.php?error=invalid-fields");
      die();
    } 
    
    if(doesUserExist($conn, $username, $email)){
      header("location: ../member-register.php?error=user-exists");
      die();
    } 
    
    if(!isEmailValid($email)) {
      header("location: ../member-register.php?error=email-invalid");
      die();
    } 
    
    if(!doesPasswordMatch($password, $confirmPassword)){
      header("location: ../member-register.php?error=password-does-not-match");
      die();
    } 
    registerUser($conn, $username, $email, $password);
    header("location: ../member-register.php?success=user_created");
  } else {
    header("location: ../member-register?failed=error");
  }
?>