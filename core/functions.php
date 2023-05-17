<?php
include 'core/database.php';
// Meb's Functions

//***************************************************** */
//Update the getTable function that accepts $search and $sorting. If $search is provide, it adds a WHERE clause to the SQL query to only select rows where the 'name' column contains the search string.if $sorting is provide, it will sort by last_modified Descending order
function getTable($table, $search = '', $sorting = '', $min_price = '', $max_price = '', $colors = [], $sizes = [], $category_id = '')
{
  global $conn;
  $mysql_stmt = "SELECT * FROM $table Where 1+1";
  $mysql_stmt1 = "SELECT * FROM $table ";

  if ($search !== '') {
    $search = mysqli_real_escape_string($conn, $search);
    $mysql_stmt1 .= " WHERE name LIKE '%$search%'";
    return mysqli_query($conn, $mysql_stmt1);
  }

  if ($sorting !== '') {
    if ($sorting === 'new') {
      $mysql_stmt1 .= " ORDER BY last_modified DESC";
      return mysqli_query($conn, $mysql_stmt1);
    } elseif ($sorting === 'popular') {
      // Adding the COUNT() function to the SELECT clause
      $mysql_stmt1 = str_replace("SELECT *", "SELECT *, COUNT(product_id) as sales_count", $mysql_stmt1);
      // Join with product_bill table
      $mysql_stmt1 .= " LEFT JOIN product_bill pb ON $table.id = pb.product_id GROUP BY $table.id ORDER BY sales_count DESC";
      return mysqli_query($conn, $mysql_stmt1);
    }
  }



  //************************Adding Filters***************************** */

  // Category filter
  if ($category_id !== '') {
    $category_id = mysqli_real_escape_string($conn, $category_id);
    $mysql_stmt .= " AND category_id = $category_id";
  }
  // price filter
  if ($min_price !== '') {
    $min_price = mysqli_real_escape_string($conn, $min_price);
    $mysql_stmt .= " AND price >= $min_price";
  }
  if ($max_price !== '') {
    $max_price = mysqli_real_escape_string($conn, $max_price);
    $mysql_stmt .= " AND price <= $max_price";
  }

  // color filter
  foreach ($colors as $color) {
    $color = mysqli_real_escape_string($conn, $color);
    $mysql_stmt .= " AND FIND_IN_SET('$color', colors)";
  }

  // size filter
  foreach ($sizes as $size) {
    $size = mysqli_real_escape_string($conn, $size);
    $mysql_stmt .= " AND FIND_IN_SET('$size', sizes)";
  }

  // // Add sorting at the end of the query


  $result = mysqli_query($conn, $mysql_stmt);



  if ($result === false) {
    die("Error in query: " . mysqli_error($conn));
  }

  return $result;
}

function getCategories()
{
  global $conn;
  $mysql_stmt = "SELECT * FROM category";
  return mysqli_query($conn, $mysql_stmt);
}

//********************************************************* */


//Godwin's Functions
function getTableData($table)
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

function checkDiscountProduct($table, $product_id) {
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE product_id='$product_id'";
  return mysqli_query($conn, $mysql_stmt);
}

function getProductById($table, $id) {
  global $conn;
  $mysql_stmt = "SELECT * FROM $table WHERE id='$id'";
  return mysqli_query($conn, $mysql_stmt);
}

function limitWords($text, $limit) {
  $words = explode(' ', $text);
  if (count($words) > $limit) {
    $words = array_slice($words, 0, $limit);
    $text = implode(' ', $words);
    $text .= '...';
  }
  return $text;
}

// Sam Functions
//********************************************************* */

// Count of how many products there are all in all
$total_amount_of_products = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM product") or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($total_amount_of_products);
$total_amount_of_products = $row['total_records'];

// Max amount of products to display in one page
$max_products_per_page = 9;

// Setting and getting the page number
if(isset($_GET['page_number']) && $_GET['page_number'] !== "") {
  $page_number = $_GET['page_number'];
} else {
  $page_number = 1;
}

// Calculate offset for the max limit query
$offset = ($page_number - 1) * $max_products_per_page;

// Query string to retrieve products with limit and offset
$sql = "SELECT * FROM product LIMIT $offset, $max_products_per_page";
$output = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// Get previous page
$back = $page_number - 1;
// Get next page 
$next = $page_number + 1;

// Total counts of records applied $output function
$output_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM online_store.product") or die(mysqli_error($conn));

// Total records
$records = mysqli_fetch_array($output_count);
$count_records = $records['total_records'];

// Max pages 
$max_amount_of_pages = ceil($count_records / $max_products_per_page);


//********************************************************* */