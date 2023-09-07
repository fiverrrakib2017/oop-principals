<?php

class Product {
    public $name=NULL;
    public $price=NULL;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}

//suppose we add new feature 

class ProductWithDescription extends Product{
    public $description=NULL;
    public function __construct($name, $price,$description){
        parent::__construct($name, $price);
        $this->description = $description;
    }
    public function getInformation(){
        echo '<b>--------Product Information----------</b><br>';
        echo 'Name:'.$this->name."<br>";
        echo 'Price:'.$this->price."<br>";
        echo 'Description:'.$this->description."<br>";
    }
}


$newproduct=new ProductWithDescription('Laptop', 1000, 'Powerful laptop with high-speed processor');

$newproduct->getInformation();





?>