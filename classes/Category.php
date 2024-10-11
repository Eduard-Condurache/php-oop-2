<?php

class Category {
    public $name;
    public $icon;

    function __construct(string $name, string $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}