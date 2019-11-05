<?php

final class ResidentialWay extends HighWay{

    public function __construct()
    {

        $this->setMaxSpeed(50);
        $this->setNbLane(2);
    }

    public function addVehicle(Vehicle $vehicles)
    {

        $vehicles = $this->getCurrentVehicles() ?? [];

        if (!in_array($Vehicle, $vehicles))
        {

            array_push($vehicles, $Vehicle);
            $this->setCurrentVehicles($vehicles);

        }
    }
}

/* all vehicles */