<?php

include 'Simple_Product.php';
include 'Product_description.php';

$product=new SimpleProduct("i phone 6s",25000);
echo $product->getName();echo '<br>';
echo $product->getPrice();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$product=new ProductWithDescription("i phone 6s",25000,"This is product description");
echo $product->getName();echo '<br>';
echo $product->getPrice();echo '<br>';
echo $product->getDescription();echo '<br>';



?>