<?php
  session_start();
  include 'core/database.php';
  $title = 'Checkout';
  $contentView = 'views/_checkout.php';
  include('views/master.php');
?>