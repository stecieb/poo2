<?php
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'truck.php';

$cars = new Cars('green', 4, 'electric');
echo $cars->forward();
var_dump($cars);

var_dump(Cars::ALLOWED_ENERGIES);

$truck = new Truck(15, 'green', 4, 'fuel');
echo $truck->isLoaded();
var_dump($truck);
?>