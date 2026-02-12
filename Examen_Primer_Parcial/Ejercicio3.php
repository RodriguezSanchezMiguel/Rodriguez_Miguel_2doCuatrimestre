<?php
//HAz un programa que declare un arreglo y cuente pares e impares
$numeros = array(3, 14, 16, 45, 67, 90, 34, 23, 56,);
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