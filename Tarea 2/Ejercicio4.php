<?php
//Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.

$cadena = "Dr House es un personaje ficticio de una serie de television";
echo "La frase es: " . $cadena . "<br>";
$cadena = strtolower($cadena);
$cadena = str_replace(" ", "", $cadena);
$letras = count_chars($cadena, 1);
foreach ($letras as $letra => $cantidad) {
    echo "La letra '" . chr($letra) . "' aparece " . $cantidad . " veces.<br>";
}
?>