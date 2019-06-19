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
     * 싱글턴
     */
    
    

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
       
        // if ($value) {
        //     // 입력한 값 기준으로 계산
        //     return $value * 100;
        // } else if($this->value) {
        //     // 설정 프로퍼티 기준으로 계산
        //     return $this->value * 100;
        // }

        // // 계산불가
        // return null;
        // */
    }

    /**
     * end of class
     */
}