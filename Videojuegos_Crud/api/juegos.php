<?php
require_once '../conexion.php';
header('Content-Type: application/json');

$stmt = $pdo->query("SELECT * FROM peliculas");
$peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($peliculas, JSON_PRETTY_PRINT);
?>