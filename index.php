<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\HighWay\MotorWay;
use src\HighWay\PedestrianWay;
use src\HighWay\ResidentialWay;
use src\Vehicule\Bicycle;
use src\Vehicule\Car;
use src\Vehicule\Truck;


$porsche = new Car("red", 4, "essence", true);
$vtt = new Bicycle('yellow', 1);

$routeDuSoleil = new MotorWay;
$ruePietonne = new PedestrianWay;
$jeanJaures = new ResidentialWay;

echo 'Vous arrivé sur autoroute. Vous roulez avec une porsche ...<br />';
$routeDuSoleil->addVehicule($porsche);
echo 'Bonne route <br /><br />';

echo 'Vous arrivé sur autoroute. Vous êtes en vélo...<br />';
$routeDuSoleil->addVehicule($vtt);
echo 'Vous voulez mourir ou quoi ? faites demi tour de suite.<br /><br />';

echo 'Vous arrivé sur une rue piétionne. Vous êtes en vélo...<br />';
$ruePietonne->addVehicule($vtt);
echo 'Bonne balade.<br /><br />';

echo 'Vous arrivé sur une rue piétionne. Vous êtes en porsche...<br />';
$ruePietonne->addVehicule($porsche);
echo 'Vous vous êtes cru dans Carmageddon ou quoi ? faites demi tour de suite. <br /><br />';

echo 'Vous arrivé sur une route tout public. Vous êtes en vélo...<br />';
$jeanJaures->addVehicule($vtt);
echo 'Bonne balade, soyez prudent.<br /><br />';

echo 'Vous arrivé sur une route tout public. Vous êtes en porsche...<br />';
$jeanJaures->addVehicule($porsche);
echo 'WildAirline vous souhaite un bon voyage.<br /><br />';


echo $porsche->getParkBrake();
$porsche->setParkBrake();
var_dump($porsche->getParkBrake());
// $porsche->setParkBrake();
echo $porsche->getParkBrake();
try {
    $porsche->start();
} catch(Exception $e) {
    echo $e;
    $porsche->setParkBrake();
} finally {
    echo "My car drive like a Donut <br />";
}
echo $porsche->getParkBrake();
$porsche->setParkBrake();
echo $porsche->getParkBrake(). '<br />';
echo '<br /><br />';

echo "10km équivaut à : " . \src\Vehicule\Speedometer::convertKMInMiles(10) . "miles<br />";
echo "10 miles équivaut à : " .  \src\Vehicule\Speedometer::convertMilesInKm(10) . "km". '<br />';
echo "30km équivaut à : " . \src\Vehicule\Speedometer::convertKMInMiles(30) . "miles";