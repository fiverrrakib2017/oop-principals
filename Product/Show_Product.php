<?php

include 'Simple_Product.php';


$product=new SimpleProduct("i phone 6s",25000);
echo $product->getName();echo '<br>';
echo $product->getPrice();


?>