<?php
// Crea un formulario que pida una palabra o frase. Al enviar el formulario
//muestra lo siguiente:
//a. La palabra o frase original tal como fue ingresada.
//b. La palabra o frase invertida (Puedes utilizar strrev()).
//c. Si es un palíndromo o no (Ignora mayúsculas. Minúsculas y espacios
//en blanco).

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: Ejercicio1.html");
    exit;
}

$fraseOriginal = $_POST["frase"] ?? "";
$fraseInvertida = strrev($fraseOriginal);

// Normaliza el texto para comparar sin mayusculas/minusculas ni espacios.
$fraseNormalizada = strtolower(str_replace(" ", "", $fraseOriginal));
$fraseNormalizadaInvertida = strrev($fraseNormalizada);
$resultadoPalindromo = ($fraseNormalizada !== "" && $fraseNormalizada === $fraseNormalizadaInvertida)
    ? "Si, es un palindromo."
    : "No, no es un palindromo.";

echo "Original: " . $fraseOriginal . "\n";
echo "Invertida: " . $fraseInvertida . "\n";
echo "Palindromo: " . $resultadoPalindromo . "\n";