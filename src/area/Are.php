<?php

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class Are extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Are";
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
        return $this->conv($value, 100);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 0.01);
    }

    public function squarekilometer($value=null)
    {
        return $this->conv($value, 0.0001);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 1076.39104);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 119.599005);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 0.024711);
    }

    public function square($value=null)
    {
        return $this->conv($value, 1089);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 30.25);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 0.100833);
    }

    public function jungbo($value=null)
    {
        return $this->conv($value, 0.010083);
    }

}