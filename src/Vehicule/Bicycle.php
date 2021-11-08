<?php
namespace src\Vehicule;

Class Bicycle extends Vehicule implements LightableInterface
{
    public function switchOn(): bool
    {
        return $this->currentSpeed > 10;
    }
    public function switchOff(): bool
    {
        return false;
    }
}