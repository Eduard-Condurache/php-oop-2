<?php

class Toys extends Product {

    public $material;

    function __construct(string $title, float $price, string $description, string $img, string $material, Category|null $category) {
        
        parent::__construct($title, $price, $description, $img, $category);

        $this->material = $material;
    }      
}