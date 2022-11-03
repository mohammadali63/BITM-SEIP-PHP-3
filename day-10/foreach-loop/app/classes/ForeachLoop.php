<?php

namespace App\classes;

class ForeachLoop
{
    public $x,$data= [];
    public function __construct()
    {
        $this->x="hello";
    }
    public function index()
    {
        $this->data=[ 10, 20, 30, "BITM", 100.450, true];
        foreach ($this->data as $item)
        {
            echo $item;
        }
    }

}