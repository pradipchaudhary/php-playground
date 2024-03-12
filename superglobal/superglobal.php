<?php
/**
 * Super Global Variables
 * 
 * 
 */

// Using $GLOBALS
$global_variable = 10;

function access_g()
{
    echo $GLOBALS['global_variable'] . "\n";
}

access_g(); // Output : 10

// Using $_GET and $_POST 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    echo "Welcome, $username !";
} else {
    ?>
<div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
</div>
<?php
}
?>