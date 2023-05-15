<?php
session_start();
include 'core/database.php';

if (isset($_POST['submit'])) {
  $seller_id = $_SESSION['seller_id'][0];
  $name = $_POST['name'];
  $image = $_FILES['image'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $category_id = $_POST['category'];
  $colors = $_POST['colors'];
  $sizes = $_POST['sizes'];
  $description = $_POST['description'];

  $fileName = $_FILES['image']['name'];
  $fileTmpName = $_FILES['image']['tmp_name'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'jfif');

  if (in_array($fileActualExt, $allowed)) {
    $fileDestination = "assets/uploads/" . $fileName;
    move_uploaded_file($fileTmpName, $fileDestination);
  } else {
    $error = "You can not upload this type of file.";
  }

  $color_implode = implode(",", $colors);
  $sizes_implode = implode(",", $sizes);

  // echo 'check: '. $image;
  // echo 'check: '. $color_implode;
  // echo 'check: '. $sizes_implode;
  // echo 'check:' . $seller_id;

  $sql_stmt = "SELECT * FROM product WHERE name = '$name'";
  $result = mysqli_query($conn, $sql_stmt);

  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      $error = 'Item already exists';
    } elseif (empty($name) || empty($fileName) || empty($quantity) || empty($price) || empty($sizes) || empty($colors) || empty($description)) {
      $error = 'Please fill the required fields.';
    } else {
      $insert = "INSERT INTO product(seller_id, name, image, category_id, description, quantity, price, colors, sizes) VALUES('$seller_id', '$name', '$fileName', '$category_id', '$description', '$quantity','$price', '$color_implode', '$sizes_implode')";
      mysqli_query($conn, $insert);
      header('location:add-product.php?success=product_created');
    }
  } else {
    $error = "Data not inserted into database";
  }
}

$title = 'Add Product';
$contentView = 'views/_add-product.php';
include('views/master.php');
