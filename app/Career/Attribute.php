<?php

namespace App\Career;

use Exception;

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

    public function __construct(array $data = [])
    {
        $this->setValues($data);
    }

    /**
     * @param array $data
     * 
     * @throws Exception
     * 
     * @return void
     */
    public function setValues(array $data): void
    {
        foreach ($data as $index => $value)
        {
            if (property_exists($this, $index))
            {
                $this->{$index} = $value;
            }
            else
            {
                throw new Exception("Index {$index} was not found in object Attribute");
            }
        }
    }

    public function __get($name)
    {
        return ($this->$name ?? null);
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name))
        {
            $this->$name = $value;   
        }
        else 
        {
            throw new Exception("Failed attempt to assign a value");
        }
    }
}
