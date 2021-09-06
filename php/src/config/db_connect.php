<?php 
    // $conn = mysqli_connect('localhost', 'kimchi', 'pass123', 'ninja_pizza');
    // $conn = mysqli_connect('localhost', 'testing', 'testing', 'testing');
    // // test connection
    // if(!$conn){
    //     echo 'Connection error: ' . mysqli_connect_error();
    // };

    $conn = new mysqli("db", "testing", "testing", "testing");

    if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }

?>