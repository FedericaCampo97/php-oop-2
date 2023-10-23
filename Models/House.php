<?php
require_once __DIR__  . '/Product.php';

class House extends Product
{
    public $style;
    public function __construct($id, $name, $price, Category $category, $image, $short_description, $style)
    {
        parent::__construct($id, $name, $price, $category, $image, $short_description);
        $this->style = $style;
    }

    public function getClassName()
    {
        return get_class();
    }
}
