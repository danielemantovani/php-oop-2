<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";

$rabbitCategory = new Category("Rabbit");
$rabbitCategory -> setIcon("fa-solid fa-dragon");

$dogCategory = new Category("Dog");
$dogCategory -> setIcon("fa-solid fa-paw");

var_dump($rabbitCategory);
var_dump($dogCategory);


?>