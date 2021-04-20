<?php

interface Exporteble{
    public function export();
}

interface Importeble{
    public function export();
}
abstract class Exporter implements Exporteble{
    protected $format;
    protected $data;


    public function __construct($data){
        $this->data = $data;
        if(!$this->is_valid()){
            die("invalid Data");
        }
        $this->data = $data;
    }
    public function is_valid(){
        foreach($this->data as $field){
            if(empty($field)){
                return false;
            }
        }
        return true;
    }
}