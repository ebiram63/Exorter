<?php

include_once "baseModel.php";

class User extends baseModel{
    protected $table = 'users';
    protected $primaryKey = 'id';
}


$user = new User();
$a = $user->find(15);
var_dump($a);
