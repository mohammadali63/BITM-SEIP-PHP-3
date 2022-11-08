<?php

namespace App\classes;

class ArrayPhp
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name' => 'jahid',
                'email' => 'jahi@gmail.com',
                [
                    'mobile1' => '0978656',
                    'mobile2' => '97856754'
                ],
            ],
            1 => [
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                [
                    'mobile1' => '0978656',
                    'mobile2' => '97856754'
                ],
            ],

            2 => 'BITM',

            3 => [
                'name' => 'jihad',
                'email' => 'jihad@gmail.com',
                [
                    'mobile1' => '0978656',
                    'mobile2' => '97856754'
                ],
            ],
        ];
        echo "<pre>";
        print_r($this->student);


    }
}









//
//foreach ($this->student as $item)
//{
//    if (is_array($item))
//    {
//        foreach ($item as $value)
//        {
//            if (is_array($value))
//            {
//                foreach ($value as $v_value)
//                {
//                    echo $v_value;
//                }
//
//            }
//            else
//            {
//                echo $value.'';
//            }
//
//        }
//    }
//    else
//    {
//        echo $item;
//    }
//    echo '<br/>';
//}




//        foreach ($this->student as $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    echo $value.'';
//                }
//            }
//            else{
//                echo $item;
//            }
//            echo '<br/>';
//        }