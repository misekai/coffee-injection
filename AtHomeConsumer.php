<?php
//AtHomeCustomer.php

class AtHomeConsumer
{
    public function readyToWork()
    {
        echo 'I am stay at home!' . PHP_EOL;
        $egg = new Egg();
        $coffee = new EggCoffee($egg);
        $coffee->drink();
    }
}
