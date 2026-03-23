<?php

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if(is_numeric($num1) && is_numeric($num2)){
        if($num1 < $num2){
            echo "Números comprendidos entre $num1 y $num2:<br>";
            for($i = $num1; $i <= $num2; $i++){
                if($i % 3 == 0){
                    echo "$i es múltiplo de 3<br>";
                } else {
                    echo "$i<br>";
                }
            }
        } elseif ($num1 == $num2) {
            echo "Los números son iguales.";
        } else {
            echo "El número final debe ser mayor que el número inicial.";
        }
    } else {
        echo "Por favor, ingrese números enteros válidos.";
    }
} else {
    echo "Por favor, ingrese ambos números.";
}