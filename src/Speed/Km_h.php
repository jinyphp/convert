<?php

/*
 * This file is part of the jinyPHP package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * contributor : HongRyeoul so
 */
   
namespace  Jiny\Convert\Speed;

use Jiny\Convert\Unit;

class Km_h extends Unit
{

    /**
    * 객체 타입 상수지정
    */
    const TYPE="Km_h";

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
    //m/s 변환  
    public function m_s($value=null)
    {
        return $this->conv($value, 0.277778);
    } 
    //m/h 변환
    public function m_h($value=null)
    {
        return $this->conv($value, 1,000);
    } 
    //km_s변환
    public function km_s($value=null)
    {
        return $this->conv($value, 0.000278);
    }
    //in_s변환
    public function in_s($value=null)
    {
        return $this->conv($value, 10.936133);
    }
    //in_h변환    
    public function in_h($value=null)
    {
        return $this->conv($value, 39,370.0787);
    }

}
