<?php

namespace App\Career;

class Attribute
{
    private $height;
    private $weight;
    private $position;
    private $function;
    private $styleOfGame;
    private $goodLeg;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}