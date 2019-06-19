<?php

namespace Jiny\Convert\Length;

class Foot
{
    private $value;
    
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __invoke()
    {
        return $this->value;
    }

    public function centi()
    {   
        return $this->value * 30.48;
    }

    public function feet()
    {   
        return $this->value;
    }

    public function meter()
    {   
        return $this->value * 0.3048;
    }
    public function inch()
    {   
        return $this->value * 12;
    }
    public function jung()
    {   
        return $this->value * 0.002794;
    }
    public function gan()
    {   
        return $this->value * 0.16764;
    }
    public function lee()
    {   
        return $this->value * 0.000776;
    }
}