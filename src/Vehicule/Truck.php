<?php
namespace src\Vehicule;


class Truck extends Vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $storageCapacity;
    private int $charge = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;

    }

    public function setEnergy(string $energy): Truck
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

    public function setStorageCapacity(int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapicity():int
    {
        return $this->storageCapacity;
    }


    public function setCharge(int $charge)
    {
        $this->charge = $charge;
    }

    public function getCharge():int
    {
        return $this->Charge;
    }

    public function isFull():string
    {
        if ($this->charge === $this->storageCapacity) {
            return "full";
        } else {
            return 'in filling';
        }
    }
}