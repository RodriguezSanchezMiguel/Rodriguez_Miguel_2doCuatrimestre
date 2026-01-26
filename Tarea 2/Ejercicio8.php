<?php
// Haz un programa que declare una frase y reemplace una palabra por otra.

$frase = "El perro corre en el parque";
$palabra_remplazada = "perro";
$palabra_nueva = "policia";
$nueva_frase = str_replace($palabra_remplazada, $palabra_nueva, $frase);
echo "La frase es : " . $frase . "<br>";
echo "La nueva frase es: " . $nueva_frase;
?>