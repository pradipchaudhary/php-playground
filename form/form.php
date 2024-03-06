<?php

$name = $_GET('name');
$email = $_GET('email');






?>

<!-- Form -->
<div class="container py-5">
    <form action="submit_form.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

