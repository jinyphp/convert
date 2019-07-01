<?php
// 온도변환

namespace Jiny\Convert\Pressure;

use Jiny\Convert\Unit;

class atm extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="atm";
    
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

    public function Pa($value=null)
    {
        return $this->conv($value, 101325);
    }

    public function hPa($value=null)
    {
        return $this->conv($value, 1,01325);
    }

   
}