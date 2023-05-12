<?php
session_start();
include 'core/database.php';

$title = 'Shop';
$contentView = 'views/_shop-category.php';
include('views/master.php');
