<?php

const SERVER = "localhost";
const LOGIN = "root";
const PAS = "";
const DB = "gb_php_basic_course";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!: ".mysqli_error($connect));
if(!mysqli_set_charset($connect, "utf8")){
    printf("Error: ".mysqli_error($connect));
}