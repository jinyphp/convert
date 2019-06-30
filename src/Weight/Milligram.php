<?php
// 무게변환

namespace Jiny\Convert\Weight;

class Milligram {
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Milligram";

    public function type() {
        return self::TYPE;
    }

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance() {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }
        return self::$Instance;
    }
    
    /**
     * 초기화
     */
    public function __construct($value=null) {
        if ($value) {
            $this->value = $value;
        }
    }

    public function __invoke() {
        return $this->value; 
    }

    /**
     * 값 지정
     */
    public function setValue($value) {
        $this->value = $value;
    }

    /**
     * 값 출력
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * 그램(gram) 변환
     */
    public function gram($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.001;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.001;
        }
        // 계산불가
        return null;
    }

    /**
     * 킬로그램(kilogram) 변환
     */
    public function kilogram($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 1e-6;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 1e-6;
        }
        // 계산불가
        return null;
    }

    /**
     * 톤(ton) 변환
     */
    public function ton($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 10e-10;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 10e-10;
        }
        // 계산불가
        return null;
    }
    
    /**
     * 킬로톤(kiloton) 변환
     */
    public function kiloton($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 1e-12;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 1e-12;
        }
        // 계산불가
        return null;
    }

    /**
     * 그레인(grain) 변환
     */
    public function grain($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.015432;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.015432;
        }
        // 계산불가
        return null;
    }

    /**
     * 온스(ounce) 변환
     */
    public function ounce($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.000035;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.000035;
        }
        // 계산불가
        return null;
    }

    /**
     * 파운드(pound) 변환
     */
    public function pound($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 2.2046e-6;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 2.2046e-6;
        }
        // 계산불가
        return null;
    }

    /**
     * 근(geun) 변환
     */
    public function geun($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 1.6667e-6;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 1.6667e-6;
        }
        // 계산불가
        return null;
    }

    /**
     * end of class
     */
}