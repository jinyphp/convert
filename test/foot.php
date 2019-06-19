<?php

require "../../../autoload.php";

use Jiny\Convert\Length\Foot as LengthFoot;

// $obj = new Jiny\Convert\Length\Foot(1);
$obj = new LengthFoot(1);

// 타입확인
echo $obj::TYPE."\n";
echo $obj->type()."\n";

// 센치미터 변환
echo $obj->centi()."\n";

// 직접 지정
echo $obj->centi(2)."\n";

// 헬퍼함수 처리
echo convFootCenti(3);
