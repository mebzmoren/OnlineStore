<?php
  function validateFields($username, $email, $password, $confirmPassword) {
    $result = true;
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      $result = false;
    }
    return $result;

  }
  function doesUserExist($conn, $username, $email) {
    $my_sql = "SELECT * FROM member WHERE id = ? OR username = ? OR email = ?";
    $connection = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($connection, $my_sql)) {
      header("location ../signup.php?error=connection_error");
      die();
    }

    mysqli_stmt_bind_param($connection, "ss", $username, $email);
    mysqli_stmt_execute($connection);

    $resultData = mysqli_stmt_get_result($connection);

    if($rowData = mysqli_fetch_assoc($resultData)) {
      return $rowData;
    } else {
      return false;
    }
  
    mysqli_stmt_close($connection);
  }

  function isEmailValid($email) {
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    }
    return $result;
  }

  function doesPasswordMatch($password, $confirmPassword) {
    $result = true;
    if($password != $confirmPassword) {
      return false;
    }
    return $result;
  }
?>