<?php

require_once 'class.php';

$bike = new Bicycle('blue');
$bike->SetCurrentSpeed(0);
$car = New Car('red', 2, 'fuel');

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->GetCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->GetCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

// Moving car
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->GetCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

var_dump($bike);

var_dump($car);
