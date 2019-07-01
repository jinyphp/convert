<?php
/*
 * This file is part of the jinyPHP package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * contributor : 
 */

namespace Jiny\Convert\Length;
use Jiny\Convert\Unit;
class Meter extends Unit
{
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Meter";
    /**
     * 초기화
     */
    public function __construct($value=null)
    {
        if ($value) {
            $this->value = $value;
        }
    }
    public function __invoke()
    {
        return $this->value; 
    }
    /**
     * 센치미터 변환
     */
    public function centi($value=null)
    {
        return $this->conv($value, 100);
    }
    /**
     * end of class
     */
}