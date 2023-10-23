<?php

require_once __DIR__  . '/Product.php';

class Food extends Product
{
    public $calories;
    public $expiration_date;

    public function __construct($id, $name, $price, Category $category, $image, $short_description, $expiration_date)
    {

        parent::__construct($id, $name, $price, $category, $image, $short_description);

        $this->expiration_date = $expiration_date;
    }


    public function getClassName()
    {
        return get_class();
    }


    function setCalories()
    {
    }
}
