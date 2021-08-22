<?php

namespace App\Career;

use Exception;

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

    function __construct(array $data = [])
    {
        $this->setValues($data);
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
                throw new Exception("Index {$index} was not found in object State");
            }
        }
    }
}
