<?php



    // Object Output Methods
     
    // 1. Using print_r()
    // 2. Using var_dump()
    // 3. Using json_encode()
    // 4. Custom Method for Displaying Object Properties


    // Create Object in PHP

    class User{
        public $username;
        public $email;
        public $password;

        function __construct($username, $email, $password){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            echo "Hello this is the construct function!";
        }
        public function printUsername(){
            echo "The username is : $username";
        }
    }

    $user1 = new User("Pradip Chaudhary", "chaudharypradip678@gmail.com", "Hello");

    echo "User Object" . "</br>";

    echo "<pre?>";
    echo print_r($user1);
    // echo var_dump($user1);
    // echo json_encode($user1);
    echo "</pre>";

?>

