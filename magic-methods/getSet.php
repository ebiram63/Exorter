<?php

class getSet{
    private $id = 50;
    private $data;


    public function __get($name)
    {
        // echo "[$name]";
        return $this->data[$name];
    }
    public function __set($set, $value){
        $this->data[$set] = $value;
    }

    public function __call($name , $arguments){
    
    }
}

$gs = new getSet();

// echo $gs->id;
// $gs->name = "Ebi";
// echo $gs->name;