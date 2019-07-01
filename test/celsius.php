<?php

require "../../../autoload.php";

use Jiny\Convert\Temperature\Celsius as TemperatureCelsius;

// $obj = new Jiny\Convert\Temperature\Celsius(1);
$obj = new TemperatureCelsius(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 센치미터 변환
echo $obj->fahrenheit()."\n";

// 직접 지정
echo $obj->kelvin(2)."\n";

// 헬퍼함수 처리
//echo convCelsiusKelvin(3);
