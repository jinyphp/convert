<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Squarefeet extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Squarefeet";
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
        return $this->conv($value, 0.092903);
    }

    public function are($value=null)
    {
        return $this->conv($value, 0.000929);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 9.2903e-6);
    }

    public function squarekilometer($value=null)
    {
        return $this->conv($value, 9.2903e-8);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 0.111111);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 0.000023);
    }

    public function square($value=null)
    {
        return $this->conv($value, 1.011714);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 0.028103);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 0.000094);
    }

    public function jungbo($value=null)
    {
        return $this->conv($value, 9.3677e-6);
    }

}