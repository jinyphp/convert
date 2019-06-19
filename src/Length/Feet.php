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

    // 센치변환
    public function centi()
    {
       return $this->value * 30.48;
    }

    // 미터변환
    public function meter()
    {
       return $this->value * 0.3048;
    }

    // 킬로변환
    public function kilo()
    {
       return $this->value * 0.000305;
    }

    // 인치변환
    public function inch()
    {
       return $this->value * 12;
    }

    //야드변환
    public function yard()
    {
       return $this->value * 0.333333;
    }

    //간변환
    public function gan()
    {
       return $this->value * 0.16764;
    }

    //정변환
    public function jung()
    {
       return $this->value * 0.002794;
    }

}