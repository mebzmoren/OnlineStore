<?php
  session_start();
  include 'core/database.php';

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
  $title = 'Seller Products';
  $contentView = 'views/_seller-products.php';
  include('views/master.php');
?>