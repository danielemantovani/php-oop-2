<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";

$rabbitCategory = new Category("Rabbit");
$rabbitCategory -> setIcon("fa-solid fa-dragon");

$dogCategory = new Category("Dog");
$dogCategory -> setIcon("fa-solid fa-paw");

$foodType = new Food ("Royal Canini", 18.99, 800);

var_dump($rabbitCategory);
var_dump($dogCategory);

var_dump($foodType);


?>