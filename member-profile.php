<?
  session_start();
  include 'core/database.php';
  $title = 'Member Profile';
  $contentView = 'views/_member-profile.php';
  include('views/master.php');
?>