<?php
  include 'core/database.php';
  function getTable($table) {
    global $conn;
    $mysql_stmt = "SELECT * FROM $table";
    return mysqli_query($conn, $mysql_stmt); 
  }

  function getProdByCategory($category_id) {
    global $conn;
    $mysql_stmt = "SELECT * FROM product WHERE category_id='$category_id'";
    return mysqli_query($conn, $mysql_stmt);
  }

  function getProdBySeller($seller_id) {
    global $conn;
    $mysql_stmt = "SELECT * FROM product WHERE seller_id='$seller_id'";
    return mysqli_query($conn, $mysql_stmt);
  }
?>
