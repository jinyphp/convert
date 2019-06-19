<?php

namespace  Jiny\Convert\area;

class SqureMeter
{
    private $value;

     /**
     * 객체 타입 상수지정 const
     */
    const TYPE="SqureMeter";

    public function type()
    {
        return self::TYPE;
    }

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }

        return self::$Instance;
    }

     /**
     * 값 지정
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * 값 출력
     */
    public function getValue()
    {
        return $this->value;
    }

    public function __construct($value=null)
    {
       if($value){
         $this->value = $value;
       }       
    }

    public function __invoke()
    {
       return $this->value;
    }

    // 아르변환
    public function are($value=null)
    {
      if ($value) {
         // 입력한 값 기준으로 계산
         return $value * 0.01;
     } else if($this->value) {
         // 설정 프로퍼티 기준으로 계산
         return $this->value * 0.01;
     }

     // 계산불가
     return null;
   }

   // 헥타르변환
   public function hectAre($value=null)
   {
     if ($value) {
        // 입력한 값 기준으로 계산
        return $value * 0.0001;
    } else if($this->value) {
        // 설정 프로퍼티 기준으로 계산
        return $this->value * 0.0001;
    }

    // 계산불가
    return null;
  }

     // 제곱킬로미터변환
     public function squreKilo($value=null)
     {
       if ($value) {
          // 입력한 값 기준으로 계산
          return $value * 1e-6;
      } else if($this->value) {
          // 설정 프로퍼티 기준으로 계산
          return $this->value * 1e-6;
      }
  
      // 계산불가
      return null;
    }

 // 제곱피트변환
 public function squreFeet($value=null)
 {
   if ($value) {
      // 입력한 값 기준으로 계산
      return $value * 10.76391;
  } else if($this->value) {
      // 설정 프로퍼티 기준으로 계산
      return $this->value * 10.76391;
  }

  // 계산불가
  return null;
}

// 제곱야드변환
public function squreYard($value=null)
{
  if ($value) {
     // 입력한 값 기준으로 계산
     return $value * 1.19599;
 } else if($this->value) {
     // 설정 프로퍼티 기준으로 계산
     return $this->value * 1.19599;
 }

 // 계산불가
 return null;
}

  // 평변환
  public function pyeong($value=null)
  {
    if ($value) {
       // 입력한 값 기준으로 계산
       return $value * 0.3025;
   } else if($this->value) {
       // 설정 프로퍼티 기준으로 계산
       return $this->value * 0.3025;
   }

   // 계산불가
   return null;
 }

}

// 제곱미터 SqureMeter
// 아르 anAre
// 핵타르 hectare
// 제곱킬로미터
// 제곱피트
// 제곱야드
// 에이커
// 평방자
// 평
// 단보
// 정보

