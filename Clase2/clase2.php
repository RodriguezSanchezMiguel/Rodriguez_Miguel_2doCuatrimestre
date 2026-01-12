<?php
// Clase 2 - 12-01-2026

// Operadores en PHP

// Operadores aritmeticos

    $num1 = 25;
    $num2 = 10;
    $num3 = 30;

    $suma = $num1 + $num2;
    $resta = $num3 - $num2;
    $multiplicacion = $num3 * $num2;
    $division = $num1 / $num2;
    $modulo = $num1 % $num2;
    $expononte = $num1 ** 2;
    echo "<p>Suma: $suma <br> Resta: $resta <br> MultiplIcacion: $multiplicacion <br> Division: $division <br> Modulo: $modulo <br> Exponente: $expononte <br></p>";


    // Operadores de asignacion
    $a = 5; // Asignacion simple
    echo"<p> Valor inicial de a: $a </p> <br>";
    $a +=3; // Suma y asigna
    echo "<p> Valor de a despues de += 3: $a </p> <br>";
    $a -= 2;
    echo "<p> Valor de a despues de -= 2: $a </p> <br>";
    $a *= 4;
    echo "<p> Valor de a despues de *= 4: $a </p> <br>";
    $a /= 2;
    echo "<p> Valor de a despues de /= 2: $a </p> <br>";
    $a %= 5;
    echo "<p> Valor de a despues de %= 5: $a </p> <br>";
    $a **= 3;
    echo "<p> Valor de a despues de **= 3: $a </p> <br>";

    //Operadores de comparacion
    $num4 = 15;
    $mayor = $num1 > $num4;
    $menor = $num1 < $num4;
    $igual = $num1 == $num4;
    $igualdad_estricta = $num1 === $num4;
    $diferente = $num1 != $num4;
    $mayor_igual = $num1 >= $num4;
    $menor_igual = $num1 <= $num4;
    echo "<p> Comparaciones: <br> Mayor: $mayor <br> Menor: $menor <br> Igual: $igual <br> Igualdad estricta: $igualdad_estricta <br> Diferente: $diferente <br> Mayor o igual: $mayor_igual <br> Menor o igual: $menor_igual </p>";

    // Operadores logicos
    $x = true;
    $y = false;

    $and = $x && $y;
    $or = $x || $y;
    $not = !$x;
    echo "<p> Operadores logicos : <br> AND logico: $and <br> OR logico: $or <br> NOT logico: $not </p>";
?>