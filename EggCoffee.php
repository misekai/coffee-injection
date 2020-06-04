<?php
//EggCoffee.php

class EggCoffee implements CoffeeInterface
{
    private $egg;

    public function __construct(Egg $egg)
    {
        $this->egg = $egg;
    }

    public function drink()
    {
        $this->egg->taste();
        echo 'I am awaken with egg coffee!' . PHP_EOL;
    }
}
