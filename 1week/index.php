<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 week php course </title>
    <!-- style link  -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>1 Week PHP Courses </h1>
        </header>
        <main class="main">
            <h4>1. Variables </h4>
            <h4>2. Data types </h4>
            <div class="content">
                <?php
                    $name = "Pradip Chaudhary"; // String 
                    $age = 30; // Integer
                    $height = 5.6; // Float 
                    $isStudent = false; // Boolean 

                    // Arrary 
                    // 1. Index array 
                    $fruits = array("Apple", "Banana", "Orange");

                    // Output Array 

                    // 1. print_r 
                    echo "<pre>";
                    print_r($fruits);
                    echo "</pre>";

                    // 2. var_dump 
                    echo "<pre>";
                    var_dump($fruits);
                    echo "</pre>";
                    echo "</br>";

                    // 3. json_encode 
                    echo json_encode($fruits) . "</br>";
                    echo "</br>";

                    // 4. using loop 
                    foreach($fruits as $fruit){
                        echo $fruit . "</br>";
                    }
                    echo "</br>";
                    // 5. implode 
                    echo implode(", ", $fruits);
                    // 2. Associated Arrary 


                    // ! Associated Array 
                    $users = array("name"=>"Pradip Chaudhary", "age"=>30, "city"=>"Udayapur, Nepal");

                    echo "<pre>";
                    echo print_r($users);
                    echo "</pre>";
                    // print_r($users)
                    echo "<pre>";
                    echo var_dump($users);
                    echo "</pre>";

                    foreach($users as $user){
                        echo $user . "</br>";
                    }

                    // Object 

                    class Person{
                        public $name;
                        public $age;
                        
                        function __construct($name, $age){
                            $this->name = $name;
                            $this->age = $age;
                        }
                    }

                    $person = new Person("Pradip Chaudhary", 30);
                    // Object output method 
                    // 1. Using print_r()
                    // 2. Using var_dump()
                    // 3. Using json_encode()
                    // 4. Custom Method for Displaying Object Properties

                    // Create Object 
                    // Person -> firstName, lastName, age
                    class Person1{
                        public $firstName;
                        public $lastName;
                        public $age;
                        
                        // construct function 
                        function __construct($firstName, $lastName, $age){
                            $this->firstName = $firstName;
                            $this->lastName = $lastName;
                            $this->age = $age;

                        }
                    }
                    $pers1 = new Person1("Younz","ENough", 28);
                    echo "<pre>";
                    echo print_r($pers1);
                    echo "</pre>";

                    // Car -> make, model, year
                    class Car{
                        public $make;
                        public $model;
                        public $year;

                        function __construct($make, $model, $year){
                            $this->make = $make;
                            $this->model = $model;
                            $this->year = $year;
                        }
                    }
                    $ev = new Car("Toyota", "Corola", 2020);
                    echo "<pre>";
                    echo print_r($ev);
                    echo "</pre>";
                    // Book -> title, author, year 
                    class Book{
                        public $title;
                        public $author;
                        public $year;

                        function __construct($title, $author, $year){
                            $this->title = $title;
                            $this->author = $author;
                            $this->year = $year;
                        }
                    }
                    $book = new Book("Younz ENough", "Pradip Chaudhary", 2024);
                    echo "<pre>";
                    echo print_r($book);
                    echo "</pre>";

                    // Employee  -> name, position, salary
                    class Employee{
                        public $name;
                        public $position;
                        public $salary;

                        function __construct($name, $position, $salary){
                            $this->name = $name;
                            $this->position = $position;
                            $this->salary = $salary;
                        }

                        public function display(){
                            echo "Name : " . $this->name . "</br>";
                            echo "Position : " . $this->position . "</br>";
                            echo "Salary : " . $this->salary . "</br>"; 
                        }

                    }
                    
                    $employee = new Employee("Pradip Chaudhary", "Web Developer", 50000);
                    echo "<pre>";
                    echo print_r($employee);
                    echo "</pre>";
                    echo "</br>";
                    $employee->display();
                    // print_r
                    // echo print_r($person);
                ?>
            </div>
        </main>
    </div>
</body>
</html>