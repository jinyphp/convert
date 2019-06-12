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
     * 미터 변환
     */
    public function meter() {
        return $this->value * 109.090909;
    }
    
    /**
     * 인치 변환
     */
    public function inch() {
        return $this->value * 4294.91768;
    }

    /**
     * 간 변환
     */
    public function gan() {
        return $this->value * 60;
    }

    /**
     * 피트 변환
     */
    public function feet() {
        return $this->value * 357.909807;
    }

    /**
     * 푸트 변환
     */
    public function foot() {
        return $this->value * 357.909807;
    }
}