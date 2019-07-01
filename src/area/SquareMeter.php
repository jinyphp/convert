<?php

// 제곱미터 SqureMeter
// 아르 anAre
// 핵타르 hectare
// 제곱킬로미터
// 제곱피트
// 제곱야드
// 에이커
// 평방자
// 평
// 단보
// 정보

/**
 * jinyphp/convert
 * author : DaeHyeon Kim (eoguszan@gmail.com)
 */

namespace Jiny\Convert\Area;
use Jiny\Convert\Unit;
class SquareMeter extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="SquareMeter";
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
        return $this->conv($value, 0.01);
    }

    public function hectare($value=null)
    {
        return $this->conv($value, 0.0001);
    }

    public function squarekilometre($value=null)
    {
        return $this->conv($value, 1e-6);
    }

    public function squarefeet($value=null)
    {
        return $this->conv($value, 10.76391);
    }

    public function squareyard($value=null)
    {
        return $this->conv($value, 1.19599);
    }

    public function acre($value=null)
    {
        return $this->conv($value, 0.000247);
    }

    public function square($value=null)
    {
        return $this->conv($value, 10.89);
    }

    public function flat($value=null)
    {
        return $this->conv($value, 0.3025);
    }

    public function danbo($value=null)
    {
        return $this->conv($value, 0.001008);
    }

    public function jungbo($value=null)
    {
        return $this->conv($value, 0.000101);
    }

}