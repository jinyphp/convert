<?php
// 온도변환

namespace Jiny\Convert\Pressure;

use Jiny\Convert\Unit;

class Pa extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Pa";
    
    /**
     * 초기화
     */
    public function __construct($value=null)
    {
        if ($value) {
            $this->value = $value;
        }
    }

    public function __invoke()
    {
        return $this->value;
    }

    public function atm($value=null)
    {
        return $this->conv($value, 9.8692e-6);
    }

    public function hPa($value=null)
    {
        return $this->conv($value, 0.01);
    }

   
}