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
}