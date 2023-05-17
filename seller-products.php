<?php
  session_start();
  include 'core/database.php';
  include_once 'core/functions.php';

  if (isset($_POST['discount-product'])) {
    $product_id = $_POST['item_id'];
    $seller_id = $_SESSION['seller_id'];
    $discount = $_POST['discount'];

    $sql_stmt = "SELECT * FROM discount_product WHERE product_id='$product_id'";
    $res = mysqli_query($conn, $sql_stmt);

    if (mysqli_num_rows($res) > 0) {
      $error = "The discounted product already exists.";
    } elseif (empty($discount)) {
      $error = "Please fill the required fields.";
    } else {
      $insert = "INSERT INTO discount_product(seller_id, product_id, discount) VALUES ('$seller_id','$product_id','$discount')";
      mysqli_query($conn, $insert);
      header('location:seller-products.php?success=discount_created');
    }
  }

  if(isset($_POST['remove-discount'])) {
    $product_id = $_POST['product_id'];
    $seller_id = $_SESSION['seller_id'];

    $delete = "DELETE FROM discount_product WHERE product_id = '$product_id' AND seller_id = '$seller_id'";
    mysqli_query($conn, $delete);
    header('location: ' . $_SERVER['REQUEST_URI']);
  }

  if(isset($_POST['delete-product'])) {
    $product_id = $_POST['product_id'];
    $seller_id = $_SESSION['seller_id'];

    $delete = "DELETE FROM product WHERE id = '$product_id' AND seller_id = '$seller_id'";
    mysqli_query($conn, $delete);
    header('location: ' . $_SERVER['REQUEST_URI']);
  }
  $title = 'Seller Products';
  $contentView = 'views/_seller-products.php';
  include('views/master.php');
?>