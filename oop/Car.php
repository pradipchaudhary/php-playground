<?php
class Car
{
    // Properties
    public $make;
    public $model;
    public $year;
    public $color;

    // Constructor
    public function __construct($make, $model, $year, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    // Methods
    public function start()
    {
        return "Starting the " . $this->year . " " . $this->make . " " . $this->model . "...";
    }

    public function stop()
    {
        return "Stopping the " . $this->year . " " . $this->make . " " . $this->model . "...";
    }

    public function accelerate()
    {
        return "Accelerating the " . $this->year . " " . $this->make . " " . $this->model . "...";
    }
}