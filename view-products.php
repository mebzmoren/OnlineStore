<?php
session_start();
include 'core/database.php';

if (isset($_POST['buy-product'])) {
  $member_id = $_SESSION['member_id'];
  $product_id = $_POST['id'];
  $product_name = $_POST['product_name'];
  $product_image = $_POST['product_image'];
  $quantity_bought = 1;
  $size = $_POST['sizes'];
  $color = $_POST['colors'];
  $total = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone_number = $_POST['phone_number'];
  $payment_type = $_POST['payment_type'];

  if (empty($member_id)) {
    $error = 'You need to login to buy products.';
  } elseif (empty($address) || empty($city) || empty($phone_number) || empty($payment_type)) {
    $error = 'Please fill the required fields.';
  } else {
    $insert = "INSERT INTO bill(member_id, product_id, product_name, image, quantity_bought, size, color, total, address, city, phone_number, payment_type) VALUES('$member_id','$product_id', '$product_name', '$product_image','$quantity_bought', '$size', '$color', '$total', '$address', '$city', '$phone_number', '$payment_type')";
    mysqli_query($conn, $insert);
    header('location: ' . $_SERVER['REQUEST_URI']);
  }
} elseif (isset($_POST['rate-product'])) {
  $member_id = $_SESSION['member_id'];
  $member_name = $_SESSION['member_name'];
  $product_id = $_POST['product_id'];
  $rating = $_POST['rating'];
  $review_title = $_POST['review_title'];
  $review_message = $_POST['review_message'];

  if (empty($member_id)) {
    $error = 'You need to login in order to rate products.';
  } elseif (empty($rating) || empty($review_title) || empty($review_message)) {
    $error = 'Please fill the required fields.';
  } else {
    $insert = "INSERT INTO review(member_id, member_name, product_id, rating, review_title, review_message) VALUES('$member_id','$member_name','$product_id', '$rating', '$review_title', '$review_message')";
    mysqli_query($conn, $insert);
    header('location: ' . $_SERVER['REQUEST_URI']);
  }
}

$title = 'View Products';
$contentView = 'views/_view-products.php';
include('views/master.php');
