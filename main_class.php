<?php

// class User{
//     public $username;
//     private $password;

//     function __construct($name, $password){
//         $this->username = $name;
//         $this->password = $password;
//     } 
//     public function sayHello(){
//         echo "hello, my name is " . $this->username;
//     }

//     public function saveDB(){
//         // sql
//         $hash_password = "erjkgkbnb" . $this->password ."894758a1";
//         // sql
//     }
    
// }

class Calculator{
    public $x;
    private $r;
    protected $q;
    public $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y =$y;
    }
    public function sum(){
        echo $this->x + $this->y; 
    }
    private function factorial($n){
        $t=1;    
        for($i=1; $i<=$n; $i++){
                $t*=$i;
            }
        return $t;
    }

    public function getFactorialInSquered($n){
            $res = $this-> factorial($n);
            echo $res * $res;
    }
}

$result = new Calculator(2, 3);
// $result->sum();

$result->getFactorialInSquered(6);

// $ivan = new User("subzait",1235);
// $vlad = new User("corfa",156315);
// echo $ivan->sayHello();
// echo $vlad->sayHello();


























class Dog{
    protected $legs;
    protected $head;

    function __construct($legs, $head)
    {
        $this->legs= $legs;
        $this->head= $head;
    }

    public function sayHowManyeLegs(){
        echo "I have " . $this->legs;
    }
}

$result = new Dog(4, 1);
$result->sayHowManyeLegs();






















?>