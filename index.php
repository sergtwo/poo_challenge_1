<?php


require_once 'Bicycle.php';
$bike = new Bicycle();
//var_dump($bike);

$bike->setColor('blue');
$bike->setCurrentSpeed(15);
//var_dump($bike); // then, another dump.
//echo $bike->getColor();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' .  " <br> \n";
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . "<br> \n";
echo $bike->brake();

//var_dump($bike);
//$bike->dump();

$rockrider = new Bicycle();
$rockrider->setColor('yellow');
//echo $rockrider->getColor();

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor('black');

$tornado->forward();


// Instanciation d'un nouvel objet $newCar
require_once 'Car.php';
$newCar = new Car('green', 4, 'fuel' );// with the 3 arguments constructor


// Moving car
echo $newCar->forward();
echo '<br> Vitesse de la voiture : ' . $newCar->getCurrentSpeed() . ' km/h' .  " <br> \n";
echo $newCar->brake();
echo '<br> Vitesse de la voiture : ' . $newCar->getCurrentSpeed() . ' km/h' .  " <br> \n";
echo $newCar->brake();