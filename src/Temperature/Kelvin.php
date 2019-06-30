<?php
// 온도변환

namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Kelvin extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Kelvin";
    
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

    public function celsius($value=null)
    {
        return $this->conv($value, -272.15);
    }

    public function fahrenheit($value=null)
    {
        return $this->conv($value, -457.87);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 1.8);
    }
}