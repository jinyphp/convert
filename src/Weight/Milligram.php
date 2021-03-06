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
     * 그램(gram) 변환
     */
    public function gram($value=null) {
        return $this->conv($value, 0.001);
    }

    /**
     * 킬로그램(kilogram) 변환
     */
    public function kilogram($value=null) {
        return $this->conv($value, 1e-6);
    }

    /**
     * 톤(ton) 변환
     */
    public function ton($value=null) {
        return $this->conv($value, 10e-10);
    }
    
    /**
     * 킬로톤(kiloton) 변환
     */
    public function kiloton($value=null) {
        return $this->conv($value, 1e-12);
    }

    /**
     * 그레인(grain) 변환
     */
    public function grain($value=null) {
        return $this->conv($value, 0.015432);
    }

    /**
     * 온스(ounce) 변환
     */
    public function ounce($value=null) {
        return $this->conv($value, 0.000035);
    }

    /**
     * 파운드(pound) 변환
     */
    public function pound($value=null) {
        return $this->conv($value, 2.2046e-6);
    }

    /**
     * 근(geun) 변환
     */
    public function geun($value=null) {
        return $this->conv($value, 1.6667e-6);
    }

    /**
     * end of class
     */
}