<?php
class Products{
    public $prodImg;
    public $name;
    public $brand;
    public $description;
    public $price;
    
    function __construct($_prodImg,$_name,$_brand,$_description,$_price)
    {
        $this->prodImg = $_prodImg;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->price = $_price;
    }
}
