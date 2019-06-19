<?php
// 길이변환

namespace Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Meter extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Meter";

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

    /**
     * 센치미터 변환
     */
    public function centi($value=null)
    {
        return $this->conv($value, 100);
    }

    /**
     * end of class
     */
}