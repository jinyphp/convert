<?php

/** 
 * 속도변환
 * jinyphp/convert
 * author : HongRyeoul so 
*/
   
namespace  Jiny\Convert\Speed;

use Jiny\Convert\Unit;

class M_h extends Unit
{

    /**
    * 객체 타입 상수지정
    */
    const TYPE="M_h";

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
        return $this->conv($value, 0.000278);
    } 
    // km/s 변환
    public function km_s($value=null)
    {
        return $this->conv($value, 2.7778e-7);
    } 
    // km_h변환
    public function km_h($value=null)
    {
        return $this->conv($value, 0.001);
    }
    // in_s변환
    public function in_s($value=null)
    {
        return $this->conv($value, 0.010936);
    }
    // in_h변환    
    public function in_h($value=null)
    {
        return $this->conv($value, 39.370079);
    }
   
	
	

}
