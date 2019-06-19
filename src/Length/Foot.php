<?php

namespace Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Foot extends Unit
{
    protected $value;
    
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
        return $this->conv($value, 30.48);
    }

    public function feet($value=null)
    {
        return $this->conv($value,1);
    }

    public function meter($value=null)
    {   
        return $this->conv($value,0.3048);
    }

    public function inch($value=null)
    {   
        return $this->conv($value,12);
    }

    public function jung($value=null)
    {   
        return $this->conv($value,0.002794);
    }

    public function gan($value=null)
    {   
        return $this->conv($value,0.16764);
    }

    public function lee($value=null)
    {   
        return $this->conv($value,0.000776);
    }
    
}