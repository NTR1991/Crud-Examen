<?php
require_once 'conexion.php';
$id = (int) $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM peliculas WHERE id = :id");
$stmt->execute([':id' => $id]);

header('Location: index.php?mensaje=Película eliminada correctamente');
exit;
?>