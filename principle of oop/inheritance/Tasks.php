<?php

include_once "baseModel.php";

class Tasks extends baseModel{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
}

$task = new Tasks();
$a = $task->find(10);
var_dump($a);