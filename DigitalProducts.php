<?php


class DigitalProducts extends Product
{
    public function getSum()
    {
        return self::$price / 2;
    }
}