<?php

class Product{
    private string $name;
    private int $price;
    private string $img;

    public function __construct(string $_name, int $_price, string $_img)
    {
        $this -> name = $_name;
        $this -> price = $_price;
        $this -> img = $_img;
    }

}

