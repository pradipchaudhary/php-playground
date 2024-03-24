<?php

include __DIR__ . '/Car.php';


// Creating Car objects
$car1 = new Car("Toyota", "Camry", 2022, "Red");
$car2 = new Car("Honda", "Accord", 2023, "Blue");

// Accessing object properties
echo $car1->make;  // Output: Toyota
echo $car2->color; // Output: Blue

// Calling object methods
echo $car1->start();  // Output: Starting the 2022 Toyota Camry...
echo $car2->stop();   // Output: Stopping the 2023 Honda Accord...
echo $car1->accelerate();  // Output: Accelerating the 2022 Toyota Camry...