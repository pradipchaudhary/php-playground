<?php

/**
 * 
 * PHP Form Element
 * 
 */



?>

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <?php
            // GET Methods 
            // Check if the $_GET Method is available or not ?
            // if (isset($_GET['submit'])) {
            //     $name = $_GET['name'];
            //     $email = $_GET['email'];
            
            //     echo "<prev>";
            //     var_dump($_GET);
            
            // if (empty($_GET)) {
            //     echo " _GET Method are not avaliable?";
            // }
            
            // echo "<pre>";
            // echo $name . "<br />";
            // echo $email . "<br />";
            // echo $_GET['submit'];
            // }
                



            ?>
            <!-- Form  -->
            <form action="" method="GET">
                <label for="name">Name : </label>
                <input type="text" name="name">
                <br>
                <label for="email">Email : </label>
                <input type="text" name="email">
                <br>
                <input type="submit" name="submit" class="mt-2 p-2">
            </form>
        </div>
    </div>
</div>