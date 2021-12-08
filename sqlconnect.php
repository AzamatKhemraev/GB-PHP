<?php

const SERVER = "localhost";
const LOGIN = "root";
const PAS = "";
const DB = "gb_php_basic_course";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!");
