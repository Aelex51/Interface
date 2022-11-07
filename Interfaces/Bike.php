<?php

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentspeed > 10)
        {
        return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}