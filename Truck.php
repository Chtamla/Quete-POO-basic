<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    protected $lading = 100;
    protected $capacity = 100;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setLading(int $lading):truck
    {
        $this->lading = $lading;
        return $this;
    }
    public function isFull() : string
    {
        if ($this->lading >= $this->capacity) {
            $result = "full";
        } else {
            $result = "in filling";
        }
        return $result;
    }
}
