<?php 
    // copy stuff into here after I figure out how to add composer to the image
    // echo __DIR__;
    require_once __DIR__.'/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $db = $_ENV['MYSQL_DATABASE'];
    $db_pw = $_ENV['MYSQL_PASSWORD'];
    $db_user = $_ENV['MYSQL_USER'];

    // Figure out how to get these from environment variables. 
    $conn = new mysqli("db", $db_user, $db_pw, $db);

    if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
    }
?>