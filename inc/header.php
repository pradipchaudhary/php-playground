<?php
/*
======================================
Author: Pradip Chaudhary
Date: March 6, 2024
Course: PHP Web Development
======================================
*/

// Author Information
/*
Author: Pradip Chaudhary
Email: chaudharypradip678@gmail.com
Website: http://www.yourwebsite.com
*/

// Additional Notes
/*
- This script is part of the PHP Playground section.
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Playground :
        <?php echo $title ?>
    </title>
    <!-- Bootstrap stylesheet link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<header id="header" class="header p-3 mb-2 bg-dark text-white">
    <div class="container">
        <h1 class="header-title"> PHP Playground :
            <?php echo $title; ?>
        </h1>
    </div>
</header>

<body>