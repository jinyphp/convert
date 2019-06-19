<?php
namespace  Jiny\Convert\Length;

class Feet
{
    private $value;

    /**
     * 객체 타입 상수지정 const
     */
    const TYPE="Feet";

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

    // $value
    //    public function __construct()
    //    {
    //        return $this->value * 3.97;
    //    }

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

    // 센치변환
<<<<<<< HEAD
    public function centi($value=null)
=======
    public function centi()
>>>>>>> main/master
    {
      if ($value) {
         // 입력한 값 기준으로 계산
         return $value * 30.48;
     } else if($this->value) {
         // 설정 프로퍼티 기준으로 계산
         return $this->value * 30.48;
     }

     // 계산불가
     return null;
   }

    // 미터변환
    public function meter($value=null)
    {
       if($value) {
          return $value * 0.3048;
       } else if($this->value) {
          return $this->value * 0.3048;
       }    
       
       return null;
    }

    // 킬로변환
    public function kilo($value=null)
    {
      if($value) {
         return $value * 0.000305;
      } else if($this->value) {
         return $this->value * 0.000305;
      }    
      
      return null;
   }

    // 인치변환
    public function inch($value=null)
    {
      if($value) {
         return $value * 12;
      } else if($this->value) {
         return $this->value * 12;
      }    
      
      return null;   
   }

    //야드변환
    public function yard($value=null)
    {
      if($value) {
         return $value * 0.333333;
      } else if($this->value) {
         return $this->value * 0.333333;
      }    
      
      return null;       
    }

<<<<<<< HEAD
    //간변환
    public function gan($value=null)
    {
      if($value) {
         return $value * 0.16764;
      } else if($this->value) {
         return $this->value * 0.16764;
      }    
      
      return null; 
   }

    //정변환
    public function jung($value=null)
    {
      if($value) {
         return $value * 0.002794;
      } else if($this->value) {
         return $this->value * 0.002794;
      }    
      
      return null;       
   }
=======
    // 미터변환
    public function meter()
    {
       return $this->value * 0.3048;
    }

    // 킬로변환
    public function kilo()
    {
       return $this->value * 0.000305;
    }

    // 인치변환
    public function inch()
    {
       return $this->value * 12;
    }

    //야드변환
    public function yard()
    {
       return $this->value * 0.333333;
    }

    //간변환
    public function gan()
    {
       return $this->value * 0.16764;
    }

    //정변환
    public function jung()
    {
       return $this->value * 0.002794;
    }
>>>>>>> main/master

}