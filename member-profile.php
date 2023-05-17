<?php
  session_start();
  include 'core/database.php';
  include_once 'core/functions.php';

  if (isset($_POST['unlike-product'])) {
    $member_id = $_SESSION['member_id'];
    $product_id = $_POST['product_id'];
  
    $result = getProdByMemberId('liked_product', $member_id);
    $count = mysqli_num_rows($result);
    // echo '<script>alert("CHECK: ' . $product_name .'")</script>';
  
    if (empty($member_id)) {
      $error = "Please log in first as a member";
      header('location: member-login.php?error=not_logged_in');
    } else {
      $delete = "DELETE FROM liked_product WHERE member_id = '$member_id' AND product_id = '$product_id'";
      mysqli_query($conn, $delete);
      header('location: ' . $_SERVER['REQUEST_URI']);
    }
  }
  
  $title = 'Member Profile';
  $contentView = 'views/_member-profile.php';
  include('views/master.php');
?>