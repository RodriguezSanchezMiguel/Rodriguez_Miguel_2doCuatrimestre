<?php
// Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.

    $ventas = array(
        "Jabon" => 15,
        "Sal" => 5,
        "Arroz" => 12,
        "Leche" => 7,
        "Pasta" => 1,
        "Galletas" => 18
    );
    $totaldeprodeuctosvendidos = 0;
    foreach ($ventas as $producto => $cantidad) {
    echo "Producto: " . $producto . "  Cantidad vendida: " . $cantidad . "\n" ."<br>";
    $totaldeprodeuctosvendidos += $cantidad;
    }
    echo "El total de productos vendidos es: " . $totaldeprodeuctosvendidos;
?>