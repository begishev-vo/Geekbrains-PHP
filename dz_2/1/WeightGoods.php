<?php

require 'AbstractGoods.php';

class WeightGoods extends AbstractGoods
{
    private $weigth;

    public function __construct($name, $price, $weigth)
    {
        parent::__construct($name, $price);
        $this->weigth = $weigth;
    }

    public function getFinalCost(): float
    {
        return $this->price * $this->weigth;
    }
}