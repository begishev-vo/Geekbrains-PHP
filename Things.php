<?php

class Things
{
    public $artNumber;
    public $category;
    public $name;
    public $quantityInPack;
    public $price;

    function __construct($artNum, $categ, $name, $qty, $price)
    {
        $this->artNumber = $artNum;
        $this->category = $categ;
        $this->name = $name;
        $this->quantityInPack = $qty;
        $this->price = $price;
    }

    function about()
    {
        $info  = "арт. {$this->artNumber}; ";
        $info .= "кат. {$this->category}; ";
        $info .= "наим. {$this->name}; ";
        $info .= "упак. {$this->quantityInPack} табл.; ";
        $info .= "цена {$this->price} руб. ";
        return $info;
    }

}
class ProductBox extends Things
{
    public $size;

    public function __construct ($artNum, $categ, $name, $qty, $price, $size )
    {
        parent::__construct($artNum, $categ, $name, $qty, $price);
        $this->size = $size;
    }
    function about()
    {
        $info  = "арт. {$this->artNumber}; ";
        $info .= "кат. {$this->category}; ";
        $info .= "наим. {$this->name}; ";
        $info .= "упак. {$this->quantityInPack} табл.; ";
        $info .= "цена {$this->price} руб.";
        $info .= "размер {$this->size} ш.д.в. ";
        return $info;
    }
}
$arr = [
    new Things(32, "Пищевые", "Йогурт", 90, 130),
    new ProductBox (2, "Непищевые", "коробка", 9, 30, '10x30x50'),
];
foreach ($arr as $things) {
    echo $things->about()."<br/>";
}


