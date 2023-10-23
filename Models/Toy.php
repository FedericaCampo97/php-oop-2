<?php

require_once __DIR__  . '/Product.php';

class Toy extends Product
{
    public $material_type;
    public function __construct($id, $name, $price, Category $category, $image, $short_description, $material_type)
    {

        parent::__construct($id, $name, $price, $category, $image, $short_description);

        $this->material_type = $material_type;
    }

    public function getClassName()
    {
        return get_class();
    }
}
