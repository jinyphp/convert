<?php

/** 
 * 
 * jinyphp/convert
 * author : HongRyeoul so 
*/
   
namespace  Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Inch extends Unit
{

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Inch";


	/**
     * 싱글턴
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
     * 센티미터(centimeter) 변환
     */

	public function centi($value=null)
    {
		return $this->conv($value, 2.54);
	}
	
	 /**
     * 미터(meter) 변환
     */

	public function meter($value=null)
    {
		return $this->conv($value, 0.0254);
	}
	
	 /**
     * 피트(feet) 변환
     */

	public function feet($value=null)
    {
		return $this->conv($value, 0.083333);
	}
	
	/**
     * 푸트(foot) 변환
     */

	public function foot($value=null)
    {
		return $this->conv($value, 0.08382);
	}

	/**
     * 정(jung) 변환
     */
	
	public function jung($value=null)
    {
		return $this->conv($value, 0.000233);
	}
	
	/**
     * 간(gan) 변환
     */

	public function gan($value=null)
    {
		return $this->conv($value, 0.01397);
    }

}
