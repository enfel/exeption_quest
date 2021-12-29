<?php
class Car
{
    private int $nbWeels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energie;
    private int $energieLevel;
    private bool $hasParkBrake;



    public function __construct (string $color, int $nbSeats, string $energie, bool $hasParkBrake)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energie = $energie;
    }

    public function setParkBrake()
    {
        if($haParkBrake = true){
            $this->hasParkBrake=false;
        } else $this->hasParkBrake=true;
    }
    public function start(): string
    {
        if ($hasParkBrake = false) {
            throw new Exception("la voiture roule dèja!");
        } else {
            $sentence = "Get ready";
            while ($this->currentSpeed = 0) {
                $this->currentSpeed++;
            }
            return $sentence;
        }
    }
    public function forward ():string
    {
        $this->currentSpeed = 20;

        return "Go !";
    }
    public function brake():string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function getNbWeels(int $nbWeels): int
    {
        return $this->nbWeels;
    }
    public function getCurrentSpeed(int $currentSpeed): int
    {
        return $this->currentSpeed;
    }
    public function getColor(string $color): string
    {
        return $this->color;
    }
    public function getNbSeats(int $nbSeats): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energieLevel;
    }

}
