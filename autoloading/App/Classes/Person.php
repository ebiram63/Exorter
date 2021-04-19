<?php
// namespace App\Classes;
// class Person{
//     public function __construct(){
//         $this->name = static::class . rand(100,999);
//     }
//     public function printName(){
//         echo $this->name . PHP_EOL;
//     }
// }


namespace App\Classes;

class Person{

    public function __construct(){
        $this->name = static::class . rand(100,999);
    }

    public function printName(){
        return $this->name . PHP_EOL;
    }
} 


