<?php
include_once "sqlconnect.php";

if($_POST){
    $fio = trim(strip_tags($_POST['user_name']));
    $feedback = trim(strip_tags($_POST['user_feedback']));
    $product_id = trim(strip_tags($_POST['product_id']));

    $query = "INSERT INTO comments (product_id, fio, text) VALUES ($product_id, '$fio', '$feedback')";
    
    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }else{
        header("Location: product.php?product_id=$product_id");
    }
}

function comments_all($connect, $id){
    $query = "SELECT * FROM comments where product_id = $id";
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $comments = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $comments[] = $row;
    }
    return $comments;
}
