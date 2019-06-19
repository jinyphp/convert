<?php
// 길이변환

namespace Jiny\Convert\Length;

use Jiny\Convert\Unit;

class Gan extends Unit
{
    protected $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Gan";

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

    /**
     * 센치미터 변환
     */
    public function centi($value=null)
    {
        return $this->conv($value, 181.818182);
    }
    
    public function meter($value=null)
    {
        return $this->conv($value, 1.818182);
    }

    public function feet($value=null)
    {
        return $this->conv($value, 5.965163);
    }

    public function foot($value=null)
    {
        return $this->conv($value, 5.965163);
    }

    public function inch($value=null)
    {
        return $this->conv($value, 71.581961);
    }

    public function jung($value=null)
    {
        return $this->conv($value, 0.016667);
    }

    /**
     * end of class
     */
}