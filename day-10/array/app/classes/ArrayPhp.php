<?php

namespace App\classes;

class ArrayPhp
{
    public $x,$data= [];
    public function __construct()
    {
        $this->x="hello";
    }
    public function index()
    {
        $this->data=[ 10, 20, 30, "BITM", 100.450, true];
        echo $this->data[3];
        echo '<br/>';
        echo $this->data[0];
    }

}