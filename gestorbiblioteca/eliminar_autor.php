<?php

require_once "conexion.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

if ($id <= 0) {
    header("Location: index.php?mensaje=ID invalido&tipo=error");
    exit;
}

$sql = $conn->prepare("DELETE FROM autores WHERE id = ?");
$sql->bind_param("i", $id);

if ($sql->execute()) {
    header("Location: index.php?mensaje=Autor eliminado correctamente&tipo=ok");
} else {
    header("Location: index.php?mensaje=Error al eliminar autor&tipo=error");
}

$sql->close();
$conn->close();
exit;
