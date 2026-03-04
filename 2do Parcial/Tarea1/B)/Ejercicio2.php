<?php
//Crea un formulario que solicite el nombre de un producto y su precio sin IVA.
//Al enviar el formulario, se deberá calcular el IVA y mostrar lo siguiente:
//a. El monto del IVA (16%).
//b. El precio total con IVA incluido.
//Muestra los resultados en pantalla.

if (isset($_GET['producto']) && isset($_GET['precio'])){
    $producto = $_GET['producto'];
    $preciosinIVA = $_GET['precio'];
    $IVA = $preciosinIVA * 0.16;
    $precioconIVA = $preciosinIVA + $IVA;

    echo "Producto: $producto <br>";
    echo "Precio sin IVA: $preciosinIVA <br>";
    echo "IVA: $IVA <br>";
    echo "Precio con IVA: $precioconIVA <br>";
}
