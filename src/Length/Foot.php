<?php

namespace Jiny\Convert\Length;

class Foot
{
    private $value;
    
    /**
     * 객체 타입 상수지정
     */
    const TYPE="Foot";

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

    public function centi($value=null)
    {   
        if ($value){
            return $value * 30.48; 
        } else if($this->value) {
            return $this->value * 30.48; 
        }
        
    }

    public function feet($value=null)
    {
        if ($value){
            return $value * 1;
        } else if($this->value) {
            return $this->value * 1;
        }
    }

    public function meter($value=null)
    {   
        if ($value){
            return $value * 0.3048;
        } else if($this->value) {
            return $this->value * 0.3048;
        }
        
    }
    public function inch($value=null)
    {   
        if ($value){
            return $value * 12;
        } else if($this->value) {
        return $this->value * 12;
        }
    }   
    public function jung($value=null)
    {   
        if ($value){
            return $value * 0.002794;
        } else if($this->value){
        return $this->value * 0.002794;
        }
    }
    public function gan($value=null)
    {   
        if ($value){
            return $value * 0.16764;
        } else if($this->value) {
        return $this->value * 0.16764;
        }
    }
    public function lee($value=null)
    {   
        if ($value){
            return $value * 0.000776;
        } else if($this->value) {
        return $this->value * 0.000776;
        }
    }
}