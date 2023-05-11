<?php
  session_start();
  include 'core/database.php';
  $title = 'Seller Products';
  $contentView = 'views/_seller-products.php';
  include('views/master.php');
?>