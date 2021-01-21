<?php


abstract class Product
{
    protected static $price = 100;

    abstract public function getSum();
}