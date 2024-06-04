<?php

require_once __DIR__ . "/product.php";

class Food extends Product {
    private string $taste;
    private int $weight;

    public function __construct(string $_name, float $_price, int $_weight) {
        parent::__construct($_name, $_price);

        $this -> weight = $_weight;
    }

    /**
     * Get the value of weightGr
     *
     * @return int
     */
    public function getWeightGr(): int {
        return $this->weight;
    }

    /**
     * Get the value of taste
     *
     * @return string
     */
    public function getTaste(): string {
        return $this->taste;
    }

    /**
     * Set the value of taste
     *
     * @param string $taste
     *
     */
    public function setTaste(string $_taste): void {
        $this->taste = $_taste;
    }
}