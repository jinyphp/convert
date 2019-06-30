<?php
// 온도변환

namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Rankine extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Rankine";
    
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
        return $this->conv($value, -272.59444);
    }

    public function fahrenheit($value=null)
    {
        return $this->conv($value, -458.67);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 0.555556);
    }
}