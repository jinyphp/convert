<?php
// 무게변환

namespace Jiny\Convert\Weight;

class Ounce {
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Ounce";

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
        return $this->conv($value, 28349.5231);
    }

    /**
     * 그램(gram) 변환
     */
    public function gram($value=null) {
        return $this->conv($value, 28.349523);
    }

    /**
     * 킬로그램(kilogram) 변환
     */
    public function kilogram($value=null) {
        return $this->conv($value, 0.02835);
    }
    
    /**
     * 톤(ton) 변환
     */
    public function ton($value=null) {
        return $this->conv($value, 0.000028);
    }

    /**
     * 킬로톤(kiloton) 변환
     */
    public function kiloton($value=null) {
        return $this->conv($value, 2.835e-8);
    }

    /**
     * 그레인(grain) 변환
     */
    public function grain($value=null) {
        return $this->conv($value, 437.5);
    }

    /**
     * 파운드(pound) 변환
     */
    public function pound($value=null) {
        return $this->conv($value, 0.0625);
    }

    /**
     * 근(geun) 변환
     */
    public function geun($value=null) {
        return $this->conv($value, 0.047249);
    }

    /**
     * end of class
     */
}