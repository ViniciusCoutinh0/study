<?php

namespace App\Career;

use Exception;

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

    public function __construct(array $data = [])
    {
        foreach ($data as $index => $value)
        {
            if (property_exists($this, $index))
            {
                $this->{$index} = $value;
            }
            else
            {
                throw new Exception("Index {$index} was not found in object Player");
            }
        }

        if (is_object($this->attributes) and get_class($this->attributes) == "App\Career\Attribute")
        {
            $attributes = $this->attributes;
        }
        elseif (is_array($this->attributes))
        {
            $attributes = new Attribute($this->attributes);
        }
        elseif (is_null($this->attributes))
        {
            $attributes = new Attribute;
        } 
        else
        {
            throw new Exception("Attribute values are invalid");
        }

        $this->attributes = $attributes;

        if (is_object($this->state) and get_class($this->state) == "App\Career\State")
        {
            $state = $this->state;
        }
        elseif (is_array($this->state))
        {
            $state = new State($this->state);
        }
        elseif (is_null($this->state))
        {
            $state = new State;
        } 
        else
        {
            throw new Exception("State values are invalid");
        }

        $this->state = $state;
    }

    public function __get($name)
    {
        return ($this->$name ?? null);
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name))
        {
            $this->{$name} = $value;
        }
    }

    /**
     * @param mixed $data
     * @param mixed $value
     * 
     * @throws Exception
     * 
     * @return void
    */
    public function setAttributes(mixed $data, mixed $value = null): void
    {
        if (is_object($data) and get_class($this->attributes) == "App\Career\Attribute")
        {
            $this->attributes = $data;
        }
        elseif (is_array($data)) 
        {
            $this->attributes->setValues($data);
        }
        elseif (is_string($data))
        {
            $this->attributes->{$data} = $value;
        }
        else
        {
            throw new Exception("Failed attempt to assign a value");
        }
    }

    /**
     * @param mixed $data
     * @param mixed $value
     * 
     * @throws Exception
     * 
     * @return void
    */
    public function setState(mixed $data, mixed $value = null): void
    {
        if (is_object($data) and get_class($this->state) == "App\Career\State")
        {
            $this->state = $data;
        }
        elseif (is_array($data)) 
        {
            $this->state->setValues($data);
        }
        elseif (is_string($data))
        {
            $this->state->{$data} = $value;
        }
        else
        {
            throw new Exception("Failed attempt to assign a value");
        }
    }

    /**
     * @return string
    */
    public function render()
    {
        //
    }
}
