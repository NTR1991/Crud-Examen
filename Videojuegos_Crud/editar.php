<?php
require_once 'conexion.php';
$id = (int) $_GET['id'];
$error = '';

$stmt = $pdo->prepare("SELECT * FROM peliculas WHERE id = :id");
$stmt->execute([':id' => $id]);
$pelicula = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$pelicula) {
    header('Location: index.php?mensaje=Película no encontrada');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo']);
    $director = trim($_POST['director']);
    $genero = trim($_POST['genero']);
    $anio = (int) $_POST['anio'];      
    $duracion = (int) $_POST['duracion'];

    if (empty($titulo) || empty($director) || empty($genero) || empty($anio) || empty($duracion)) {
        $error = "Todos los campos son obligatorios.";
    } elseif ($anio < 1900 || $anio > date('Y')) {
        $error = "El año debe estar entre 1900 y " . date('Y');
    } else {
       
        $sql = "UPDATE peliculas SET titulo = :titulo, director = :director, 
                genero = :genero, anio = :anio, duracion = :duracion WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':director' => $director,
            ':genero' => $genero,
            ':anio' => $anio,
            ':duracion' => $duracion,
            ':id' => $id
        ]);
        header('Location: index.php?mensaje=Película actualizada correctamente');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Película</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>✏️ Editar Película</h1>
        <a href="index.php" class="volver">← Volver al listado</a>

        <?php if ($error): ?>
            <div class="mensaje-error">❌ <?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <label>Título:</label>
            <input type="text" name="titulo" value="<?= htmlspecialchars($pelicula['titulo']) ?>" required>

            <label>Director:</label>
            <input type="text" name="director" value="<?= htmlspecialchars($pelicula['director']) ?>" required>

            <label>Género:</label>
            <input type="text" name="genero" value="<?= htmlspecialchars($pelicula['genero']) ?>" required>

            <label>Año:</label>
            <input type="number" name="anio" value="<?= htmlspecialchars($pelicula['anio']) ?>" required> 

            <label>Duración (min):</label>
            <input type="number" name="duracion" value="<?= htmlspecialchars($pelicula['duracion']) ?>" required>

            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>