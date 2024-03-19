<?php 
// Database Constants
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mma');

// Connect to the database
try{
    $conn = new PDO ("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());

}

