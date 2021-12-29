<?php
include 'car.php';

$auto = new Car('yellow', 5,80, false);

try{
    echo $auto->start();
    echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(15) . ' km/h' . '<br>';
}
catch(Exception $e){
    echo setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}
/*
echo $auto->forward();
echo '<br> Vitesse de la voiture : '.$auto->getCurrentSpeed(10) . ' km/h' . '<br>';

echo $auto->brake();*/



