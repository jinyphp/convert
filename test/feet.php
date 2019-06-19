<?php

require "../../../autoload.php";

use Jiny\Convert\Length\Feet as LengthFeet;

$obj = new Jiny\Convert\Length\Feet(1);
//$obj = new LengthFeet(1);

echo $obj::TYPE."\n";
echo $obj->type()."\n";

echo $obj->centi()."\n";

echo $obj->centi(2)."\n";

// echo convMeterCenti(3);