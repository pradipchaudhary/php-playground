<?php

class FormController
{
    private $db;

    public function __construct()
    {
        // Connect to the database in the constructor
        $this->db = new mysqli("localhost", "root", "", "php-playground_db");

        // Check the connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function submitForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $this->db->real_escape_string($_POST['name']);
            $email = $this->db->real_escape_string($_POST['email']);

            // Insert data into a database table
            $query = "INSERT INTO user (username, email) VALUES ('$name', '$email')";
            if ($this->db->query($query)) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $this->db->error;
            }
        }
    }

    public function __destruct()
    {
        // Close the database connection in the destructor
        $this->db->close();
    }
}

// Instantiate the controller
$formController = new FormController();

// Process form submission
$formController->submitForm();

?>



<!-- Form -->
<div class="container py-5">
    <div class="row">
        <div class="col-sm-5 offset-3">
            <div class="card p-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
        </div>
    </div>
</div>