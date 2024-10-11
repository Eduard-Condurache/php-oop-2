<?php

class Product {
    private $title; 
    private $price; 
    private $description;
    private $img;
    protected $category;

    function __construct(string $title, float $price, string $description, string $img, Category|null $category) {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
        $this->setCategory($category);
    }
  
    // GETTER

    public function getCategory() {
        return $this->category;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }


    public function getImg() {
        return $this->img;
    }

    public function getDescription() {
        return $this->description;
    }

    // SETTER

    public function setCategory(Category|null $category) {
        $this->category = $category;
    }

}