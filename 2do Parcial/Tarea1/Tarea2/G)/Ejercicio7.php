<?php
// Crea un formulario que pida:
// a. Litros de gasolina cargados.
// b. Precio por litro (En pesos).
// c. Kilómetros recorridos con esa carga.
// d. Un presupuesto adicional disponible (en pesos) para cargar más
// gasolina.
// Al enviar el formulario, calcula y muestra:
// a. El costo total de la carga actual. (litros x precio por litro)

// b. El rendimiento del vehículo en km/litro (kilómetros / litros), formatea
// con 2 decimales.
// c. El costo por kilómetro recorrido (costo total / kilómetros), formatea con
// 2 decimales.
// d. Cuántos litros adicionales se pueden comprar con el presupuesto
// extra y cuántos kilómetros adicionales podría recorrer.

if ($_SERVER["REQUEST_METHOD"] !== "POST");
    
$litros = floatval($_POST["litros"] ?? 0);
$precioPorLitro = floatval($_POST["precio"] ?? 0);
$kilometros = floatval($_POST["kilometros"] ?? 0);
$presupuestoExtra = floatval($_POST["presupuesto"] ?? 0);
$costoTotal = $litros * $precioPorLitro;
$rendimiento = ($litros > 0) ? $kilometros / $litros : 0;
$costoPorKilometro = ($kilometros > 0) ? $costoTotal / $kilometros : 0;
$litrosAdicionales = ($precioPorLitro > 0) ? $presupuestoExtra / $precioPorLitro : 0;
$kilometrosAdicionales = $litrosAdicionales * $rendimiento;
echo "Costo total de la carga actual: $" . number_format($costoTotal, 2) . "\n";
echo "Rendimiento del vehículo: " . number_format($rendimiento, 2) . " km/litro\n";
echo "Costo por kilómetro recorrido: $" . number_format($costoPorKilometro, 2) . "\n";
echo "Litros adicionales que se pueden comprar con el presupuesto extra: " . number_format($litrosAdicionales, 2) . " litros\n";
echo "Kilómetros adicionales que podría recorrer: " . number_format($kilometrosAdicionales, 2) . " km\n";
