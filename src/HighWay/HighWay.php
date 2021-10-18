<?php
namespace src\HighWay;

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;


    public function getCurrentVehicles():array
    {
        return $this->currentVehicles; 
    }
    public function setCurrentVehicules(array $vehicules)
    {
        $this->currentVehicles = $vehicules;
    }
    public function getNbLane():int
    {
        return $this->nbLane; 
    }
    public function setNbLane(int $nbLane)
    {
        $this->currentVehicles = $nbLane;
    }
    public function getMaxSpeed():int
    {
        return $this->maxSpeed; 
    }
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->currentVehicles = $maxSpeed;
    }

    abstract public function addVehicule(object $Vehicule);
}