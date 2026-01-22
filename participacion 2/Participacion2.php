<?php
//Ejercicio 1: Haz un  programa que reciba una cadena(ya definida en el codigo), y devuelva la misma cadena pero con con las palabras en orden inverso. Maneja los posibles errores.
try{
$cadena = "Santiago es  raro";
strrev($cadena);
echo("<p> Cadena original: $cadena </p>");
echo("<p> Cadena invertida: " .strrev($cadena). "</p> <br>");
} catch(typeError $e){
    echo("<p> Ha ocurrido un error </p>");
} finally{
    echo("<p> Ejercicio finalizado </p>");
}


//Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (ya definidas en el codigo) y devuelva la suma de esos numeros. Maneja los posibles errores.
try{
$numeros = "10,20,30,40,50";
$arreglo_numeros = explode(",", $numeros);
$suma = 0;
foreach($arreglo_numeros as $numero){
    $suma += (int)$numero;
}
echo("<p> Numeros: $numeros. <br> Suma de los números: $suma </p> <br>");
} catch(typeError $e){
    echo("<p> Ha ocurrido un error </p>");
} finally{
    echo("<p> Ejercicio finalizado </p>");
}


//Ejercicio 3: haz un programa que reciba una cadena de texto (ya definida en el codigo) y cuente cuantas veces aparece una subcadena especifica dentro de esa cadena. Maneja los posibles errores.
try{
    $texto = "Santiago es raro, Santiago es diferente, Santiago es unico";
    $subcadena = "Santiago";
    $contador = substr_count($texto, $subcadena);
    echo("<p> Cadena original: $texto. <br> La subcadena '$subcadena' aparece $contador veces en el texto </p>");
} catch(typeError $e){
    echo("<p> Ha ocurrido un error </p>");
} finally{
    echo("<p> Ejercicio finalizado </p>");
}
?>