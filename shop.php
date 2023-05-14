<?php
session_start();
include 'core/database.php';
$title = 'Shop';
$contentView = 'views/_shop.php';
include('views/master.php');

foreach($products as $item) {
  if (isset($_POST['like-product-' . $item['id']])) {
    $member_id = $_SESSION['member_id'];
    $product_id = $item['id'];
  
    $result = getProdByMemberId('liked_product', $member_id);
    $count = mysqli_num_rows($result);
    // echo '<script>alert("CHECK: ' . $product_name .'")</script>';
  
    if ($count > 0) {
      $delete = "DELETE FROM liked_product WHERE member_id = '$member_id' AND product_id = '$product_id'";
      mysqli_query($conn, $delete);
      header('location: ' . $_SERVER['REQUEST_URI']);
    } else {
      if (empty($member_id)) {
        $error = "Please log in first as a member";
        header('location: member-login.php?error=not_logged_in');
      } else {
        $insert = "INSERT INTO liked_product(member_id, product_id) VALUES ('$member_id', '$product_id')";
        mysqli_query($conn, $insert);
        header('location: ' . $_SERVER['REQUEST_URI']);
      }
    }
  }
}