# 🎮 CRUD de Videojuegos con PHP

## 📋 Descripción

Aplicación CRUD completa construida con **PHP y MySQL** para gestionar un catálogo de videojuegos. Permite a los usuarios añadir, visualizar, editar y eliminar videojuegos, con una interfaz limpia y fácil de usar. Además, incluye una **API REST** para acceso programático.

---

## 🎯 Objetivo del proyecto

Construir una aplicación CRUD (Create, Read, Update, Delete) completa utilizando **PHP y MySQL**, siguiendo buenas prácticas como el uso de **PDO** para la conexión a la base de datos y **sentencias preparadas** para prevenir inyecciones SQL.

---

## ✨ Características

| Característica | Descripción |
| :--- | :--- |
| **Listar videojuegos** | Muestra todos los videojuegos en una tabla (READ) |
| **Añadir videojuego** | Formulario para crear un nuevo videojuego (CREATE) |
| **Editar videojuego** | Formulario para actualizar un videojuego existente (UPDATE) |
| **Eliminar videojuego** | Elimina un videojuego con confirmación (DELETE) |
| **API REST** | Proporciona endpoints JSON para integración (GET, POST, PUT, DELETE) |
| **Validación de datos** | Valida campos obligatorios y rango de años |
| **Mensajes de éxito/error** | Feedback al usuario tras cada operación |

---

## 🛠️ Tecnologías utilizadas

- **PHP** – Lógica del backend
- **MySQL** – Base de datos
- **PDO** – Conexión segura a la base de datos
- **HTML5** – Estructura
- **CSS3** – Estilos
- **Git** – Control de versiones
- **GitHub** – Alojamiento del repositorio

---

## 📂 Estructura de carpetas

```
21-php-video-game-crud/
├── api/
│   └── juegos.php          # API REST (GET, POST, PUT, DELETE)
├── css/
│   └── style.css           # Estilos (fondo oscuro, botones de colores)
├── conexion.php            # Conexión a la base de datos (PDO)
├── index.php               # Listado de videojuegos (READ)
├── crear.php               # Formulario de creación (CREATE)
├── editar.php              # Formulario de edición (UPDATE)
├── eliminar.php            # Lógica de eliminación (DELETE)
├── videojuegos.sql         # Exportación de la base de datos (estructura + datos)
└── README.md
```

---

## 🗄️ Configuración de la base de datos

Importa el archivo `videojuegos.sql` usando **phpMyAdmin** o la línea de comandos:

```
bash
mysql -u root -p < videojuegos.sql
```

O copia el script SQL manualmente:

```
sql
CREATE DATABASE IF NOT EXISTS videojuegos
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE videojuegos;

CREATE TABLE IF NOT EXISTS juegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    desarrollador VARCHAR(100) NOT NULL,
    plataforma VARCHAR(50) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    anio INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO juegos (titulo, desarrollador, plataforma, genero, anio) VALUES
('Red Dead Redemption 2', 'Rockstar Game', 'PS5', 'Acción', 2025),
('Furia de Titanes', 'Santa Monica Studio', 'PS4', 'Aventura', 2006),
('The Legend of Zelda', 'Nintendo', 'Nintendo Switch', 'Aventura', 2017),
('Minecraft', 'Mojang', 'PC', 'Sandbox', 2011),
('God of War Ragnarok', 'Santa Monica Studio', 'PS5', 'Acción', 2022),
('Red Dead Redemption 2', 'Rockstar Games', 'PS4', 'Aventura', 2018),
('The Witcher 3', 'CD Projekt Red', 'PC', 'RPG', 2015),
('Elden Ring', 'FromSoftware', 'PS5', 'RPG', 2022),
('Cyberpunk 2077', 'CD Projekt Red', 'PC', 'RPG', 2020),
('Super Mario Odyssey', 'Nintendo', 'Nintendo Switch', 'Plataformas', 2017),
('The Last of Us Part II', 'Naughty Dog', 'PS4', 'Aventura', 2020),
('Horizon Forbidden West', 'Guerrilla Games', 'PS5', 'Acción', 2022);
```

---

## 🚀 Cómo ejecutarlo

1. Clona el repositorio o descarga los archivos.
2. Coloca la carpeta del proyecto en tu servidor local (por ejemplo, `htdocs` para XAMPP).
3. Inicia Apache y MySQL en XAMPP.
4. Importa el archivo `videojuegos.sql` usando phpMyAdmin.
5. Abre `index.php` en tu navegador.

---

## 🔌 Endpoints de la API REST

| Método | Endpoint | Descripción | Respuesta |
| :--- | :--- | :--- | :--- |
| GET | `/api/juegos.php` | Obtener todos los videojuegos | 200 + array JSON |
| GET | `/api/juegos.php?id=1` | Obtener un videojuego específico | 200 + objeto JSON |
| POST | `/api/juegos.php` | Crear un nuevo videojuego | 201 + objeto JSON |
| PUT | `/api/juegos.php?id=1` | Actualizar un videojuego | 200 + objeto JSON |
| DELETE | `/api/juegos.php?id=1` | Eliminar un videojuego | 204 Sin contenido |

### Ejemplo: Crear un videojuego (POST)

```
json
{
    "titulo": "The Legend of Zelda",
    "desarrollador": "Nintendo",
    "plataforma": "Nintendo Switch",
    "genero": "Aventura",
    "anio": 2023
}
```

---

## 📚 Conceptos aprendidos

- Operaciones CRUD con PHP y MySQL
- Conexión PDO y sentencias preparadas
- Validación y saneamiento de datos
- Fundamentos de API REST (GET, POST, PUT, DELETE)
- Códigos de estado HTTP (200, 201, 204, 400, 404, 405)
- Codificación y decodificación JSON
- Separación de responsabilidades (un archivo por acción)

---

## 👤 Autor

*NTR1991 – Full Stack en formación | Estudiante de FP DAW*

## 📅 Fecha

Septiembre 2026
