<?php
  session_start();
  include 'core/database.php';
  $title = 'Member Register';
  $contentView = 'views/_member-register.php';
  
  if(isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $user_type = $_POST['user_type'];

    $sql_stmt = "SELECT * FROM member WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($result) > 0) {
      $error = 'User already exists';
    } elseif ($password != $confirmPassword) {
      $error = 'Password does not match.';
    } elseif (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      $error = 'Please fill all the necessary fields.';
    } else {
      $insert = "INSERT INTO member(username, email, password, user_type) VALUES('$username', '$email', '$password', '$user_type')";
      mysqli_query($conn, $insert);
      header('location:login.php?success=user_created');
    }
  }

  include('views/master.php');
?>