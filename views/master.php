<?php
include_once 'core/functions.php';

if (isset($_SESSION['seller_id'])) {
  $seller_id = $_SESSION['seller_id'];
}

if (isset($_GET['category'])) {
  $category_id = $_GET['category'];
}

if (isset($_GET['product'])) {
  $product_name = $_GET['product'];
  $table_data = getProdByName('product', $product_name);
  $product = mysqli_fetch_array($table_data);
}


// echo '<script>alert("CHECK: ' . $product .'")</script>';
// echo '<script>alert("CHECK: ' . $category_id .'")</script>';
// echo '<script>alert("CHECK: ' . $seller_id .'")</script>';
// echo '<script>alert("CHECK: ' . $product_name .'")</script>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="styles.css" type="text/css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/84e2199ce0.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php include('views/inc/header.php') ?>
  <?php include('views/inc/modals.php') ?>
  <?php include($contentView) ?>
  <?php include('views/inc/footer.php') ?>

  <!-- JS Link -->
  <script src="assets/javascript/main.js"></script>
  <script src="assets/javascript/shop.js"></script>
  <script src="assets/javascript/products.js"></script>
  <script src="assets/javascript/selector.js"></script>
  <script src="assets/javascript/seller.js"></script>
  <!-- <script src="assets/javascript/click.js"></script> -->
</body>

</html>