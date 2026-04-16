<?php

require_once "Connbiblioteca.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nombre_autor"]) && !empty($_POST["nombre_autor"])) {
        $nombre_autor = $_POST["nombre_autor"];
        $nacionalidad = $_POST["nacionalidad"];
        $sql = $conn->prepare("INSERT INTO autores (nombre, nacionalidad) VALUES (?, ?)");
        $sql->bind_param("ss", $nombre_autor, $nacionalidad);
        
        if ($sql->execute()) {
            echo "Autor agregado exitosamente.";
        } else {
            echo "Error al registrar el autor: " . $sql->error;
        }
        $sql->close();
        $conn->close();
    }
}