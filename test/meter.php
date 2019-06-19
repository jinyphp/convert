<?php

require "../../../autoload.php";

use Jiny\Convert\Length\Meter as LengthMeter;

//$obj = new Jiny\Convert\Length\Meter(1);
$obj = new LengthMeter(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 센치미터 변환
echo $obj->centi()."\n";

// 직접 지정
echo $obj->centi(2)."\n";

// 헬퍼함수 처리
 echo convMeterCenti(3);
 echo convMeterCenti(4);
 echo convMeterCenti(5);
