<?php
//Haz un programa que tenga un formulario, el cual deberá recibir una lista de
//números separados por coma. Luego, clasifícalos y muestra lo siguiente en
//pantalla (Divídelo en secciones con <hr>):
//a. Los números positivos.
//b. Los números negativos.
//c. Los 0.
//d. Los números pares.
//e. Los números impares.
//Muestra el conteo de cada categoría y un mensaje si una categoría está
//vacía.

$numeros = [];

if (isset($_GET["numeros"]) && !empty($_GET["numeros"])) {
    $numeros = explode(",", $_GET["numeros"]);
}

    $positivos = [];
    $negativos = [];
    $ceros = [];
    $pares = [];
    $impares = [];

    foreach ($numeros as $numero) {
        $numero = trim($numero);
        if (is_numeric($numero)) {
            if ($numero > 0) {
                $positivos[] = $numero;
            } elseif ($numero < 0) {
                $negativos[] = $numero;
            } else {
                $ceros[] = $numero;
            }

            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
    }

    echo "<hr>";
    echo "<h3>Números Positivos:</h3>";
    if (count($positivos) > 0) {
        echo implode(", ", $positivos);
        echo "<p>Conteo: " . count($positivos) . "</p>";
    } else {
        echo "<p>No hay números positivos.</p>";
    }

    echo "<hr>";
    echo "<h3>Números Negativos:</h3>";
    if (count($negativos) > 0) {
        echo implode(", ", $negativos);
        echo "<p>Conteo: " . count($negativos) . "</p>";
    } else {
        echo "<p>No hay números negativos.</p>";
    }

    echo "<hr>";
    echo "<h3>Ceros:</h3>";
    if (count($ceros) > 0) {
        echo implode(", ", $ceros);
        echo "<p>Conteo: " . count($ceros) . "</p>";
    } else {
        echo "<p>No hay ceros.</p>";
    }

    echo "<hr>";
    echo "<h3>Números Pares:</h3>";
    if (count($pares) > 0) {
        echo implode(", ", $pares);
        echo "<p>Conteo: " . count($pares) . "</p>";
    } else {
        echo "<p>No hay números pares.</p>";
    }

    echo "<hr>";
    echo "<h3>Números Impares:</h3>";
    if (count($impares) > 0) {
        echo implode(", ", $impares);
        echo "<p>Conteo: " . count($impares) . "</p>";
    } else {
        echo "<p>No hay números impares.</p>";
    }