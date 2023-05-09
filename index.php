<?php
  session_start();
  include 'core/database.php';
  $title = 'Home';
  $contentView = 'views/_index.php';
  include('views/master.php');
?>