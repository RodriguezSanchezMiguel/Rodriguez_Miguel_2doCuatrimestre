<?php
//Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.

$ventasSemana = [
    "Lunes" => 2900,
    "Martes" => 3800,
    "Miércoles" => 7000,
    "Jueves" => 2100,
    "Viernes" => 3000,
    "Sábado" => 1300,
    "Domingo" => 3300
];
$diasMayor3000 = 0;
foreach ($ventasSemana as $dia => $venta) {
    echo "Día: $dia, Ventas: $$venta<br>";
    if ($venta > 3000) {
    $diasMayor3000++;
    }
}
echo "Número de días con ventas mayores a $3,000: " . $diasMayor3000;
?>
