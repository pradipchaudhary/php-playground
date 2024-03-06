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
$title = "Playground";
// Header includes templates
include_once("./inc/header.php");

$title = "php-playground";
$startDate = 2024;

// Database connection
// $conn = new mysqli("localhost", "username", "password", "database");
$conn = new mysqli("localhost", "root", "", "php-playground_db");

if (!$conn) {
    echo "No connection";

}
?>


<?php
// Output container
?>
<main class="main" id="main">
    <div class="container">
        <?php

        echo "<h1>  PHP Playground </h1>";

        ?>
    </div>
</main>


<?php

// Include Footer Section
include_once("./inc/footer.php");