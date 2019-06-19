<?php
namespace  Jiny\Convert\Length;

class Inch
{
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Inch";

    public function type()
    {
        return self::TYPE;
	}

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

	/**
     * 센티미터(centimeter) 변환
     */

	public function centi($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 2.54;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 2.54;
        }

        // 계산불가
        return null;
	}
	
	 /**
     * 미터(meter) 변환
     */

	public function meter($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.0254;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.0254;
        }

        // 계산불가
        return null;
	}
	
	 /**
     * 피트(feet) 변환
     */

	public function feet($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.083333;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.083333;
        }

        // 계산불가
        return null;
	}
	
	/**
     * 푸트(foot) 변환
     */

	public function foot($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.08382;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.08382;
        }

        // 계산불가
        return null;
	}

	/**
     * 정(jung) 변환
     */
	
	public function jung($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.000233;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.000233;
        }

        // 계산불가
        return null;
	}
	
	/**
     * 간(gan) 변환
     */

	public function gan($value=null)
    {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 0.01397;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 0.01397;
        }

        // 계산불가
        return null;
    }

}
