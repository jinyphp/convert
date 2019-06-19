<?php

namespace Jiny\Convert;

abstract class Unit
{
    abstract public function setValue($value);
    abstract public function getValue();

    public function conv($value, $rate)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * $rate;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * $rate;
        }

        // 계산불가
        return null;
    }
}
