<?php
require_once 'conexion.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos
    $titulo = trim($_POST['titulo']);
    $director = trim($_POST['director']);
    $genero = trim($_POST['genero']);
    $anio = (int) $_POST['anio'];      // 👈 CAMBIADO: $anio (sin ñ)
    $duracion = (int) $_POST['duracion'];

    // Validaciones
    if (empty($titulo) || empty($director) || empty($genero) || empty($anio) || empty($duracion)) {
        $error = "Todos los campos son obligatorios.";
    } elseif ($anio < 1900 || $anio > date('Y')) {
        $error = "El año debe estar entre 1900 y " . date('Y');
    } else {
        
        $sql = "INSERT INTO peliculas (titulo, director, genero, anio, duracion) 
                VALUES (:titulo, :director, :genero, :anio, :duracion)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':director' => $director,
            ':genero' => $genero,
            ':anio' => $anio,          
            ':duracion' => $duracion
        ]);
        
        header('Location: index.php?mensaje=Película creada correctamente');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Película</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>➕ Añadir Película</h1>
        <a href="index.php" class="volver">← Volver al listado</a>

        <?php if ($error): ?>
            <div class="mensaje-error">❌ <?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" required>

            <label>Director:</label>
            <input type="text" name="director" required>

            <label>Género:</label>
            <input type="text" name="genero" required>

            <label>Año:</label>
            <input type="number" name="anio" required>  

            <label>Duración (min):</label>
            <input type="number" name="duracion" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>