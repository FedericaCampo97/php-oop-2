<?php

class Product
{
    public $category;
    public function __construct($id, $name, $price, Category $category, $image, $short_description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
        $this->short_description = $short_description;
    }

    public function getClassName()
    {
        return get_class();
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getImagePath(): string
    {
        return $this->image;
    }

    public function getPrice(): string
    {
        return '€' . $this->price;
    }
}
