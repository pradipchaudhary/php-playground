<?php
/// Define your User class in the 'App' namespace
namespace App;

class User
{
    public function login()
    {
        // Login logic here
        echo "Welcome to login function!";
    }

    public function register($username, $password, $email)
    {
        // Registration logic here
    }

    public function updateProfile($userId, $newData)
    {
        // Profile update logic here
    }
}