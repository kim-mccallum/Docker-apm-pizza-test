<?php 
    // connect to db options: MySQLi (more procedural) or PDO (more object-oriented)
    $conn = mysqli_connect('localhost', 'kimchi', 'pass123', 'ninja_pizza');
    // test connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    };

?>