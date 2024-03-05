<?php

/**
 *      @author Pradip Chaudhary <chaudharypradip678@gmail.com>     
 * 
 *      Variable
 *      ----------------------------------------------------------------
 *      In PHP, variables are used to store and manipulate data.
 * 
 */


//  Here are some key points about variables in PHP:


// 1. Variable Declaration:
// - Declare variables using the dollar sign ($) followed by the variable name.
// - Variable names are case-sensitive.
// - Start variable names with a letter or underscore.

$name = "John";
$NAME = "Pradip";
$age = 25;
$_status = "Active";



// 2. Data Types:
// - PHP supports various data types, including integers, floats, strings, booleans, arrays, and objects.
// - Variables automatically adapt to the type of value assigned to them.

$count = 10;         // Integer
$price = 19.99;      // Float
$message = "Hello";  // String
$is_active = true;   // Boolean


// 3. Concatenation:
// - Combine variables and strings using the concatenation operator (.).

$greeting = "Hello, " . $name . "!";


// 4. Variable Interpolation:
// - Embed variables directly within double-quoted strings.

$greeting = "Hello, $name!";


// 5. Dynamic Variables:
// - Create variable names dynamically using variable variables.

$category = "fruit";
$$category = "apple"; // Creates $fruit variable


// 6. Constants:
// - Define constants using the define() function.
// - Constants are case-sensitive by default.

define("PI", 3.14);


// 7. Variable Scope:
// - Variables can have local or global scope.
// - Use the global keyword to access global variables within functions.

$globalVar = 10;

function myFunction()
{
    global $globalVar;
    echo $globalVar; // Accessing global variable
}




?>