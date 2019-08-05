<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Jungbo extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Jungbo";
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

    public function are($value=null)
    {
        return $this->conv($value, 99.173554);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 0.991736);
    }

    public function squarekilometer($value=null)
    {
        return $this->conv($value, 0.009917);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 106749.525);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 11861.0583);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 2.450632);
    }

    public function square($value=null)
    {
        return $this->conv($value, 108000);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 3000);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 10);
    }

    public function squaremeter($value=null)
    {
        return $this->conv($value, 9917.35537);
    }

}