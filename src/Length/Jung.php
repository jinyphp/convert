<?php
// 길이변환

namespace Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Jung extends Unit{

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Jung";

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
     * 센티미터(centimeter) 변환
     */
    public function centi($value=null) {
        return $this->conv($value, 10909.0909);
    }

    /**
     * 미터(meter) 변환
     */
    public function meter($value=null) {
        return $this->conv($value, 109.090909);
    }

    /**
     * 인치(inch) 변환
     */
    public function inch($value=null) {
        return $this->conv($value, 4294.91768);
    }
    
    /**
     * 간(gan) 변환
     */
    public function gan($value=null) {
        return $this->conv($value, 60);
    }

    /**
     * 피트(feet) 변환
     */
    public function feet($value=null) {
        return $this->conv($value, 357.909807);
    }

    /**
     * 푸트(foot) 변환
     */
    public function foot($value=null) {
        return $this->conv($value, 357.909807);
    }

    /**
     * end of class
     */
}