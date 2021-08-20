<?php

namespace App\Career;

class State 
{
    private $games;
    private $goals;
    private $assists;
    private $bruise;
    private $suspencion;

    public function __get($name)
    {
        $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}