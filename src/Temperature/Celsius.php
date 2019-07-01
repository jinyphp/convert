<?php
/**
 * jinyphp/convert
 * Author: Lee Joo Yeon (leejooy96@gmail.com)
 */
namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Celsius extends Unit
{    
    const TYPE="Celsius";
    
    public function type()
    {
        return self::TYPE;
    }
    
    /**
     * Initialize
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

    public function fahrenheit($value=null)
    {
        return $this->conv($value, 33.8);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 274.15);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 493.47);
    }
}