<?php

class Person{

    public $name = "Ebi";
    private $age ;


    public function printName(){
        echo "Name : " . $this->name;
    }
    public function setAge($newAge){
        $this->age = $newAge;
    }
    public function getAge(){
        echo "Age : " . $this->age;
    }

}

class Programmer extends Person{

    public function code(){
        echo "coding .... ";
    }
}


$ebi = new Person();
// $ebi->name = "Omid";
// $ebi->printName();
$ebi->setAge(50);
$ebi->getAge();

$g1 = new programmer();
