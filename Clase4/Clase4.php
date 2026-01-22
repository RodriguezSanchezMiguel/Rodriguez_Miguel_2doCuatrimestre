<?php
//Clase 4 - 22-01-2026

//Manejo de cxadenas
$cadena1 = "Esto es una cadena de texto.";
$cadena2 = "Esta es otra cadena.";

//Concatenacion de cadenas
$cadena_concatenada = $cadena1 . " " . $cadena2;
echo("<p> Cadena concatenada: $cadena_concatenada </p>");

//Longitud de cadenas
$longitud_cadena1 = strlen($cadena1);
$longitud_cadena2 = strlen($cadena2);
echo("<p> Longitud de la cadena1: $longitud_cadena1. Longitud de la cadena2: $longitud_cadena2 </p> <br>");

//Convertir una cadena a mayusculas
$cadena1_a_mayusculas = strtoupper($cadena1);
echo("<p> Cadena1 convertida a mayusculas: Cadena original: $cadena1, Cadena en mayusculas: $cadena1_a_mayusculas </p> <br>");

//Convertir una cadena a minusculas
$cadena2_a_minusculas = strtolower($cadena2);
echo("<p> Cadena2 convertida a minusculas: Cadena original: $cadena2, Cadena en minusculas: $cadena2_a_minusculas </p> <br>");

//Convertir una cadena en arreglo de palabras 
$nombres = "Juan, Mario, Jose, Enrique, Pablo, Lucas, Martha, Fernanda";
echo("<p> Cadena de nombres: $nombres </p> <br>");
$arreglo_nombres = explode(", ", $nombres);
echo("<p> Arreglo de nombres: </p>");
print_r($arreglo_nombres);
foreach($arreglo_nombres as $nombre){
    echo("<li> $nombre </li>");
}

$frutas = "Manzana Pera Uva Naranja Sandia Melon Cereza";
$arreglo_frutas = explode(" ", $frutas);
echo("<p> Cadena de frutas: $frutas </p> <br>");
echo("<p> Arreglo de frutas: </p>");
print_r($arreglo_frutas);
foreach($arreglo_frutas as $fruta){
    echo("<li> $frutas </li>");
}

//convertir un arreglo en cadena
$arreglo_colores = array("Rojo", "Cafe", "Verde", "Azul", "Amarillo", "Anaranjado", "Morado", "Rosado");
echo("<p> Arrreglo de colores: </p>");
print_r($arreglo_colores);
$cadena_colores = implode(", ", $arreglo_colores);
echo("<p> Cadena de colores: $cadena_colores </p>");

//Otras funciones para manejo de cadenas
$frase = "El aprendisaje de php es muy divertido y util.";
echo("<p> Frase original: $frase </p> <br>");
$subcadena = "php";
$posicion_subcadena = strpos($frase, $subcadena);
echo("<p> La subcadena '$subcadena' se encuentra en la posicion: $posicion_subcadena </p> <br>");
$frase_reemplazada = str_replace("divertido", "emocionante", $frase);
echo("<p> Frase con reemplazo: $frase_reemplazada </p> <br>");
$frase_modificada = str_replace("PHP", "Python", $frase);
echo("<p> Frase original: $frase </p>");
strrev($frase);
echo("<p> Frase invertida: " .strrev($frase) . "</p> <br>");

//Manejo de errores 
//Comparativa con Python: try - except- finally - 
try{
    $num1 = 20;
    $num2 = 0;
    $resultado = $numero1 / $numero2;
    echo("<p> El resultado de la division es: $resultado </p> <br>");
}catch(DivisionByZeroError $e){
    echo("<p> Error: No se puede dividir entre cero. </p> <br>");
}finally{
    echo("<p> Operacion finalizada. </p> <br>");
}
echo("<p> El programa continua ejecutandose normalmente. </p> <br>");
?>