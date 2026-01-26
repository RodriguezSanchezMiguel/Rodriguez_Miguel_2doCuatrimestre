<?php
//Haz un programa que declare una cadena y cuente cuántas vocales tiene.

$cadena = "Dr. House es un personaje ficticio de la serie de televisión del mismo nombre.";
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contadorVocales = 0;
$longitudCadena = strlen($cadena);
for ($i = 0; $i < $longitudCadena; $i++) {
    $caracter = strtolower($cadena[$i]);
    if (in_array($caracter, $vocales)) {
        $contadorVocales++;
    }
}
echo "La cadena es: $cadena <br>";
echo "La cantidad de vocales es: $contadorVocales <br>";
?>