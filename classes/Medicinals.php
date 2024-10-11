<?php

class Medicinals extends Product {
    
    public $variant;

    function __construct(string $title, float $price, string $description, string $img, string $variant, Category|null $category) {
        
        parent::__construct($title, $price, $description, $img, $category);

        $this->variant = $variant;
    }      
}