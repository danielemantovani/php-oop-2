<?php

require_once __DIR__  . "/category.php";
class Product{
    private string $name;
    // float numero con la virgola
    private float $price;
    private string $img;
    public Category $category;

    public function __construct(string $_name, float $_price)
    {
        if ($_name === ""){
            throw new Exception("Il nome deve conterere dei caratteri");
        }
        $this -> name = $_name;

        if($_price <= 0){
            throw new Exception("Il prezzo non può essere minore o uguale a 0");
        }
        $this -> price = $_price;
    }


    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Get the value of price
     *
     * @return float
     */
    public function getPrice(): float {
        return $this->price;
    }

    /**
     * Get the value of img
     *
     * @return string
     */
    public function getImg(): string {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @param string $img
     *
     */
    public function setImg(string $_img): void {
        $this->img = $_img;
    }
}

