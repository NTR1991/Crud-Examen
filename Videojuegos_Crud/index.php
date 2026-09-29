<?php
require_once 'conexion.php';
$stmt = $pdo->query("SELECT * FROM peliculas ORDER BY id DESC");
$peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Películas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>🎬 Catálogo de Películas</h1>
        <a href="crear.php" class="boton-crear">➕ Añadir nueva película</a>
        <a href="index.php" class="boton-crear">LISTA DE PELICULAS</a>
        <br><br>

        <?php if (isset($_GET['mensaje'])): ?>
            <div class="mensaje-exito">✅ <?= htmlspecialchars($_GET['mensaje']) ?></div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Director</th>
                    <th>Género</th>
                    <th>Año</th>
                    <th>Duración</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peliculas as $pelicula): ?>
                <tr>
                    <td><?= $pelicula['id'] ?></td>
                    <td><?= htmlspecialchars($pelicula['titulo']) ?></td>
                    <td><?= htmlspecialchars($pelicula['director']) ?></td>
                    <td><?= htmlspecialchars($pelicula['genero']) ?></td>
                    <td><?= $pelicula['anio'] ?></td>
                    <td><?= $pelicula['duracion'] ?> min</td>
                    <td>
                        <div class="acciones">
                            <a href="editar.php?id=<?= $pelicula['id'] ?>" class="btn-editar">✏️ Editar</a>
                            <a href="eliminar.php?id=<?= $pelicula['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Seguro?')">🗑️ Eliminar</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>