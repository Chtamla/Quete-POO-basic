<?php

abstract class HighWay
{
    protected $currentVehicles;
    protected $nbLane;
    protected $maxSpeed;
    abstract function addVehicle(Vehicle $vehicle);
    public function getCurrentVehicles(): ?array{
        return $this->currentVehicles;
    }


    public function setCurrentVehicles(array $currentVehicles) : HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }
    public function getNbLane() : int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane) : HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed) : HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
}

