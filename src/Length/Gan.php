<?php
// 길이변환

namespace Jiny\Convert\Length;

class Gan
{
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Gan";

    public function type()
    {
        return self::TYPE;
    }

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }

        return self::$Instance;
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
            return $value * 181.818182;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 181.818182;
        }

        // 계산불가
        return null;
    }
    
    public function meter($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 1.818182;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 1.818182;
        }
        
        // 계산불가
        return null;
    }

    public function feet($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 5.965163;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 5.965163;
        }
        
        // 계산불가
        return null;
    }

    public function foot($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 5.965163;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 5.965163;
        }
        
        // 계산불가
        return null;
    }

    public function inch($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 71.581961;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 71.581961;
        }
        
        // 계산불가
        return null;
    }

    public function jung($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.016667;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.016667;
        }
        
        // 계산불가
        return null;
    }

    /**
     * end of class
     */
}