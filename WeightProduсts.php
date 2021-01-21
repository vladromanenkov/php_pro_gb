<?php


class WeightProduсts extends Product
{
    private $weightKg = 0;

    public function __construct()
    {
        $this->weightKg = 0;
    }

    public function setWeightKg($weightKg)
    {
        $this->weightKg = $weightKg;
    }

    public function getWeightKg($weightKg)
    {
        $this->weightKg = $weightKg;
    }

    public function getSum()
    {
        return $this->weightKg * self::$price;
    }
}