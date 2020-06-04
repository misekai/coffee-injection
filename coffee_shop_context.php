<?php
//coffee_shop_context.php

//to load Class & Interface file when we need them
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//at the coffee shop
$egg = new Egg();
$coffee = new EggCoffee($egg);
$consumer = new AtCoffeeShopConsumer($coffee);
$consumer->readyToWork();
