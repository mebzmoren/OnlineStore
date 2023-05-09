<?php
  session_start();
  include 'core/database.php';
  
  if(isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    $sql_stmt = "SELECT * FROM seller WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($result) > 0) {
      $error = 'User already exists';
    } elseif ($password != $confirmPassword) {
      $error = 'Password does not match.';
    } elseif (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      $error = 'Please fill all the necessary fields.';
    } else {
      $insert = "INSERT INTO seller(username, email, password) VALUES('$username', '$email', '$password')";
      mysqli_query($conn, $insert);
      header('location:seller-login.php?success=user_created');
    }
  }
  $title = 'Seller Register';
  $contentView = 'views/_seller-register.php';

  include('views/master.php');
?>