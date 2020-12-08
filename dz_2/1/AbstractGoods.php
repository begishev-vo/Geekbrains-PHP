<?php

abstract class AbstractGoods
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getFinalCost(): float;

    public function getName()
    {
        return $this->name;
    }
}
