<?php

class Sum{
    function __construct($x, $y){
        echo $x + $y;
        echo "</br>";
    }
}

class Division{
    function __construct($x, $y){
        echo $x / $y;
        echo "</br>";
    }
}

class Multiplication{
    function __construct($x, $y){
        echo $x * $y;
        echo "</br>";
    }
}

class Subtraction{
    function __construct($x, $y){
        echo $x - $y;
    }    
} 

if(isset($_POST['Calculate'])){
    $x = (float)$_POST['x'];
    $y = (float)$_POST['y'];
    $operation = $_POST['operation'];
    // echo "YEA!";
}

switch($operation){
    case '+':
        $result = new Sum ($x, $y);
        break;
    case '/':
        $result = new Division ($x, $y);
        break;
    case '*':
        $result = new Multiplication($x, $y);
        break;
    case '-':
        $result = new Subtraction ($x, $y);
        break;
}

// echo $result;
// $result = new Sum (12, 4);
// $result = new Division (12, 4);
// $result = new Multiplication(12, 4);
// $result = new Subtraction(12, 4);
// echo "OK";




?>