<?php

class Food extends Product {

    public $type;

    function __construct(string $title, float $price, string $description, string $img, string $type, Category|null $category) {
        
        parent::__construct($title, $price, $description, $img, $category);

        $this->type = $type;
    }      
}