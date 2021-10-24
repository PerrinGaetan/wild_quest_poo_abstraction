<?php
namespace src\Vehicule;

use Exception;

class Car extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'essence',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasPartBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasPartBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->hasPartBrake = $hasPartBrake;
    }

    public function getEnergy():string
    {
        return $this->nbEnergy;
    }

    public function setEnergy(string $energy): Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }
    
    public function setEnergyLevel(int $energyLevel):void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake():void
    {
        $this->hasPartBrake == true ? $this->hasPartBrake = false : $this->hasPartBrake = true;
    }
    public function getParkBrake():bool
    {
        return $this->hasPartBrake;
    }

    public function start():string
    {
        if ($this->hasPartBrake === true) {
            throw new Exception("Frein enclenché");
        } else {
            return "Let's Go";
        }
    }
}