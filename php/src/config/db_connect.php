<?php 
    // Figure out how to get these from environment variables. 
    $conn = new mysqli("db", "testing", "testing", "testing");

    if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }

?>