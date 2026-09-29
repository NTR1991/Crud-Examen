# 🎬 CRUD de Películas con PHP

## 📋 Descripción

Aplicación CRUD completa construida con **PHP y MySQL** para gestionar un catálogo de películas. Permite a los usuarios añadir, visualizar, editar y eliminar películas, con una interfaz limpia y fácil de usar. Además, incluye una **API REST** para acceso programático.

---

## 🎯 Objetivo del proyecto

Construir una aplicación CRUD (Create, Read, Update, Delete) completa utilizando **PHP y MySQL**, siguiendo buenas prácticas como el uso de **PDO** para la conexión a la base de datos y **sentencias preparadas** para prevenir inyecciones SQL.

---

## ✨ Características

| Característica | Descripción |
| :--- | :--- |
| **Listar películas** | Muestra todas las películas en una tabla (READ) |
| **Añadir película** | Formulario para crear una nueva película (CREATE) |
| **Editar película** | Formulario para actualizar una película existente (UPDATE) |
| **Eliminar película** | Elimina una película con confirmación (DELETE) |
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
21-php-movie-crud/
├── api/
│   └── peliculas.php       # API REST (GET, POST, PUT, DELETE)
├── css/
│   └── style.css           # Estilos (fondo oscuro, botones de colores)
├── conexion.php            # Conexión a la base de datos (PDO)
├── index.php               # Listado de películas (READ)
├── crear.php               # Formulario de creación (CREATE)
├── editar.php              # Formulario de edición (UPDATE)
├── eliminar.php            # Lógica de eliminación (DELETE)
├── peliculas.sql           # Exportación de la base de datos (estructura + datos)
└── README.md
```

---

## 🗄️ Configuración de la base de datos

Importa el archivo `peliculas.sql` usando **phpMyAdmin** o la línea de comandos:

```bash
mysql -u root -p < peliculas.sql
```

O copia el script SQL manualmente:

```sql
CREATE DATABASE IF NOT EXISTS cine
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE cine;

CREATE TABLE IF NOT EXISTS peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    director VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    anio INT NOT NULL,
    duracion INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO peliculas (titulo, director, genero, anio, duracion) VALUES
('Caperucita Roja', 'Luis Diaz', 'Aventura', 2025, 145),
('Titanic', 'Frank Suarez', 'Romance', 1999, 180),
('God of War', 'Steven Road', 'Acción', 2026, 185),
('Hombres de Negro 2', 'Will Mathers', 'Acción', 2002, 195),
('Furia de Titanes', 'Robert Garcia', 'Épico', 2025, 195);
```

---

## 🚀 Cómo ejecutarlo

1. Clona el repositorio o descarga los archivos.
2. Coloca la carpeta del proyecto en tu servidor local (por ejemplo, `htdocs` para XAMPP).
3. Inicia Apache y MySQL en XAMPP.
4. Importa el archivo `peliculas.sql` usando phpMyAdmin.
5. Abre `index.php` en tu navegador.

---

## 🔌 Endpoints de la API REST

| Método | Endpoint | Descripción | Respuesta |
| :--- | :--- | :--- | :--- |
| GET | `/api/peliculas.php` | Obtener todas las películas | 200 + array JSON |
| GET | `/api/peliculas.php?id=1` | Obtener una película específica | 200 + objeto JSON |
| POST | `/api/peliculas.php` | Crear una nueva película | 201 + objeto JSON |
| PUT | `/api/peliculas.php?id=1` | Actualizar una película | 200 + objeto JSON |
| DELETE | `/api/peliculas.php?id=1` | Eliminar una película | 204 Sin contenido |

### Ejemplo: Crear una película (POST)

```json
{
    "titulo": "El Padrino",
    "director": "Francis Ford Coppola",
    "genero": "Drama",
    "anio": 1972,
    "duracion": 175
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
