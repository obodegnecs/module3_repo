<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$fruit = new Fruit();
$apple = new Apple();
$banana = new Banana();
$orange = new Orange();

echo "Fruit size: " . $fruit->getSize() . "</br>";
echo "Fruit colour: " . $fruit->getColour() . "</br>";
echo "Fruit calorie: " . $fruit->getCalorie() . "</br>";

echo "</br>";

echo "Orange size: " . $orange->getSize() . "</br>";
echo "Banana colour: " . $banana->getColour() . "</br>";
echo "Apple calorie: " . $apple->getCalorie() . "</br>";

echo "</br>";

$box = new Box;
$box->add($apple);
$box->add($banana);
$box->add($orange);

echo $box;

$box->empty();

echo $box;

echo "</br>";

$singleton = new Singleton();
$singleton2 = clone $singleton;

echo "</br>";

$db = new PlainTextDatabase();
$logger = new Logger($db);

$logger->debug();
$logger->error();

$car = new Car();
echo $car;
