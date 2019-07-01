<?php
/**
 * jinyphp/convert
 * Author: Lee Joo Yeon (leejooy96@gmail.com)
 */
namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Kelvin extends Unit
{
    const TYPE="Kelvin";

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
        return $this->conv($value, -272.15);
    }

    public function fahrenheit($value=null)
    {
        return $this->conv($value, -457.87);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 1.8);
    }
}