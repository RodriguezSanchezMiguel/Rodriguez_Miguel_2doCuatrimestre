<?php
// Ejemplo 2: Encuesta de satisfaccion 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nombre"]) && isset($_POST["satisfaccion"])&& isset($_POST["comentarios"])) {
        $nombre = $_POST["nombre"];
        $satisfaccion = $_POST["satisfaccion"];
        $comentarios = $_POST["comentarios"];

        echo"<h2>Resultados de la encuesta:</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Satisfacción:</strong> $satisfaccion</p>";
        echo "<p><strong>Comentarios:</strong> $comentarios</p>";

        echo "<h2>Gracias por participar en la encuesta, $nombre!</h2>";
        echo "<a href='Ejemplo2.html'>Volver a la encuesta</a>";
    }else {
        echo "<h2>Error: Por favor complete todos los campos de la encuesta.</h2>";
        echo "<a href='Ejemplo2.html'>Volver a la encuesta</a>";
    }
