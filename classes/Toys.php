<?php

include_once __DIR__ . '/../traits/Discount.php';

class Toys extends Product {

    use HasDiscount;

    public $type;

    function __construct(string $title, float $price, string $description, string $img, string $type, Category|null $category) {
        
        parent::__construct($title, $price, $description, $img, $category);

        $this->type = $type;
    }      
}