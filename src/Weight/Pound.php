<?php
// 무게변환

namespace Jiny\Convert\Weight;

class Pound {
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Pound";

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
        return $this->conv($value, 453592.37);
    }

    /**
     * 그램(gram) 변환
     */
    public function gram($value=null) {
        return $this->conv($value, 453.59237);
    }

    /**
     * 킬로그램(kilogram) 변환
     */
    public function kilogram($value=null) {
        return $this->conv($value, 0.453592);
    }
    
    /**
     * 톤(ton) 변환
     */
    public function ton($value=null) {
        return $this->conv($value, 0.000454);
    }

    /**
     * 킬로톤(kiloton) 변환
     */
    public function kiloton($value=null) {
        return $this->conv($value, 4.5359e-7);
    }

    /**
     * 그레인(grain) 변환
     */
    public function grain($value=null) {
        return $this->conv($value, 7000);
    }

    /**
     * 온스(ounce) 변환
     */
    public function ounce($value=null) {
        return $this->conv($value, 16);
    }

    /**
     * 근(geun) 변환
     */
    public function geun($value=null) {
        return $this->conv($value, 0.755987);
    }

    /**
     * end of class
     */
}