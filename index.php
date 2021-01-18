<?php
require 'Product.php';
require 'Notebook.php';

$a = new Product('Телефон', '1500', 'Лучший телефон');
$b = new Notebook('Ноутбук', '20000', 'Самый мощный ноутбук', 'Windows');

$products = [$a, $b];
foreach ($products as $product) {
    $product->view();
}





