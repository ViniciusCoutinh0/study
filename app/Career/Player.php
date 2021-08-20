<?php

namespace App\Career;

class Player
{
    /**
     * @var string
    */
    private $name;
    
    /**
     * @var string
    */
    private $lastname;

    /**
     * @var string
    */
    private $nacionality;
    
    /**
     * @var string
    */
    private $uniformName;
    
    /**
     * @var int
    */
    private $uniformNumber;

    /**
     * @var int
    */
    private $birthYear;

    /**
     * @var int
    */
    private $birthMonth;

    /**
     * @var int
    */
    private $birthDay;

    private $attributes;
    private $state;

    public function __get($name)
    {
        $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function setAttributes(Attribute $attributes)
    {
        $this->attributes = $attributes;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function render(): string
    {
        return $this->attributes->weight;
    }
}