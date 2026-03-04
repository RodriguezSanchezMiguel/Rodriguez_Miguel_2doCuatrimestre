<?php
//Haz un formulario que solicite tres números. El script PHP, debe determinar
//y mostrar:
//a. Cuál es el número mayor.
//b. Cuál es el número menor.
//c. Cuál es el número que queda en el rango medio.
//Si dos o más números son iguales, indícalo con un mensaje apropiado.

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if(!empty($num1) && !empty($num2) && !empty($num3) && is_numeric($num1) && is_numeric($num2) && is_numeric($num3)){
        $num1 = trim($num1);
        $num2 = trim($num2);
        $num3 = trim($num3);

        if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
            echo "<h1>Dos o más números son iguales.</h1>";
        } else {
            $numeros = array($num1, $num2, $num3);
            sort($numeros);
            echo "<h1>El número mayor es: " . end($numeros) . "</h1>";
            echo "<h1>El número menor es: " . reset($numeros) . "</h1>";
            echo "<h1>El número del medio es: " . $numeros[1] . "</h1>";
        }
    } else {
        echo "<h1>Por favor, ingresa tres números válidos.</h1>";
    }
}