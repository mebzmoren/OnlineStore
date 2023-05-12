<?php
session_start();
include 'core/database.php';

if (isset($_POST['buy-product'])) {
  $member_id = $_SESSION['member_id'];
  $product_id = $_POST['id'];
  $quantity_bought = 1;
  $size = $_POST['sizes'];
  $color = $_POST['colors'];
  $total = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone_number = $_POST['phone_number'];
  $payment_type = $_POST['payment_type'];
  // echo '<script>alert("CHECK: ' . $member_id. ' ' . $product_id. ' ' . $quantity_bought. ' ' . $size. ' ' . $color. ' ' . $total. ' ' . $address. ' ' . $city. ' ' . $phone_number. $payment_type. '")</script>';
  die();

  if (empty($member_id) || empty($product) || empty($quantity_bought) || empty($size) || empty($size) || empty($color) || empty($total) || empty($address) || empty($address) || empty($city) || empty($phone_number) || empty($payment_type)) {
    $error = 'Please fill the required fields.';
  } else {
    $insert = "INSERT INTO bill(member_id, product_id, quantity_bought, size, color, total, address, city, phone_number, payment_type) VALUES('$member_id','$product_id', '$quantity_bought', '$size', '$color', '$total', '$address', '$city', '$phone_number', '$payment_type')";
    mysqli_query($conn, $insert);
    header('location:view-product.php?success='. $product_id);
  }
} else {
  echo 'Data not inserted into database';
}

$title = 'View Products';
$contentView = 'views/_view-products.php';
include('views/master.php');
