<?php

require_once __DIR__ . "/models/product.php";

$product1 = new Product("Ciotola", 25, "ciotola.png");
$product2 = new Product("Fieno", 4,50, "fieno.png");

var_dump($product1);
var_dump($product2);


?>