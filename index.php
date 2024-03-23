<?php
/*
======================================
Author: Pradip Chaudhary
Date: March 6, 2024
Course: PHP Web Development
Email: chaudharypradip678@gmail.com
Website: http://www.yourwebsite.com
======================================
*/

// Additional Notes
/*
- This script is part of the PHP Playground section.
*/
$title = "PHP Forms";
// Header includes templates
include_once ("./inc/header.php");

$title = "php-playground";
$startDate = 2024;


// Create connection
// $connect = mysqli_connect("localhost", "root", "");

// $newdbname = "php-playground";

// Database creating query
// $query = "CREATE DATABASE $newdbname";


// Create database 
// $con = mysqli_query($connect, $query);

// var_dump($con);



// Output container
?>
<main class="main" id="main">
    <div class="container">
        <?php
        // form includes
        // include './form/get.php';
        // include './form/post.php';
        //include './function/function.php';
        // include_once './superglobal/superglobal.php';
        include './namespace/index.php';
        ?>
    </div>
</main>