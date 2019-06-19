<?php

require "../../../autoload.php";

$obj = new Jiny\Convert\Length\Meter(1);

echo $obj::TYPE."\n";
echo $obj->type()."\n";
echo $obj->centi()."\n";
echo $obj->centi(2)."\n";
