<?php
//Crea un formulario que pida un número entero. Al enviar el formulario, indica lo siguiente:
//a. Si el número es par o impar.
//b. Si el número es positivo o negativo.
//Muestra los resultados en pantalla.

if (isset($_GET['numero'])){
    $numero = $_GET ['numero'];
    echo "El numero ingresado es: $numero <br>";
    if ($numero % 2 == 0){
        echo "El numero es par<br>";
    }else{
        echo "El numero es impar <br>";
    }
}