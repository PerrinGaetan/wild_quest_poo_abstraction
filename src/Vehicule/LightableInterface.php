<?php

namespace src\Vehicule;

interface LightableInterface
{
    public function switchOn():bool;
    public function switchOff():bool;
}