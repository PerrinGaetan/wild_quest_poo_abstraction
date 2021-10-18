<?php
namespace src\HighWay;

use src\Vehicule\Vehicule;

final class ResidentialWay extends HighWay
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicule(object $Vehicule)
    {
        if ($Vehicule instanceof Vehicule) {
            $previousVehicule = $this->getCurrentVehicles();
            $previousVehicule[] = $Vehicule;
            $this->setCurrentVehicules($previousVehicule);
            echo 'Véhicule autorisé <br />';
        }
    }
}