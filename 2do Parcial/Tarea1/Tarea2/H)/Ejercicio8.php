<?php
// Crea un formulario que pida una base numérica entera y un exponente
// máximo (Número entre 1 y 10). Al enviar el formulario, calcula y muestra:
// a. Una tabla con las potencias de la base desde el exponente 1 hasta el
// exponente máximo ingresado, con el formato:
// 2^1 = 2
// 2^2 = 4
// 2^3 = 8
// Usa pow() o el operador ** para calcular cada potencia.
// b. La suma de todas las potencias calculadas en la tabla.
// c. Para cada resultado, indica si el número es par o impar.

if ($_SERVER["REQUEST_METHOD"] !== "POST");
$base = $_POST["base"] ?? 0;
$exponenteMaximo = $_POST["exponente"] ?? 0;
$resultados = [];
$sumaPotencias = 0;
for ($i = 1; $i <= $exponenteMaximo; $i++) {
    $potencia = pow($base, $i);
    $sumaPotencias += $potencia;
    $parImpar = ($potencia % 2 === 0) ? "Par" : "Impar";
    $resultados[] = "$base^$i = $potencia ($parImpar)";
}
echo "Tabla de potencias:\n";
foreach ($resultados as $resultado) {
    echo $resultado . "\n";
}
echo "Suma de potencias: " . $sumaPotencias . "\n";
