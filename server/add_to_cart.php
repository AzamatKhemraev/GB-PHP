<?php
include_once("sqlconnect.php");
print_r($_POST);
$product_id = (int)$_POST['productId'];
$user_id = (int)$_POST['userId'];
$deleteProductQuery = "INSERT INTO cart (`product_id`, `user_id`) VALUES ($product_id, $user_id)";

$result = mysqli_query($connect, $deleteProductQuery);