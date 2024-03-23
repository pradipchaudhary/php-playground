<?php
/**
 * Namespace: MyNamespace
 *
 * Description: This namespace contains classes and functions related to a specific functionality.
 *
 * Author: Pradip Chaudhary
 * Author URI: https://pradipchaudhary.com.np/
 * Version: 1.0.0
 */


// Your code goes here...

// Manually include the file containing the User class definition
require_once __DIR__ . '/User.php';

// Import the necessary namespaces


$user = new \App\User();

// Use the User class methods
$user->register('john_doe', 'password123', 'john@example.com');