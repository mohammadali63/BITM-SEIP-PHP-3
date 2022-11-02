<?php

namespace App\classes;

class HelloWorld
{
    public $name;
    public $email;
    public $mobile;
    public function index()
    {
        $firstName="Mohammad";
        $lastName="Ali";
        echo "Full Name is ".$firstName.' '.$lastName;
    }

}