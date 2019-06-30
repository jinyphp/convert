<?php
// 온도변환

namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Celsius extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Celsius";
    
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

    public function fahrenheit($value=null)
    {
        return $this->conv($value, 33.8);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 274.15);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 493.47);
    }
}