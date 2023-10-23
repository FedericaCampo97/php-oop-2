<?php
trait Namable
{
    public function getPrice(): string
    {
        return '€' . $this->price;
    }

    public function setPrice($new_price)
    {
        $this->price = $new_price;
    }
}
