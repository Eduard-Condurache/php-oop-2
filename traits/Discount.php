<?php

trait HasDiscount {
    private $discount = 20;

    public function getDiscount() {
        return $this->discount;
    }

    public function getDiscountedPrice() {
        return round($this->price - ($this->price * $this->discount / 100), 2);
    }
}