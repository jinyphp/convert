<?php

/** 
 * 속도변환
 * jinyphp/convert
 * author : HongRyeoul so 
*/
   
namespace  Jiny\Convert\Speed;

use Jiny\Convert\Unit;

class In_s extends Unit
{

    /**
    * 객체 타입 상수지정
    */
    const TYPE="In_s";

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
        return $this->conv($value, 0.0254);
    }
    // m/h 변환 
    public function m_h($value=null)
    {
        return $this->conv($value, 91.44);
    
    }
    // km_s변환 
    public function km_s($value=null)
    {
        return $this->conv($value, 0.000025);
    
    }
    // km_h변환
    public function km_h($value=null)
    {
        return $this->conv($value, 0.09144);
    
    }
    // in_h변환
    public function in_h($value=null)
    {
        return $this->conv($value, 3,600);
    }
   
	
	

}
