<?php
// 온도변환

namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Fahrenheit extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Fahrenheit";
    
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
        return $this->conv($value, -17.222222);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 255.927778);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 460.67);
    }
}