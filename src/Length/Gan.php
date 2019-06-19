<?php

namespace Jiny\Convert\Length;

class Gan
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
        return $this->value * 181.818182;
    }

    public function meter()
    {
        return $this->value * 1.818182;
    }

    public function feet()
    {
        return $this->value * 5.965163;
    }

    public function foot()
    {
        return $this->value * 5.965163;
    }

    public function inch()
    {
        return $this->value * 71.581961;
    }

    public function jung()
    {
        return $this->value * 0.016667;
    }
}