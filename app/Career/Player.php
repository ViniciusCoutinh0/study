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

    /**
     * @var App\Career\Attribute
    */
    private $attributes;

    /**
     * @var App\Career\State
    */
    private $state;

    public function __get($name)
    {
        return ($this->$name ?? null);
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * @param App\Career\Attribute $attributes
     * @return void
    */
    public function setAttributes(Attribute $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param App\Career\State $state
     * @return void
    */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
    */
    public function render()
    {
        //
    }
}
