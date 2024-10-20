<?php
// config/config.php

$host = 'localhost';
$dbname = 'chat_irc';
$username = 'root'; // Modifiez si nécessaire
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection successful"; // Pour déboguer
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
