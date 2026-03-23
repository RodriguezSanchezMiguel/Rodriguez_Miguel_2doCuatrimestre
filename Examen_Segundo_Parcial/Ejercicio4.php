<?php

if (isset($_POST["palabras"])) {
    $palabras = $_POST["palabras"];
    $palabras = trim($palabras);
    $palabras = explode(",", $palabras);
    $palabras = array_map('trim', $palabras);
    $palabras = array_filter($palabras);

    echo "Cantidad de palabras: " . count($palabras) . "<br>";

    echo "Palabras ingresadas:<br>";
    foreach ($palabras as $palabra) {
        echo $palabra . "<br>";
    }

    sort($palabras);
    echo "Palabras en orden alfabético:<br>";
    foreach ($palabras as $palabra) {
        echo $palabra . "<br>";
    }
}
