<?php

// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php-playground_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a table
// $sql = "CREATE TABLE students (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL,
//     date_of_birth DATE NOT NULL,
//     gender VARCHAR(10) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     phone VARCHAR(15) NOT NULL,
//     address TEXT NOT NULL,
//     major VARCHAR(50) NOT NULL,
//     gpa DECIMAL(3,2) NOT NULL
// )";

// Execute the query
// if ($conn->query($sql) === TRUE) {
//     echo "Table 'students' created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// Sample data to be inserted
// $first_name = "John";
// $last_name = "Doe";
// $date_of_birth = "1990-05-15";
// $gender = "Male";
// $email = "john.doe@example.com";
// $phone = "123-456-7890";
// $address = "123 Main St, Cityville";
// $major = "Computer Science";
// $gpa = 3.75;

// Check if the form is submitted using the POST method
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     // Sanitize and validate data (replace this with proper validation)
//     $first_name = $conn->real_escape_string($_POST['first_name']);
//     $last_name = $conn->real_escape_string($_POST['last_name']);
//     $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
//     $gender = $conn->real_escape_string($_POST['gender']);
//     $email = $conn->real_escape_string($_POST['email']);
//     $phone = $conn->real_escape_string($_POST['phone']);
//     $address = $conn->real_escape_string($_POST['address']);
//     $major = $conn->real_escape_string($_POST['major']);
//     $gpa = $conn->real_escape_string($_POST['gpa']);

// }




// SQL query to insert data into the 'students' table
// $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, email, phone, address, major, gpa)
//         VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$email', '$phone', '$address', '$major', $gpa)";


// SQL query to insert data into the 'students' table
// $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, email, phone, address, major, gpa);
// VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$email', '$phone', '$address', '$major', $gpa)";


// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate data (replace this with proper validation)
    $first_name = $conn->real_escape_string($_POST['firstName']);
    $last_name = $conn->real_escape_string($_POST['lastName']);
    $date_of_birth = $conn->real_escape_string($_POST['dob']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $major = $conn->real_escape_string($_POST['major']);
    $gpa = $conn->real_escape_string($_POST['gpa']);

    // SQL query to insert data into the 'students' table
    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, email, phone, address, major, gpa)
            VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$email', '$phone', '$address', '$major', $gpa)";


// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

}

// Close the connection
$conn->close();




?>
<div class="container mt-5">
    <form action="<?php echo "$_SERVER('PHP-SELF')"; ?>" method="post">
        <h2 class="mb-4">Student Information</h2>

        <!-- Personal Information -->
        <div class="card mb-4">
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="card mb-4">
            <div class="card-header">Contact Information</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
            </div>
        </div>

        <!-- Academic Information -->
        <div class="card mb-4">
            <div class="card-header">Academic Information</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="major">Major:</label>
                        <input type="text" class="form-control" id="major" name="major" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gpa">GPA:</label>
                        <input type="number" class="form-control" id="gpa" name="gpa" step="0.01" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
