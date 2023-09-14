<?php
$servername = "localhost";
$username = "u855062599_foscu";
$password = "Leon12@48dex";
// $username = "root";
// $password = "";



try {
    // $conn = new PDO("mysql:host=$servername;dbname=foscu", $username, $password);
    $conn = new PDO("mysql:host=$servername;dbname=u855062599_foscu", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
