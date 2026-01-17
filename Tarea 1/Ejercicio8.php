<?php
// Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.

    $numeros = array("2", "13", "30" , "50", "51", "64", "100", "55");
    foreach ($numeros as $numero){
        echo "Los numeros son: $numero<br>";
    }
    for ($i = 0; $i < count($numeros); $i++){
        if ($numeros[$i] > 50){
        echo "los numeros mayores a 50 son: $numeros[$i]" . "<br>";
        }
    }
?>
