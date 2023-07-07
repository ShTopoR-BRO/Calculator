<?php

use Calculator as GlobalCalculator;

if(isset($_POST['Calculate'])){
    $x = (float)$_POST['x'];
    $y = (float)$_POST['y'];
    $operation = $_POST['operation'];
    // echo "YEA!";
}

class Calculator{
    public $x;
    public $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function sum(){
        echo $this->x + $this->y;
    }
    public function division(){
        echo $this->x / $this->y;
    }
    public function multiplication(){
        echo $this->x * $this->y;
    }
    public function subtraction(){
        echo $this->x - $this->y;
    }
}

switch($operation){
    case '+':
        $result = new Calculator($x, $y);
        $result->sum();
        break;
    case '/':
        $result = new Calculator ($x, $y);
        $result->division();
        break;
    case '*':
        $result = new Calculator($x, $y);
        $result->multiplication();
        break;
    case '-':
        $result = new Calculator($x, $y);
        $result->subtraction();
        break;
}




// class Sum{
//     function __construct($x, $y){
//         echo $x + $y;
//         echo "</br>";
//     }
// }

// class Division{
//     function __construct($x, $y){
//         echo $x / $y;
//         echo "</br>";
//     }
// }

// class Multiplication{
//     function __construct($x, $y){
//         echo $x * $y;
//         echo "</br>";
//     }
// }

// class Subtraction{
//     function __construct($x, $y){
//         echo $x - $y;
//     }    
// } 



// switch($operation){
//     case '+':
//         $result = new Sum ($x, $y);
//         break;
//     case '/':
//         $result = new Division ($x, $y);
//         break;
//     case '*':
//         $result = new Multiplication($x, $y);
//         break;
//     case '-':
//         $result = new Subtraction ($x, $y);
//         break;
// }

// echo $result;
// $result = new Sum (12, 4);
// $result = new Division (12, 4);
// $result = new Multiplication(12, 4);
// $result = new Subtraction(12, 4);
// echo "OK";




?>