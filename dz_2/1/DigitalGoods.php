<?php

require 'AbstractGoods.php';

class DigitalGoods extends AbstractGoods
{
    public function __construct($name, $onePrice)
    {
        parent::__construct($name, $onePrice / 2);
    }

    public function getFinalCost(): float
    {
        return $this->$price;
    }
}