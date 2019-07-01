<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Hectare extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Hectare";
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
     * 제곱미터 변환
     */

    public function squaremeter($value=null)
    {
        return $this->conv($value, 10000);
    }

    public function are($value=null)
    {
        return $this->conv($value, 100);
    }

    public function squarekilometer($value=null)
    {
        return $this->conv($value, 0.01);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 107639.104);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 11959.9005);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 2.471054);
    }

    public function square($value=null)
    {
        return $this->conv($value, 108900);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 3025);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 10.083333);
    }

    public function jungbo($value=null)
    {
        return $this->conv($value, 1.008333);
    }

}