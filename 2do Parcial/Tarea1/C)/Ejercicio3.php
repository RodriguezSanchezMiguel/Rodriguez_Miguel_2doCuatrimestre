<?php
//Haz un programa que solicite al usuario el nombre de un artículo, su precio
//original y el porcentaje de descuento. Posteriormente muestra en pantalla:
//a. El monto del descuento.
//b. El precio final con descuento aplicado.
//c. Un mensaje indicando si el descuento es “Bajo” (menos del 10%),
//“Moderado (10% al 30%) o “Alto” (más del 30%).

if (isset($_GET['nombre']) && isset($_GET['precio']) && isset($_GET['descuento'])){
    $articulo = $_GET['nombre'];
    $precio = $_GET['precio'];
    $descuento = $_GET['descuento'];

    if(!empty($articulo) && !empty($precio) && !empty($descuento) && is_numeric($precio) && is_numeric($descuento)){
        $articulo = trim($articulo);
        $precio = trim($precio);
        $descuento = trim($descuento);

        $totaldescuento = ($precio * $descuento) / 100;
        $preciototal = $precio - $totaldescuento;

        echo "<h1>El articulo es: $articulo</h1> <br>";
        echo "<h1>El monto del descuento es: $totaldescuento</h1> <br>";
        echo "<h1>El precio final es de: $preciototal</h1> <br>";

        if($descuento < 10){
            echo "<h1>El descuento es bajo</h1>";
        } elseif($descuento >= 10 && $descuento <= 30){
            echo "<h1>El descuento es moderado</h1>";
        } else {
            echo "<h1>El descuento es alto</h1>";
        }
    } else {
        echo "<h1>Por favor, ingresa un articulo, precio y descuento válidos.</h1>";
    }
}
?>