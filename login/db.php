<?php
/* Database credentials. 
*/
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'user1');
define('DB_PASSWORD', 'Ficarfoods1234!');
define('DB_NAME', 'ficarfoo_shopping');

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>