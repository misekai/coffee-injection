<?php
//coffee_shop_rainy_day_context.php

//to load Class & Interface file when we need them
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//at the coffee shop in a rainy day
$egg = new Egg();
$coffee = new EggCoffee($egg);
$sweeterCoffee = new SweeterCoffee($coffee);
$consumer = new AtCoffeeShopConsumer($sweeterCoffee);
$consumer->readyToWork();
