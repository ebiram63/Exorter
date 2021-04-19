<?php

class A{

    public function __toString()
    {
        return "an object of " . self::class . PHP_EOL;
    }

    public function __invoke($arr)
    {
        var_dump($arr);
        echo "__invoke called";
    }
}

$a = new A();
// echo $a;
// $a([1,2,3]);
