<?php
//Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$pares = array();
$impares = array();
foreach ($numeros as $numero) {
    echo "Los numeros son: " . $numero . "<br>";
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}
echo "Números pares: " . implode(", ", $pares) . "<br>";
echo "Números impares: " . implode(", ", $impares) . "<br>";
?>