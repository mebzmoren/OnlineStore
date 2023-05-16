<?php
session_start();
include 'core/database.php';
include_once 'core/functions.php';

if (isset($_POST['buy-product'])) {
  $member_id = $_SESSION['member_id'];
  $product_id = $_POST['id'];
  $product_name = $_POST['product_name'];
  $product_image = $_POST['product_image'];
  $quantity_bought = $_POST['quantity_bought'];
  $size = $_POST['sizes'];
  $color = $_POST['colors'];
  $total = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone_number = $_POST['phone_number'];
  $payment_type = $_POST['payment_type'];
  $payment_optional = $_POST['payment_optional'];
  // echo '<script>alert("CHECK: ' . $payment_optional . '")</script>';
  // die();

  $res = getProductById('product', $product_id);
  $check = mysqli_fetch_assoc($res);
  $product_quantity = $check['quantity'];

  if ($check['quantity'] >= $quantity_bought) {
    $new_quantity = $check['quantity'] - $quantity_bought;
    $update = "UPDATE product SET quantity='$new_quantity' WHERE id='$product_id'";
    mysqli_query($conn, $update);

    if (isset($payment_optional)) {
      if (empty($member_id)) {
        $error = 'You need to login to buy products.';
        header('location: ' . $_SERVER['REQUEST_URI']);
      } elseif (empty($address) || empty($city) || empty($phone_number) || empty($payment_optional) || empty($quantity_bought)) {
        $error = 'Please fill the required fields.';
        header('location: ' . $_SERVER['REQUEST_URI']);
      } else {
        $total *= $quantity_bought;
        $insert = "INSERT INTO bill(member_id, product_id, product_name, image, quantity_bought, size, color, total, address, city, phone_number, payment_type) VALUES('$member_id','$product_id', '$product_name', '$product_image','$quantity_bought', '$size', '$color', '$total', '$address', '$city', '$phone_number', '$payment_optional')";
        mysqli_query($conn, $insert);
        header('location: ' . $_SERVER['REQUEST_URI']);
      }
      die();
    }

    if (isset($payment_type)) {
      if (empty($member_id)) {
        $error = 'You need to login to buy products.';
        header('location: ' . $_SERVER['REQUEST_URI']);
      } elseif (empty($address) || empty($city) || empty($phone_number) || empty($payment_type) || empty($quantity_bought)) {
        $error = 'Please fill the required fields.';
        header('location: ' . $_SERVER['REQUEST_URI']);
      } else {
        $total *= $quantity_bought;
        $insert = "INSERT INTO bill(member_id, product_id, product_name, image, quantity_bought, size, color, total, address, city, phone_number, payment_type) VALUES('$member_id','$product_id', '$product_name', '$product_image','$quantity_bought', '$size', '$color', '$total', '$address', '$city', '$phone_number', '$payment_type')";
        mysqli_query($conn, $insert);
        header('location: ' . $_SERVER['REQUEST_URI']);
      }
    }
  } else {
    $error = 'You exceeded the amount of quantity chosen.';
  }
}

if (isset($_POST['rate-product'])) {
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
