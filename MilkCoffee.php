<?php
//MilkCoffee.php

class MilkCoffee implements CoffeeInterface
{
    private $milk;

    public function __construct(Milk $milk)
    {
        $this->milk = $milk;
    }
    public function drink()
    {
        $this->milk->taste();
        echo 'I am awaken with milk coffee!' . PHP_EOL;
    }
}
