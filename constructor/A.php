<?php


class Car{

    public $brand;
    public $model;
    public $color;

    public function __construct($brand,$model,$color){

        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        echo "$this->color $this->model $this->brand Car  created \n";
    }

    public function printInfo(){
        echo "$this->color $this->brand $this->model";
    }


    public function __destruct(){
        echo "$this->color $this->model $this->brand Car  Destrudet \n";
    }
}

$pride = new Car("saipa" , "pride" , "white");
// $pride->printInfo();
