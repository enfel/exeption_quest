<?php
include 'bicycle.php';
include 'car.php';

$bike = new Bicycle();
$auto = new Car('yellow', 5,80);


echo $auto->start();
echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(0) . ' km/h' . '<br>';
echo $auto->forward();
echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(10) . ' km/h' . '<br>';

echo $auto->brake();


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setcolor('black');
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

//Instanciation d'un nouvel objet $zoé
$zoé = new Car('blue',10,100);
echo $auto->start();
echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(5) . ' km/h' . '<br>';
echo $auto->forward();
echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(20) . ' km/h' . '<br>';
echo $auto->brake();



