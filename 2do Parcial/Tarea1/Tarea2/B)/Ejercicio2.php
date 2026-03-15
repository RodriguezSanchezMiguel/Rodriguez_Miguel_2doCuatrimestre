<?php
//Crea un formulario que pida un párrafo o texto libre (Utiliza un textarea). Al
//enviar el formulario, muestra lo siguiente:
//a. El número total de palabras en el texto (Sin contar espacios en
//blanco).
//b. El número de oraciones, contando los puntos finales “.” Presentes en
//el texto.
//c. La palabra más larga del texto.
//d. El promedio de caracteres por palabra, redondeado a 2 decimales
//(Usa round()).

if ($_SERVER["REQUEST_METHOD"] !== "POST");
$texto = $_POST["texto"] ?? "";
$palabras = str_word_count($texto, 1);
$numeroPalabras = count($palabras);
$numeroOraciones = substr_count($texto, ".");
$palabraMasLarga = "";
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabraMasLarga)) {
        $palabraMasLarga = $palabra;
    }
}
$promedioCaracteres = $numeroPalabras > 0 ? round(strlen(str_replace(" ", "", $texto)) / $numeroPalabras, 2) : 0;
echo "Número total de palabras: " . $numeroPalabras . "\n";
echo "Número de oraciones: " . $numeroOraciones . "\n";
echo "Palabra más larga: " . $palabraMasLarga . "\n";
echo "Promedio de caracteres por palabra: " . $promedioCaracteres . "\n";
