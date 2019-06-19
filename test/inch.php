<?php

require "../../../autoload.php";

use Jiny\Convert\Length\Inch as LengthInch;

// $obj = new Jiny\Convert\Length\Meter(1);
$obj = new LengthInch(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

//  변환
echo $obj->centi()."\n";

echo $obj->feet()."\n";

echo $obj->foot()."\n";

echo $obj->gan()."\n";

echo $obj->jung()."\n";

echo $obj->meter()."\n";

// 직접 지정
echo $obj->centi(2)."\n";

// 헬퍼함수 처리
// echo convMeterCenti(3)."\n";

