<?php

require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?mensaje=Metodo no permitido&tipo=error");
    exit;
}

$nombre = isset($_POST["nombre_autor"]) ? trim($_POST["nombre_autor"]) : "";
$nacionalidad = isset($_POST["nacionalidad"]) ? trim($_POST["nacionalidad"]) : "";

if ($nombre === "" || $nacionalidad === "") {
    header("Location: index.php?mensaje=Completa todos los campos&tipo=error");
    exit;
}

$sql = $conn->prepare("INSERT INTO autores (nombre, nacionalidad) VALUES (?, ?)");
$sql->bind_param("ss", $nombre, $nacionalidad);

if ($sql->execute()) {
    header("Location: index.php?mensaje=Autor registrado correctamente&tipo=ok");
} else {
    header("Location: index.php?mensaje=Error al registrar autor&tipo=error");
}

$sql->close();
$conn->close();
exit;
