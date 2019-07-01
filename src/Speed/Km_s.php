<?php

/** 
 * 속도변환
 * jinyphp/convert
 * author : HongRyeoul so 
*/
   
namespace  Jiny\Convert\Speed;

use Jiny\Convert\Unit;

class Km_s extends Unit
{

    /**
    * 객체 타입 상수지정
    */
    const TYPE="Km_s";

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
    
    // m/s 변환    
    public function m_s($value=null)
    {
        return $this->conv($value, 1,000);
    } 
    // m/h 변환
    public function m_h($value=null)
    {
        return $this->conv($value, 3,600,000);
    } 
    // km_h변환
    public function km_h($value=null)
    {
        return $this->conv($value, 3,600);
    }   
    // in_s변환
    public function in_s($value=null)
    {
        return $this->conv($value, 39,370.0787);
    }
    // in_h변환 
    public function in_h($value=null)
    {
        return $this->conv($value, 141,732,283);
    }
   
	
	

}
