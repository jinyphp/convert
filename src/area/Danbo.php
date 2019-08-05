<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Danbo extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Danbo";
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
        return $this->conv($value, 9.917355);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 0.099174);
    }

    public function squarekilometer($value=null)
    {
        return $this->conv($value, 0.000992);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 10674.9525);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 1186.10583);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 0.245063);
    }

    public function square($value=null)
    {
        return $this->conv($value, 10800);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 300);
    }

    public function squaremeter($value=null)
    {
        return $this->conv($value, 1);
    }

    public function junbo($value=null)
    {
        return $this->conv($value, 0.1);
    }

}