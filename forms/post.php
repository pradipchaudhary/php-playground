<?php
// Header includes

if (isset($_POST['submit'])) {


    echo "<prev>";
    var_dump($_POST);
}

?>



<div class="container">
    <!-- Sample HTML form using POST method -->
    <form action="" method="post">
        <h1>POST Methods </h1>
        <hr>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" id="password">
        <br>

        <input type="submit" value="Submit" name="submit">
    </form>

</div>