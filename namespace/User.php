<?php
// Define your User class in the 'App' namespace
namespace App;

class User
{
    public function login($username, $password)
    {
        // Print parameters
        echo "Login function parameters:\n";
        echo "Username: $username\n";
        echo "Password: $password\n";

        // Login logic here
    }

    public function register($username, $password, $email)
    {
        // Print parameters
        echo "Register function parameters:\n";
        echo "Username: $username\n";
        echo "Password: $password\n";
        echo "Email: $email\n";

        // Registration logic here
    }

    public function updateProfile($userId, $newData)
    {
        // Print parameters
        echo "UpdateProfile function parameters:\n";
        echo "UserID: $userId\n";
        echo "New data: " . print_r($newData, true) . "\n";

        // Profile update logic here
    }
}