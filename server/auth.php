<?php
include_once "sqlconnect.php";

$login = strip_tags($_POST['login']);
$pass = strip_tags($_POST['pass']);

$sql = "SELECT * from users where email = '$login' and pass = '$pass'";
$getUser = mysqli_query($connect, $sql) or die("Ошибка: ".mysqli_error($connect));

$data = mysqli_fetch_assoc($getUser);

if(mysqli_num_rows($getUser) == 1) {
    setcookie('login', $login, 0, '/');
    setcookie('pass', $pass, 0, '/');
    header("location: ../signin.php?isLogin=true&name={$data['name']}");
} else {
    header("locationt: index.php");
}

