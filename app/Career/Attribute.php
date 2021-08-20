<?php

namespace App\Career;

class Attribute
{
    /**
     * @var int
    */
    private $height;

    /**
     * @var int
    */
    private $weight;

    /**
     * @var string
    */
    private $position;

    /**
     * @var string
    */
    private $function;

    /**
     * @var string
    */
    private $styleOfGame;

    /**
     * @var string
    */
    private $goodLeg;

    public function __get($name)
    {
        return ($this->$name ?? null);
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
