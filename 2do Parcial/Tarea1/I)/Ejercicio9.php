<?php
//Haz un programa que solicite una frase mediante un formulario y una palabra
//a buscar. Posteriormente, imprime (Muestra en pantalla):
//a. Cuántas veces aparece la palabra en la frase (Sin importar
//mayúsculas o minúsculas).
//b. Si la frase contiene o no la palabra buscada.
//c. La frase con todas las apariciones de las palabras resaltadas en
//negritas (etiqueta <strong> </strong> para resaltar en negritas).
//Nota: Puedes utilizar las funciones substr_count(), stripos(), str_ireplace().

if (isset($_GET['frase']) && isset($_GET['palabra'])) {
    $frase = $_GET['frase'];
    $palabra = $_GET['palabra'];

    if (!empty($frase) && !empty($palabra)) {
        $frase = trim($frase);
        $palabra = trim($palabra);

        $contador = substr_count(strtolower($frase), strtolower($palabra));
        $contienePalabra = stripos($frase, $palabra) !== false;
        $fraseResaltada = str_ireplace($palabra, "<strong>$palabra</strong>", $frase);

        echo "<h1>La palabra '$palabra' aparece $contador veces en la frase.</h1> <br>";
        echo "<h1>La frase " . ($contienePalabra ? "contiene" : "no contiene") . " la palabra '$palabra'.</h1> <br>";
        echo "<h1>Frase con palabras resaltadas: $fraseResaltada</h1>";
    } else {
        echo "<h1>Por favor, ingresa una frase y una palabra válidas.</h1>";
    }
}