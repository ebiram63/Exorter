<?php

class User{

    protected $username;
    protected $email;


    public function __construct($username,$email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


class Admin extends User{

}