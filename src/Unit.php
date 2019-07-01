<?php
/*
 * This file is part of the jinyPHP package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jiny\Convert;

abstract class Unit
{
    protected $value;

    public function type()
    {
        return self::TYPE;
    }

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }

        return self::$Instance;
    }

    /**
     * 값 지정
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * 값 출력
     */
    public function getValue()
    {
        return $this->value;
    }

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
