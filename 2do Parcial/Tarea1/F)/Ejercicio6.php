<?php
//Crea un programa que tenga un formulario, en el cual se solicite el nombre
//completo. El script PHP debe extraer las iniciales de cada palabra y
//mostrarlas separadas por puntos y mostrarlo en pantalla. Por ejemplo, si el
//usuario ingresa “Mario Alonso Segovia Gutiérrez”, el programa
//mostrará en pantalla -> “M.A.S.G.”

$nombreCompleto = "";
if (isset($_GET["nombreCompleto"]) && !empty($_GET["nombreCompleto"])) {
    $nombreCompleto = $_GET["nombreCompleto"];
}
$iniciales = "";
if (!empty($nombreCompleto)) {
    $palabras = explode(" ", $nombreCompleto);
    foreach ($palabras as $palabra) {
        if (!empty($palabra)) {
            $iniciales .= strtoupper($palabra[0]) . ".";
        }
    }
}
echo "<h3>Iniciales:</h3>";
if (!empty($iniciales)) {
    echo "<p>" . $iniciales . "</p>";
} else {
    echo "<p>No se ingresó un nombre completo.</p>";
}
