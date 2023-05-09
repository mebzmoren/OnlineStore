<?php
  session_start();
  include 'core/database.php';
  $title = 'Products List';
  $contentView = 'views/_list-products.php';
  include('views/master.php');
?>