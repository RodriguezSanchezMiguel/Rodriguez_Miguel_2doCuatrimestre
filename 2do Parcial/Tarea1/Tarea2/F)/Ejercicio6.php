<?php
// Crea un formulario que pida:
// a. Un monto en pesos mexicanos (MXN) a convertir.
// b. El tipo de cambio actual: Cuántos pesos equivalen a 1 dólar (USD).
// c. El tipo de cambio actual: Cuántos pesos equivalen a 1 euro (EUR).
// Al enviar el formulario, muestra:
// a. El monto original en pesos.
// b. El equivalente en dólares formateado a 2 decimales.
// c. El equivalente en euros formateado con 2 decimales.
// d. Cuantas unidades de cada moneda se pueden obtener con
// exactamente 100 pesos.

if ($_SERVER["REQUEST_METHOD"] !== "POST");
    
$montoPesos = floatval($_POST["monto"] ?? 0);
$tipoCambioUSD = floatval($_POST["tipoCambioUSD"] ?? 0);
$tipoCambioEUR = floatval($_POST["tipoCambioEUR"] ?? 0);
$equivalenteUSD = $tipoCambioUSD > 0 ? $montoPesos / $tipoCambioUSD : 0;
$equivalenteEUR = $tipoCambioEUR > 0 ? $montoPesos / $tipoCambioEUR : 0;
$unidadesUSDCon100Pesos = $tipoCambioUSD > 0 ? 100 / $tipoCambioUSD : 0;
$unidadesEURCon100Pesos = $tipoCambioEUR > 0 ? 100 / $tipoCambioEUR : 0;

echo "Monto original en pesos: " . number_format($montoPesos, 2) . " MXN\n";
echo "Equivalente en dólares: " . number_format($equivalenteUSD, 2) . " USD\n";
echo "Equivalente en euros: " . number_format($equivalenteEUR, 2) . " EUR\n";
echo "Unidades de USD con 100 pesos: " . number_format($unidadesUSDCon100Pesos, 2) . " USD\n";
echo "Unidades de EUR con 100 pesos: " . number_format($unidadesEURCon100Pesos, 2) . " EUR\n";
