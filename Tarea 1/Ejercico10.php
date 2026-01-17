<?php
// Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.

$ventas = array(
    "Arroz" => 950,
    "Frijol" => 700,
    "Aceite" => 180,
    "Vinagre" => 30,
    "Jabon de tocador" => 55
);
$total = 0;
foreach ($ventas as $producto => $cantidad) {
echo "Producto: $producto, Cantidad vendida: $cantidad<br>";
$total += $cantidad;
}
echo "Total de productos vendidos: $total";
?>
