<?php

require 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);


require 'Bike.php';
$bike = new Bike('blue', 1);
echo $bike->forward();
var_dump($bike);


require 'Truck.php';
$truck = new Truck('red', 2, 'fuel');
echo $truck->forward();
var_dump($truck);
var_dump(Truck::ALLOWED_ENERGIES);
echo $truck->isFull();

