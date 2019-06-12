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
}