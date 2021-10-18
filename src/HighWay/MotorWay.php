<?php
namespace src\HighWay;

use src\Vehicule\Car;
use src\Vehicule\Truck;

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicule(object $Vehicule)
    {
        if ($Vehicule instanceof Car || $Vehicule instanceof Truck) {
            $previousVehicule = $this->getCurrentVehicles();
            $previousVehicule[] = $Vehicule;
            $this->setCurrentVehicules($previousVehicule);
            echo 'Véhicule autorisé <br />';

        } else {
            echo 'Vous êtes trop lent pour venir sur cette route. <br />';
        }
    }
}
