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

    public function meter()
    {
       return $this->value * 0.0254;
    }

    public function feet()
    {
       return $this->value * 0.083333;
    }

    public function foot()
    {
       return $this->value * 0.08382;
    }

    public function jung()
    {
       return $this->value * 0.000233;
    }

    public function gan()
    {
       return $this->value * 0.01397;
    }

}
