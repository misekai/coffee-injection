<?php
//home_context.php

//to load Class & Interface file when we need them
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//at home
$consumer = new AtHomeConsumer();
$consumer->readyToWork();
