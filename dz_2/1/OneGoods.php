<?php

require 'AbstractGoods.php';

class OneGoods extends AbstractGoods
{
    private $count;

    public function __construct($name, $price, $count)
    {
        parent::__construct($name, $price);
        $this->count = $count;
    }
    public function getFinalCost(): float
    {
        return $this->price * $this->count;
    }

}