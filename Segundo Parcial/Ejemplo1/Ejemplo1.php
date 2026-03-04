<?php
    // ejemplo.php

    // Verificar si se han enviado los datos a través del método GET
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        // Obtener los datos del formulario
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

    // Validaciones basicas: Verificar que no esten vacios, que la edad sea un numeroy que no hayan espacios en blanco
    if (!empty($nombre) && !empty($edad) && is_numeric($edad)){
        // Limpíar los campos para evitar espacios vacios
        $nombre = trim($nombre);
        $edad = trim($edad);
        // Mostrar el mensaje de bienvenida
        echo "<h1>Bienvenido, $nombre!</h1> <br>";
        echo"<p> Tu edad es: $edad años.</p>";
    }else{
        echo "<h1>Por favor, ingresa un nombre y una edad válidos.</h1>";
    }
    }
    ?>