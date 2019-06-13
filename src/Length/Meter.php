<?php
// 길이변환

namespace Jiny\Convert\Length;

class Meter
{
    private $value;
    
    /**
     * 초기화
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __invoke()
    {
        return $this->value; 
    }

    /**
     * 센치미터 변환
     */
    public function centi()
    {
        return $this->value * 100;
    }
}