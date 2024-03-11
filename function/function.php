<?php

// 1. Basic function
function greet()
{
    echo "Hello, World!";
}


greet();


// 2 Functions with parameters
function welcome($name)
{
    echo "Welcome " . $name . "! </br>";
}

welcome("Pradip Chaudhary");
welcome(4);