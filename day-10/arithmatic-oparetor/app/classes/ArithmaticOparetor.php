<?php

namespace App\classes;

class ArithmaticOparetor
{
    public $x;
    public $y;

    public function index()
    {
        $this->x=10;
        $this->y=20;

        echo $this->x + $this->y;
        echo'<br/>';
        echo $this->x - $this->y;
        echo'<br/>';
        echo $this->x * $this->y;
        echo'<br/>';
        echo $this->x / $this->y;
        echo'<br/>';
        echo $this->x % $this->y;
        echo'<br/>';
    }

}