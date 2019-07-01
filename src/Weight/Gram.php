<?php
// 무게변환

namespace Jiny\Convert\Weight;

class Gram {
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Gram";

    public function type() {
        return self::TYPE;
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
     * 밀리그램(milligram) 변환
     */
    public function milligram($value=null) {
        return $this->conv($value, 1000);
    }

    /**
     * 킬로그램(kilogram) 변환
     */
    public function kilogram($value=null) {
        return $this->conv($value, 0.001);
    }

    /**
     * 톤(ton) 변환
     */
    public function ton($value=null) {
        return $this->conv($value, 1e-6);
    }
    
    /**
     * 킬로톤(kiloton) 변환
     */
    public function kiloton($value=null) {
        return $this->conv($value, 1e-9);
    }

    /**
     * 그레인(grain) 변환
     */
    public function grain($value=null) {
        return $this->conv($value, 15.432358);
    }

    /**
     * 온스(ounce) 변환
     */
    public function ounce($value=null) {
        return $this->conv($value, 0.035274);
    }

    /**
     * 파운드(pound) 변환
     */
    public function pound($value=null) {
        return $this->conv($value, 0.002205);
    }

    /**
     * 근(geun) 변환
     */
    public function geun($value=null) {
        return $this->conv($value, 0.001667);
    }

    /**
     * end of class
     */
}