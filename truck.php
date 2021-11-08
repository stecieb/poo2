<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
    private $capacity;
    private $loading = 0;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function getCapacity(): int
    { 
        $this->energy = $energy;
    }
       
    public function isLoaded(): string
    {
        $sentence = '';
        if ($this->loading < $this->capacity) {
            $sentence = 'In filling ! ';
        } else {
            $sentence = 'Full ! ';
        }
        return $sentence;
    }
        

    }
