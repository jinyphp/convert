<?php
namespace  Jiny\Convert\Length;

class Inch
{
    private $value;

    // $value
    // public function __construct()
    //  {
    //    return $this->value * 39.97;    
    //  }
    public function __construct($value)
    {
       $this->value = $value;
    }
    
    public function __invoke()
    {
       return $this->value;
    }

    public function centi()
    {
       return $this->value * 2.54;
    }

}