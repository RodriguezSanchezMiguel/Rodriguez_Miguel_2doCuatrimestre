<?php
//Haz un programa que declare una frase y cuente las vocales
$frase = "House es un doctor de una serie del mismo nombre";
echo "La frase es: " . $frase . "<br>";
$vocales = array('a', 'e', 'i', 'o', 'u');
$frase = strtolower($frase);
$frase = str_replace(" ", "", $frase);
$vocales = count_chars($frase, 1);
foreach ($vocales as $vocal => $cantidad) {
    echo "La letra '" . chr($vocal) . "' aparece " . $cantidad . " veces.<br>";
}
