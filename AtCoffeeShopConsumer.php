<?php
//AtCoffeeShopConsumer.php

class AtCoffeeShopConsumer
{
    private $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function readyToWork()
    {
        echo 'I am at the coffee shop!' . PHP_EOL;
        $this->coffee->drink();
    }
}
