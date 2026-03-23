<?php

if (isset($_GET['calcular'])) {
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $operacion = $_GET['operacion'];

    if ($operacion == 'suma') {
        $resultado = $num1 + $num2;
        echo "El resultado de la suma es: " . $resultado;
    } elseif ($operacion == 'resta') {
        $resultado = $num1 - $num2;
        echo "El resultado de la resta es: " . $resultado;
    } elseif ($operacion == 'multiplicacion') {
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicación es: " . $resultado;
    } elseif ($operacion == 'division') {
        if ($numero2 != 0) {
            $resultado = $num1 / $num2;
            echo "El resultado de la división es: " . $resultado;
        } else {
            echo "Error: No se puede dividir por cero.";
        }
    } else {
        echo "Operación no válida.";
    }
}