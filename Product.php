<?php

class Product
{
    public $name;
    public $price;
    public $content;
    function __construct($name, $price, $content)
    {
        $this->name = $name;
        $this->price = $price;
        $this->content = $content;
    }

    function view() {
        echo "<h1>$this->name</h1>
              <p>Цена: $this->price</p>
              <p>Описание продукта: $this->content</p>";
    }
}
