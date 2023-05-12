<?php
  session_start();
  include 'core/database.php';
  include 'core/functions.php';
  $title = 'View Products';
  $contentView = 'views/_view-products.php';
  include('views/master.php');
?>