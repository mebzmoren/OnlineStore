<?php
  $title = 'Login';
  $contentView = 'views/_login.php';

  include 'core/database.php';
  
  if(isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $sql_stmt = "SELECT * FROM member WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $sql_stmt);

    if(mysqli_num_rows($result) > 0) {
      
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'member') {
        $_SESSION['member_name'] = $row['username'];
        header('location:shop.php');
      } elseif ($row['user_type' == 'seller']) {
        $_SESSION['seller_name'] == $row['username'];
        header('location:add-product.php');
      }

    } else {
      $error = 'Incorrect user credentials';
    }
  }

  include('views/master.php');
?>