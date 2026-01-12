<?php
    // ejercicio 1: Crear un programa en PHP que calcule el area de un rectangulo (base * altura) y el perimetro (2 * (base + altura)).Mostrar los resultados en pantalla.
    $base = 4;
    $altura = 6;

    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "<p> El area del rectangulo es : $area <br>, El perimetro del rectangulo es: $perimetro </p>";

    //ejercicio 2:Crea un programa en PHP que realice las siguientes conversiones de monedas: De peso a dolar, de dolar a euro, de euro a libra esterlina, y de peso a euro.Muestra los resultados en pantalla

    $peso = 100;
    $dolar = $peso / 17.94;
    $euro = $dolar * 0.94;
    $libra = $euro *0.87;
    $peso_a_euro = $euro * 20.94;
    echo "<p> Conversiones de monedas: <br> De peso a dolar: $dolar <br> De dolar a euro: $euro <br> De euro a libra esterlina: $libra <br> De peso a euro: $peso </p>";

    // ejercicio 3: Crear un programa en PHP que calcule el IMC (Indice de masa corporal) de una persona. Muestra los resultados en pantalla.
    $peso_kg = 70;
    $altura_m = 1.70;
    $imc = $peso_kg / ($altura_m ** 2);
    echo "<p> El indice de masa corporal (IMC) es: $imc </p>";

    // ejercicio 4: Crea un programa que convierta una temperatura dada en grados celsius a farenheit y kelvin. Muestra los resultados en pantalla 
    $celsius = 20;
    $farenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    echo "<p> Conversion de temperatura: <br> De celsius a farenheit: $farenheit <br> De celsius a kelvin: $kelvin </p>";

?>