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
}