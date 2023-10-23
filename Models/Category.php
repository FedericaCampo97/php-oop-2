<?php

class Category
{

    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getIcon(): string
    {
        return $this->icon;
    }

    public function setName($new_name): void
    {
        $this->name = $new_name;
    }
}
