<?php


class A {
    private $private = "A:Private";
    private $public = "A:public";
    private $protected = "A:protected";


    public function test(){
        echo "";
    }
}

class C extends A{

}




$ea = new A();
echo $ea->private;