<?php
/**
 * jinyphp/convert
 * Author: Lee Joo Yeon (leejooy96@gmail.com)
 */
namespace Jiny\Convert\Temperature;

use Jiny\Convert\Unit;

class Fahrenheit extends Unit
{
    const TYPE="Fahrenheit";

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
        return $this->conv($value, -17.222222);
    }

    public function kelvin($value=null)
    {
        return $this->conv($value, 255.927778);
    }

    public function rankine($value=null)
    {
        return $this->conv($value, 460.67);
    }
}