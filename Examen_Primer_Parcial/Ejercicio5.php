<?php
//Haz un programa que declare un arreglo asociativo de productos con precios y calcule el total
$productos = array(
    "Pera" => 13,
    "Manzana" => 45,
    "Aceite" => 67,
    "Arroz" => 89
);
$total = 0;
foreach ($productos as $producto => $cantidad) {
echo "Producto: $producto, Precio: $cantidad<br>";
$total += $cantidad;
}
echo "Total: $total";