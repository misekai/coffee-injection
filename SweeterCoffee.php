<?php
//SweeterCoffee.php

class SweeterCoffee implements CoffeeInterface
{
    private $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }
    public function drink()
    {
        echo 'It feel sweeter..!' . PHP_EOL;
        return $this->coffee->drink();
    }

}
