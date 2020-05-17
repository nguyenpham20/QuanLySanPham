<?php
//su dung namespace
namespace Models;
//khoi tao lop
class Product {
    private $name;
    private $price;
//dn ham khoi tao
    public function __construct($name = NULL, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
//dn ham setname
    public function setName($name) {
            $this->name = $name;
    }
    //dn ham getname
    public function getName() {
        return$this->name;
    }
   // dn ham set price
    public function setPrice($price) {
        $this->price = $price;
    }
    //dn ham getprice
    public function getPrice() {
        return $this->price;
    }
}
