<?php
/**
 * jinyphp/convert
 * Author: Lee Joo Yeon (leejooy96@gmail.com)
 */
namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Rankine extends Unit
{
    const TYPE="Rankine";

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

    public function celsius($value=null)
    {
        return $this->conv($value, -272.59444);
    }

    public function fahrenheit($value=null)
    {
        return $this->conv($value, -458.67);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 0.555556);
    }
}