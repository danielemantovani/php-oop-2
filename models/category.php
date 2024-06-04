<?php

class Category{
    private string $name;
    private string $icon;

    public function __construct(string $_name) {
        $this->name = $_name;
    }

        /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Set the value of icon
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon){
        $this->icon = $icon;
        return $this;
    }

    /**
     * Get the value of icon
     *
     * @return string
     */
    public function getIcon(): string {
        return $this->icon;
    }


}