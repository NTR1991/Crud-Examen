<?php
$host = 'sql207.infinityfree.com';
$dbname = 'if0_42915722_peliculas';  
$username = 'if0_42915722';
$password = 'Santarosala';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>