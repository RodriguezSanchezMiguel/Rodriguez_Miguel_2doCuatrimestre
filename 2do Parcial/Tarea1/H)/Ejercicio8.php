<?php
//Haz un formulario que pida un número entero positivo N. Posteriormente
//calcula y muestra en pantalla lo siguiente:
//a. La suma de todos los números del 1 al N (Es decir, si el usuario ingresa
//9, muestra el resultado de sumar 1+2+3+4+5+6+7+8+9).
//b. La suma de todos los números pares entre 1 y N (Es decir, si el usuario
//ingresa 9, muestra el resultado de sumar 2+4+6+8).
//c. La suma de todos los números impares entre 1 y N (Es decir, si el
//usuario ingresa 9, muestra el resultado de sumar 1+3+5+7+9).

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    if (!empty($numero) && is_numeric($numero) && $numero > 0) {
        $numero = trim($numero);

        $sumaTotal = 0;
        $sumaPares = 0;
        $sumaImpares = 0;

        for ($i = 1; $i <= $numero; $i++) {
            $sumaTotal += $i;

            if ($i % 2 == 0) {
                $sumaPares += $i;
            } else {
                $sumaImpares += $i;
            }
        }

        echo "<h1>La suma de todos los números del 1 al N es: $sumaTotal</h1> <br>";
        echo "<h1>La suma de todos los números pares entre 1 y N es: $sumaPares</h1> <br>";
        echo "<h1>La suma de todos los números impares entre 1 y N es: $sumaImpares</h1> <br>";
    } else {
        echo "<h1>Por favor, ingresa un número entero positivo válido.</h1>";
    }
}
