<?php
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;
    function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
    public function getColor(): string
    {
        return $this->color;
    }
}
class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;
    function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    function getAlcoholPercentage(): string
    {
        return $this->alcoholPercentage;
    }
}
