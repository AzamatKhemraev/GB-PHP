<?php
include_once("sqlconnect.php");
$login = $_COOKIE['login'];
$getUserIdSql = "SELECT id FROM users where email = '$login'";
$q = mysqli_query($connect, $getUserIdSql);
$tmp = mysqli_fetch_assoc($q);
$user_id = $tmp['id'];

// var_dump((int)$tmp['id']) ;



if($_POST['cleanCart'] == "true") {
    $id = (int)$_POST['userId'];
    $deleteQuery = "DELETE FROM cart WHERE user_id = $id";
    $query = mysqli_query($connect, $deleteQuery);
    var_dump($_POST) ;
};