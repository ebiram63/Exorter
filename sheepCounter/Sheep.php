<?php

class sheep{

    private $name;
    private  static $count = 0;

    public function __construct( ){
        $this->name = "sheep-" . rand(99,999);
        self::$count++;
    }

    public function baaa(){
        echo "$this->name : B" . str_repeat('a' , rand(1,200)) . PHP_EOL;
    }

    public static function getCount(){
        return self::$count;
    }
}


// $sheep = new sheep();
// $sheep->baaa();
// $sheep->baaa();