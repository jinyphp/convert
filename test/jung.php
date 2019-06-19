<?php

require "../../../autoload.php";

use Jiny\Convert\Length\Jung as LengthJung;

// $obj = new Jiny\Convert\Length\Jung(1);
$obj = new LengthJung(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 센치미터 변환
echo $obj->centi()."\n";

// 직접 지정
echo $obj->centi(2)."\n";

// 헬퍼함수 처리
// echo convJungCenti(3)."\n";
