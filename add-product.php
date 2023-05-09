<?php
  session_start();
  include 'core/database.php';

  if(isset($_POST['submit'])) {
    $seller_id = '1';
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $colors = $_POST['colors'];
    $sizes = $_POST['sizes'];
    $description = $_POST['description'];
    
    $fileName = $_FILES['image']['name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError == 0) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = "assets/uploads/" . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
      } else {
        $error = "There is an error uploading your file."; 
        die();
      }
    } else {
      $error = "You can not upload this type of file.";
      die();
    }

    $color_implode = implode(",", $colors);
    $sizes_implode = implode(",", $sizes);
    // echo 'check: '. $image;
    // echo 'check: '. $color_implode;
    // echo 'check: '. $sizes_implode;

    $sql_stmt = "SELECT * FROM product WHERE name = '$name'";
    $result = mysqli_query($conn, $sql_stmt);
    if($result) {
      if (mysqli_num_rows($result) > 0) {
        $error = 'Item already exists';
        die();
      } elseif (empty($name) || empty($fileNameNew) || empty($quantity) || empty($price) || empty($sizes) || empty($colors) || empty($description)) {
        $error = 'Please fill the required fields.';
        die();
      } else {
        $insert = "INSERT INTO product(seller_id, name, image, category, description, quantity, price, colors, sizes) VALUES('$seller_id', '$name', '$fileNameNew', '$category', '$description', '$quantity','$price', '$color_implode', '$sizes_implode')";
        mysqli_query($conn, $insert);
        header('location:add-product.php?success=product_created');
        die();
      }
    } else {
      $error = "Data not inserted into database";
    }
  } 

  $title = 'Add Product';
  $contentView = 'views/_add-product.php';
  include('views/master.php');
?>