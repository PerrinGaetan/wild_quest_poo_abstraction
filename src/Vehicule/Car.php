<?php
namespace src\Vehicule;


class Car extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'essence',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
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
}