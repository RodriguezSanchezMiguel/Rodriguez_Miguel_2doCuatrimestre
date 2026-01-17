<?php
// Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.

    $ventasDiarias = array("5000", "4500", "5100", "6000", "1000", "6900", "7650");
    foreach ($ventasDiarias as $venta){
        echo "El total de las ventas del dia es de: $venta<br>";
    }
    for ($i = 0; $i < 7; $i++) {
        if ($ventasDiarias[$i] >= 5000) {
            echo "Fue un buen día de ventas<br>";
        } else {
            echo "Ventas bajas<br>";
        }
    }
?>
    