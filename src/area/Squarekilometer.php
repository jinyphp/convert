<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Squarekilometer extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Squarekilometer";
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
        return $this->conv($value, 1000000);
    }

    public function are($value=null)
    {
        return $this->conv($value, 10000);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 100);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 10763910.4);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 1195990.05);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 247.105381);
    }

    public function square($value=null)
    {
        return $this->conv($value, 10890000);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 302500);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 1008.33333);
    }

    public function jungbo($value=null)
    {
        return $this->conv($value, 100.833333);
    }

}