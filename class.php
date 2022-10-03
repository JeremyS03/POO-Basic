<?php



class Bicycle {
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function forward(): string {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string {
        return $this->color;
    }


    public function __construct(string $color) {
        $this->color = $color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }


}





class Car {
    private int $nbWheels = 4;
    private int $currentSpeed; 
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }

    public function start(): string {
        $this->currentSpeed = 40;
        $this->energyLevel = 50;

        return "Go";
    }

    public function forward(): string {
        $sentence = "";
        while($this->energyLevel > 0) {
            $this->energyLevel--;
            $sentence .= "Move";
        }
        $sentence .= " I'm out of fuel";
        return $sentence;
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): int {
        return $this->color;
    }
    
}