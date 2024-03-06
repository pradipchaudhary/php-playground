Certainly! Let me explain each line of the provided code:

```php
<?php

class FormController
{
    private $db;

    public function __construct()
    {
        // Connect to the database in the constructor
        $this->db = new mysqli("your_host", "your_username", "your_password", "your_database");

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
            $query = "INSERT INTO your_table (name, email) VALUES ('$name', '$email')";
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

// Instantiate the controller and call the submitForm method
$formController = new FormController();
$formController->submitForm();
```

Let's break down the code:

1. `class FormController { ... }`: Defines a PHP class named `FormController`.

2. `private $db;`: Declares a private property `$db` to store the database connection.

3. `public function __construct() { ... }`: Constructor method of the class. It is executed when an object is created. This method establishes a connection to the database using MySQLi.

   -  `$this->db = new mysqli("your_host", "your_username", "your_password", "your_database");`: Creates a new instance of the `mysqli` class to establish a connection to the MySQL database. Replace `"your_host"`, `"your_username"`, `"your_password"`, and `"your_database"` with your actual database credentials.

   -  `if ($this->db->connect_error) { die("Connection failed: " . $this->db->connect_error); }`: Checks if the connection was successful. If there is an error, it terminates the script and displays an error message.

4. `public function submitForm() { ... }`: Method that processes the form data submitted via POST.

   -  `if ($_SERVER['REQUEST_METHOD'] === 'POST') { ... }`: Checks if the request method is POST, meaning the form has been submitted.

   -  `$name = $this->db->real_escape_string($_POST['name']);`: Uses `real_escape_string` to escape and sanitize the user input for the "name" field.

   -  `$email = $this->db->real_escape_string($_POST['email']);`: Escapes and sanitizes the user input for the "email" field.

   -  `$query = "INSERT INTO your_table (name, email) VALUES ('$name', '$email')";`: Constructs an SQL query to insert the sanitized data into a table named `your_table`. Replace `"your_table"` with the actual table name.

   -  `if ($this->db->query($query)) { echo "Data inserted successfully!"; } else { echo "Error: " . $this->db->error; }`: Executes the SQL query. If successful, it echoes a success message; otherwise, it echoes an error message.

5. `public function __destruct() { ... }`: Destructor method of the class. It is executed when the object is destroyed. This method closes the database connection.

   -  `$this->db->close();`: Closes the MySQLi database connection.

6. `$formController = new FormController();`: Instantiates an object of the `FormController` class.

7. `$formController->submitForm();`: Calls the `submitForm` method to handle form submission and database interaction.

Remember to replace placeholder values with your actual database credentials and table name. Additionally, consider implementing more robust error handling, validation, and security measures depending on your application's requirements.
