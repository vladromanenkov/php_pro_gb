<?php
class Notebook extends Product
{
    public $system; //Добавит в основной класс тип установленой системы
    public function __construct($name, $price, $content, $system)
    {
        $this->system = $system;
        parent::__construct($name, $price, $content);
    }

    public function view()
    {
        parent::view();
        echo "<p>Операционная система: $this->system</p>";
    }
}