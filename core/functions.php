<?php
include 'core/database.php';

function getTable($table)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByCategory($category_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM product WHERE category_id='$category_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdBySeller($seller_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM product WHERE seller_id='$seller_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByName($table, $name)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE name='$name'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdByMemberId($table, $id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE member_id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProdById($table, $id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getLikedProduct($table, $member_id, $product_id)
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$product_id' AND member_id='$member_id'";
  return mysqli_query($conn, $mysql_stmt);
}
