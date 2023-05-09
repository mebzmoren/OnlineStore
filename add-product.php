<?php
  session_start();
  include 'core/database.php';
  $title = 'Add Product';
  $contentView = 'views/_add-product.php';
  include('views/master.php');
?>