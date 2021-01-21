<?php
require 'Product.php';
require 'DigitalProducts.php';
require 'WeightProduсts.php';
require 'PieceProducts.php';

$prodDigital = new DigitalProducts();
$prodPiece = new PieceProducts();
$prodWeight = new WeightProduсts();

$prodWeight->setWeightKg(5.5);

echo "Стоимость цифрового товара {$prodDigital->getSum()} <br/>";
echo "Стоимость штучного товара {$prodPiece->getSum()} <br/>";
echo "Стоимость весового товара {$prodWeight->getSum()} <br/>";
