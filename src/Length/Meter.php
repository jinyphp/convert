<?php
// 길이변환

namespace Jiny\Convert\Length;

class Meter
{
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Meter";

    public function type()
    {
        return self::TYPE;
    }
    
    
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
     * 값 지정
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * 값 출력
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * 센치미터 변환
     */
    public function centi($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 100;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 100;
        }

        // 계산불가
        return null;
    }

    /**
     * end of class
     */
}