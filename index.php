<?php
    //Задание 1
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    echo "$a, $b <br>";

    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    }elseif ($a < 0 && $b < 0){
        echo $a * $b;
    }else {
        echo $a + $b;
    }
    echo "<br><br>";

    //Задание 2
    $c = rand(0, 15);

    switch ($c)
    {
        case 0:
            echo $c++ . " ";
        case 1:
            echo $c++ . " ";
        case 2:
            echo $c++ . " ";
        case 3:
            echo $c++ . " ";
        case 4:
            echo $c++ . " ";
        case 5:
            echo $c++ . " ";
        case 6:
            echo $c++ . " ";
        case 7:
            echo $c++ . " ";
        case 8:
            echo $c++ . " ";
        case 9:
            echo $c++ . " ";
        case 10:
            echo $c++ . " ";
        case 11:
            echo $c++ . " ";
        case 12:
            echo $c++ . " ";
        case 13:
            echo $c++ . " ";
        case 14:
            echo $c++ . " ";
        case 15:
            echo $c++ . " "; 
    }

    echo "<br><br>";

    //Задание 3
    function sum($a, $b) {
        return $a + $b;
    }

    function diff($a, $b) {
        return $a - $b;
    }

    function mul($a, $b) {
        return $a * $b;
    }

    function div($a, $b) {
        return $a / $b;
    }

    $result = diff(10, 11);
    echo $result;

    echo "<br><br>";

    //Задание 4
    function mathOperation($arg1, $arg2, $operation){
        switch ($operation) {
            case "sum":
                return sum($arg1, $arg2);
            case "diff":
                return diff($arg1, $arg2);
            case "mul":
                return mul($arg1, $arg2);
            case "div":
                return div($arg1, $arg2);
        }
    }

    $result2 = mathOperation(5, 7, 'mul');
    echo $result2;

    echo "<br><br>";

?>