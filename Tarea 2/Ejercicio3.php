<?php
// Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.

$palabras = array("manzana", "sol", "computadora", "casa", "elefante", "perro", "programación");
$palabrasLargas = array();
foreach ($palabras as $palabra) {
    echo "Las palabras son: " . $palabra . "<br>";
    if (strlen($palabra) > 5) {
        $palabrasLargas[] = $palabra;
    }
}
echo "Palabras con más de 5 letras son:\n";
foreach ($palabrasLargas as $palabra) {
    echo $palabra . "\n";
}
?>