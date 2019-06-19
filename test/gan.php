<?php

require "../../../autoload.php";

// 별칭
use Jiny\Convert\Length\Gan as LengthGan;

$obj = new Jiny\Convert\Length\Gan(1);
$obj = new LengthGan(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 센치미터 변환
echo $obj->centi()."\n";

// 직접 지정
echo $obj->centi(2)."\n";

// 헬퍼함수 처리
echo convGanCenti(3);