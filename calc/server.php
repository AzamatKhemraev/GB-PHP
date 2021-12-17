<?php
// print_r($_POST);
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$operation = $_POST['operation'];


switch ($operation) {
    case 'sum':
        $result = $num1 + $num2;
        echo "<h1>$result</h1>";
        break;
    
    case 'diff':
        $result = $num1 - $num2;
        echo "<h1>$result</h1>";
        break;

    case 'mult':
        $result = $num1 * $num2;
        echo "<h1>$result</h1>";
        break;
    
    case 'div':
        if($num2 == 0) {
            echo "<h1>Деление на ноль!</h1>";
            break;
        } else {
            $result = $num1 / $num2;
            echo "<h1>$result</h1>";
        } 
        break;
}
