<?php


class PieceProducts extends Product
{
    public function getSum()
    {
        return self::$price;
    }
}