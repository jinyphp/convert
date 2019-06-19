<?php
// 길이변환

namespace Jiny\Convert\Length;

class Jung {
    private $value;

    /**
     * 초기화
     */
    public function __construct($value) {
        $this->value = $value;
    }
    
    public function __invoke() {
        return $this->value;
    }

    /**
     * 센티미터(centimeter) 변환
     */
    public function centi() {
        return $this->value * 10909.0909;
    }

    /**
     * 미터(meter) 변환
     */
    public function meter() {
        return $this->value * 109.090909;
    }
    
    /**
     * 인치(inch) 변환
     */
    public function inch() {
        return $this->value * 4294.91768;
    }

    /**
     * 간(gan) 변환
     */
    public function gan() {
        return $this->value * 60;
    }

    /**
     * 피트(feet) 변환
     */
    public function feet() {
        return $this->value * 357.909807;
    }

    /**
     * 푸트(foot) 변환
     */
    public function foot() {
        return $this->value * 357.909807;
    }
}