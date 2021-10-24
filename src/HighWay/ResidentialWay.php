<?php
namespace src\HighWay;

use src\Vehicule\Vehicule;

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

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