<?php

include 'vendor/autoload.php';


# new objects of the class car
$myCar = new App\Car('Ford', 'Fusion', 2010, 68, 5);
$myCar2 = new App\Car('BMW', 'E46', 2001, 150, 6);

$myTruck = new App\Truck('DAF', 'XF 95', 2004, 410, 6);

# $someCar - variable for objects of class Сar
//$someCar = $myCar;
$someCar = $myTruck;


# tests
echo $someCar->getCarBrand() . PHP_EOL;
echo $someCar->getCarModel() . PHP_EOL;
echo $someCar->getCarYear() . PHP_EOL;
echo $someCar->start() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->reverse() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->down() . PHP_EOL;
echo $someCar->reverse() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->stop() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->up() . PHP_EOL;
echo $someCar->neutral() . PHP_EOL;
echo $someCar->down() . PHP_EOL;


$someCar->show_car();
