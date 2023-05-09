<?php
  session_start();
  include 'core/database.php';
  $title = 'Shop';
  $contentView = 'views/_shop.php';
  include('views/master.php');
?>