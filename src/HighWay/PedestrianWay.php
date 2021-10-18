<?php
namespace src\HighWay;

use src\Vehicule\Bicycle;

final class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicule(object $Vehicule)
    {
        if ($Vehicule instanceof Bicycle) {
            $previousVehicule = $this->getCurrentVehicles();
            $previousVehicule[] = $Vehicule;
            $this->setCurrentVehicules($previousVehicule);
            echo 'Véhicule autorisé. <br />';
        } else {
            echo 'Seul les véhicules non motorisé sont autorisé.<br />';
        }
    }
}