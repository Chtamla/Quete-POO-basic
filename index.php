<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Truck.php';

$car = new Car('pink', 5, 'electric');

$MotorWayRoad = new MotorWay();
var_dump($MotorWayRoad);

$MotorWayRoad->addVehicle($car);
var_dump($MotorWayRoad);


$PedestrianWayRoad = new PedestrianWay();
var_dump($PedestrianWayRoad);


$ResidentialWayRoad = new ResidentialWay();
var_dump($ResidentialWayRoad);
