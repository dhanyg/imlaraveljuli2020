<?php
class Animal
{
    protected $name;
    protected $legs = 2;
    protected $cold_blooded = false;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getColdBlooded()
    {
        if (!$this->cold_blooded) {
            return 'false';
        }
        return $this->cold_blooded;
    }
}
