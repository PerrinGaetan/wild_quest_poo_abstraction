<?php
namespace src\HighWay;

use src\Vehicule\Car;
use src\Vehicule\Truck;

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

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
