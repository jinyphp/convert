<?php
namespace  Jiny\Convert\Length;

class Feet
{
    private $value;

    // $value

//    public function __construct()
//    {
//        return $this->value * 3.97;
//    }

public function __construct($value)
   {
       $this->value = $value;
   }

public function __invoke()
   {
    return $this->value;
   }
}