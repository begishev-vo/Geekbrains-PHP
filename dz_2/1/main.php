<?php

require 'AbstractGoods.php';
require 'OneGoods.php';
require 'DigitalGoods.php';
require 'WeightGoods.php';

$onePrice = 80;
$goods = [
    new OneGoods('Стул', $onePrice, 5),
    new DigitalGoods('Soft', $onePrice),
    new WeightGoods('Tee', 500, 2),
];

foreach ($goods as $good) {
    echo $good->getName() . ' costs ' . $good->getFinalCost(), "\n";
}