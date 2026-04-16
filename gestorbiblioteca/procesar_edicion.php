<?php

require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?mensaje=Metodo no permitido&tipo=error");
    exit;
}

$id = isset($_POST["id"]) ? (int) $_POST["id"] : 0;
$nombre = isset($_POST["nombre_autor"]) ? trim($_POST["nombre_autor"]) : "";
$nacionalidad = isset($_POST["nacionalidad"]) ? trim($_POST["nacionalidad"]) : "";

if ($id <= 0 || $nombre === "" || $nacionalidad === "") {
    header("Location: index.php?mensaje=Datos invalidos para editar&tipo=error");
    exit;
}

$sql = $conn->prepare("UPDATE autores SET nombre = ?, nacionalidad = ? WHERE id = ?");
$sql->bind_param("ssi", $nombre, $nacionalidad, $id);

if ($sql->execute()) {
    header("Location: index.php?mensaje=Autor actualizado correctamente&tipo=ok");
} else {
    header("Location: index.php?mensaje=Error al actualizar autor&tipo=error");
}

$sql->close();
$conn->close();
exit;
