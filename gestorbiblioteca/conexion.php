<?php

require_once "config.php";

$conn = mysqli_connect($host, $user, $pasword, $database);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

$crearTabla = "
    CREATE TABLE IF NOT EXISTS autores (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        nacionalidad VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

if (!mysqli_query($conn, $crearTabla)) {
    die("Error al asegurar tabla autores: " . mysqli_error($conn));
}
