<?php

class Person{
    public $name;
    private $nationalCode;
    private $age;
    protected $income;

public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
    $this->setNationalCode(rand(100,9999));
}    

public function setnationalCode($nationalCode){
    $this->nationalCode = $nationalCode;
}
public function setAge($age){
    $this->age = $age;
}

public function setIncome($income){
    $this->income = $income;
}

//getter
public function getnationalCode(){
    return $this->nationalCode;
}
public function getAge(){
    return $this->age;
}

public function getIncome(){
    return $this->income;
}

}


$ebi = new Person("EBi",32);
echo $ebi->name . PHP_EOL;
$ebi->setAge(30);
$ebi->setIncome(number_format(2000));
echo $ebi->getAge() . PHP_EOL;
echo $ebi->getIncome() . PHP_EOL;
echo $ebi->getNationalCode() . PHP_EOL;