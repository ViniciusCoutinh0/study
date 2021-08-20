<?php

namespace App\Career;

class State
{
    /**
     * @var int
    */
    private $games;

    /**
     * @var int
    */
    private $goals;

    /**
     * @var int
    */
    private $assists;

    /**
     * @var bool
    */
    private $bruise;

    /**
     * @var bool
    */
    private $suspencion;

    public function __get($name)
    {
        return ($this->$name ?? null);
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
