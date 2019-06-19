<?php
//

if (! function_exists('convMeterCenti')) {
    function convMeterCenti($value)
    {
        $unit = Jiny\Convert\Length\Meter::instance();
        return $unit->centi($value);
    }
}