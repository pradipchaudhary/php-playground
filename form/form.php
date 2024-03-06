<?php
$title = "PHP Form";
// Header Includes
include_once '../inc/header.php';

?>



<div class="container py-5">
    <form method="post" action="process_form.php">
        <!-- Form fields go here -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>


<?php

// footer includes
include_once("../inc/footer.php");
